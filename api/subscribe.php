<?php
include "dbconnect.php";

$data = getJsonData();
$method = $_SERVER['REQUEST_METHOD'];

function existsEmailFromSubscribe(mysqli $conn, $email): bool
{
    $sql = "SELECT * FROM subscribe WHERE email = '$email'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        return true;
    }

    return false;
}

function getJsonData()
{
  $dataAsJson = file_get_contents("php://input");
  $dataFromPage = json_decode($dataAsJson, true);
  return $dataFromPage ?? null;
}

try {
    $conn = createDBConnection();
    if ($method === 'POST' && $data) {
        $email = $data["email"];

        if (existsEmailFromSubscribe($conn, $email)) {
            throw new Error('Такой email уже существует');
        }

        $sql = "INSERT INTO subscribe (email) VALUES ('$email')";
        if ($conn->query($sql)) {
            echo json_encode(["message" => "Данные успешно добавлены"]);
        } else {
            throw new Error($conn->error);
        }
    } else {
        throw new Error('проблемы с датой!');
    }
} catch (\Throwable $th) {
    header('HTTP/1.1 601');
    die($th->getMessage());
};