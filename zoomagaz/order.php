<?php
session_start();

// Если корзина пуста, перенаправляем обратно на страницу корзины
if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    header('Location: cart.php');
    exit;
}

// Получаем логин заказчика из сессии (если не установлен, по умолчанию 'guest')
$login = isset($_SESSION['login']) ? $_SESSION['login'] : 'guest';

// Параметры подключения к базе данных
$host     = 'localhost';
$dbname   = 'zoomagaz';
$username = 'root';
$password = '';

// Устанавливаем соединение с базой данных с помощью mysqli
$mysqli = new mysqli($host, $username, $password, $dbname);
if ($mysqli->connect_error) {
    die('Ошибка подключения: ' . $mysqli->connect_error);
}

// Готовим запрос для вставки данных по каждому товару
$stmt = $mysqli->prepare("INSERT INTO orders (category, product_name, total_cost, login, order_date) VALUES (?, ?, ?, ?, ?)");
if (!$stmt) {
    die('Ошибка подготовки запроса: ' . $mysqli->error);
}

$orderDate = date('Y-m-d H:i:s');

foreach ($_SESSION['cart'] as $productName => $item) {
    // В корзине ожидается, что помимо 'price' и 'quantity' сохранено и 'category'
    $category   = isset($item['category']) ? $item['category'] : '';
    $totalCost  = $item['price'] * $item['quantity'];
    
    // Связываем параметры: 
    // s — строка, i — целое число (для total_cost можно использовать 'd' для decimal, но здесь i тоже подойдет, если суммы целые)
    $stmt->bind_param('ssiss', $category, $productName, $totalCost, $login, $orderDate);
    $stmt->execute();
}

// Закрываем подготовленный запрос и соединение с БД
$stmt->close();
$mysqli->close();

// Очищаем корзину после оформления заказа
$_SESSION['cart'] = [];

// Формируем сообщение для пользователя
$message = "Заказ оформлен успешно!";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Оформление заказа</title>
  <link rel="stylesheet" href="styles/order.css">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c&display=swap"
      rel="stylesheet"
    />

</head>
<body>
      <h1>Оформление заказа</h1>
      <p class="message"><?php echo htmlspecialchars($message); ?></p>
      <a href="index.php" class="button">Вернуться к покупкам</a>
</body>
</html>
