<?php
include "dbconnect.php";

header("Content-Type: application/json");

$conn = createDBConnection();

if ($conn->connect_error) {
    die(json_encode(["error" => "Ошибка подключения: " . $conn->connect_error]));
}

$data = json_decode(file_get_contents("php://input"), true);
$email = $data['email'];

$stmt = $conn->prepare("SELECT * FROM partners WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo json_encode($row);
} else {
    http_response_code(600);
    echo json_encode(["error" => "Email не найден"]);
}

$stmt->close();
$conn->close();
?>