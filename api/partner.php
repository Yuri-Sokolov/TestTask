<?php

const HOST = 'localhost';
const USERNAME = 'test_user';
const PASSWORD = 'password';
const DATABASE = 'test';

$data = getJsonData();
$method = $_SERVER['REQUEST_METHOD'];

function createDBConnection(): mysqli
{
    $conn = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

function closeDBConnection(mysqli $conn): void
{
    $conn->close();
}

function existsEmailFromDB(mysqli $conn, $email): bool
{
    $sql = "SELECT * FROM partners WHERE email = '$email'";
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
        $phone = $data["phone"];
        $companyName = $data["companyName"];
        $description = $data["companyDescription"] ?? null;


        if (existsEmailFromDB($conn, $email)) {
            throw new Error('Такой email уже существует');
        }

        $sql = "INSERT INTO partners (email, phone, company_name, description) 
        VALUES ('$email', '$phone', '$companyName', '$description')";
        if ($conn->query($sql)) {
            echo json_encode(["message" => "Данные успешно добавлены"]);
            // header('Location: ../index.php');
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