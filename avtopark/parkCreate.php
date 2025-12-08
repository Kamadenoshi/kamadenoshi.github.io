<?php
session_start();

// Подключение к базе данных
$mysql = new mysqli("localhost", "root", "", "smartpark");
$mysql->query("SET NAMES 'utf8'");

if ($mysql->connect_error) {
    echo "Ошибка подключения к базе данных: " . $mysql->connect_error;
    exit();
}

// Проверка авторизации
if (!isset($_SESSION['login'])) {
    header("Location: login.php"); // Перенаправление на страницу входа
    exit();
}

// Получение данных пользователя
$login = $_SESSION['login'];
$parkname = null;

// Запрос на получение названия автопарка из таблицы accounts
$result = $mysql->query("SELECT parkname FROM accounts WHERE login = '$login'");
if ($result && $row = $result->fetch_assoc()) {
    $parkname = $row['parkname']; // Извлекаем название автопарка
} else {
    echo "Ошибка: не удалось найти автопарк для пользователя.";
    exit();
}

// Функция добавления машины
function createPark($model, $number, $parkname) {
    global $mysql;

    // Проверка на наличие обязательных данных
    if (empty($model) || empty($number) || empty($parkname)) {
        echo "Ошибка: Недостаточно данных для добавления машины.";
        return false;
    }

    // Добавление машины в таблицу cars
    $query = "INSERT INTO cars (model, number, parkname) VALUES ('$model', '$number', '$parkname')";
    if ($mysql->query($query)) {
        return true;
    } else {
        echo "Ошибка при добавлении машины: " . $mysql->error;
        return false;
    }
}

// Обработка формы добавления машины
if (isset($_POST['carCreate'])) {
    $model = $_POST['model'];
    $number = $_POST['number'];

    if (createPark($model, $number, $parkname)) {
        header("Location: cars.php"); // Перенаправление на страницу автопарка
        exit();
    }
}
