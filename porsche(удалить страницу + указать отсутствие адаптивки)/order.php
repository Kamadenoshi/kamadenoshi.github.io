<?php
header('Content-Type: application/json');

$host = "localhost";
$user = "root";
$password = "";
$dbname = "porsche";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
  echo json_encode(["success" => false, "message" => "Ошибка подключения"]);
  exit;
}

$login = $_POST['login'] ?? '';
$model = $_POST['model'] ?? '';
$trim = $_POST['trim'] ?? '';
$color = $_POST['color'] ?? '';
$price = $_POST['price'] ?? '';

$stmt = $conn->prepare("INSERT INTO orders (login, model, trim, color, price) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $login, $model, $trim, $color, $price);

if ($stmt->execute()) {
  echo json_encode(["success" => true, "message" => "Заказ оформлен"]);
} else {
  echo json_encode(["success" => false, "message" => "Ошибка: " . $conn->error]);
}

$stmt->close();
$conn->close();
?>
