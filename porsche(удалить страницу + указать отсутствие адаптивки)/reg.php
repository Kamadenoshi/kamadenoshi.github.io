<?php
$mysql = new mysqli("localhost", "root", "", "porsche");
$mysql->query("SET NAMES 'utf8'");

session_start();

$login = isset($_SESSION['login']) ? $_SESSION['login'] : 'Гость';
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ВХОД</title>
    <link rel="stylesheet" href="styles/login.css" />
  </head>
  <body>
    <div class="bg-cont">
      <img src="styles/bg-pattern.png" alt="" />
    </div>
    <header>
      <div class="menu">
        <input type="checkbox" id="burger" />
        <label class="burger" for="burger">
          <span></span>
          <span></span>
          <span></span>
        </label>
        <ul class="menu__box">
          <li class="menu__item"><a href="index.php">Главная</a></li>
          <li class="menu__item"><a href="modell.php">Модели</a></li>
          <li class="menu__item"><a href="market.html">Маркет</a></li>
          <li class="menu__item"><a href="#">История</a></li>
          <li class="menu__item"><a href="#">Вход</a></li>
        </ul>
      </div>
    </header>
<h1>Регистрация</h1>
<form class="form" action="auth.php" method="POST">
<span class="input-span">
    <label for="name" class="label">Имя</label>
    <input type="text" name="name" id="name"></label>
  </span>
  <span class="input-span">
    <label for="email" class="label">Email</label>
    <input type="email" name="email" id="email"
  /></span>
  <span class="input-span">
    <label for="login" class="label">Логин</label>
    <input type="text" name="login" id="login"></label>
  </span>
  <span class="input-span">
    <label for="password" class="label">Пароль</label>
    <input type="password" name="password" id="password"
  /></span>

  <input class="submit" type="submit" value="Вход" name="register"/>
</form>
