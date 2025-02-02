<?php
session_start();

$mysql = new mysqli("localhost", "root", "", "zoomagaz");
$mysql->query("SET NAMES 'utf8'");

if ($mysql->connect_error) {
  echo "Error: " . $mysql->connect_error;
  exit();
}

?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Друг в доме</title>
    <link rel="stylesheet" href="styles/reg.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <li><a href="shop.php">Каталог товаров</a></li>
          <li><a href="cart.php">Корзина</a></li>
          <div class="logo">
          <a href="index.php"><img src="images/logo.svg" alt="logo" /></a>
          </div>
          <li><a href="index.php#about">О нас</a></li>
          <li><a href="login.php">Войти</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <h1>Зарегестрироваться</h1>
      <form action="auth.php" method="post">
                <input type="text" name="fio" placeholder="Введите ваше имя" />
                <br />
                <input type="text" name="email" placeholder="Введите ваш email" />
                <br />
                <input type="text" name="login" placeholder="Введите ваш логин" />
                <br />
                <input type="text" name="password" placeholder="Введите ваш пароль" />
                <br />
                <input type="submit" value="Войти" name="register"></input>
              </form>
    </main>
  </body>
</html>