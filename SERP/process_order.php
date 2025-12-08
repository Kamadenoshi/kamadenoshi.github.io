<?php
ob_start();
ini_set('display_errors', 0);
error_reporting(0);
header('Content-Type: application/json; charset=utf-8');

// Получаем JSON из тела запроса
$jsonData = file_get_contents('php://input');
$cartItems = json_decode($jsonData, true);

if (empty($cartItems)) {
    ob_end_clean();
    echo json_encode(['success' => false, 'message' => 'Корзина пуста']);
    exit;
}

// Настройте параметры подключения к базе данных
$dsn = 'mysql:host=localhost;dbname=SERP;charset=utf8';
$username = 'root';
$password = '';

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Добавляем товары в таблицу order_items
    $stmtItem = $pdo->prepare("INSERT INTO order_items (product_name, price, quantity)
                               VALUES (:product_name, :price, :quantity)");
    foreach ($cartItems as $item) {
        $stmtItem->execute([
            ':product_name' => $item['name'],
            ':price'        => $item['price'],
            ':quantity'     => $item['quantity']
        ]);
    }
    ob_end_clean();
    echo json_encode(['success' => true, 'message' => 'Заказ успешно оформлен']);
} catch (PDOException $e) {
    ob_end_clean();
    echo json_encode(['success' => false, 'message' => 'Ошибка БД: ' . $e->getMessage()]);
}
?>
