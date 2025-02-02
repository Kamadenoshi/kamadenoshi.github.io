<?php

session_start();

$mysql = new mysqli("localhost", "root", "", "zoomagaz");
$mysql->query("SET NAMES 'utf8'");

// Если корзина ещё не создана, создаём её
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Проверка, переданы ли необходимые данные из формы
if (isset($_POST['productName']) && isset($_POST['price'])) {
    $productName = $_POST['productName'];
    $price = $_POST['price'];
    $category = $_POST['category'];

    // Если товар уже есть в корзине, увеличиваем количество
    if (isset($_SESSION['cart'][$productName])) {
        $_SESSION['cart'][$productName]['quantity']++;
    } else {
        // Добавляем новый товар в корзину
        $_SESSION['cart'][$productName] = [
            'price' => $price,
            'quantity' => 1,
            'category' => $category
        ];
    }
}

// Перенаправляем пользователя обратно на главную страницу
header('Location: cart.php');
exit;
?>