<?php

session_start();

$mysql = new mysqli("localhost", "root", "", "smartpark");
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
    <title>Автопарк</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Alegreya+SC&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="styles/auth.css" />
  </head>
  <body>
    <header>
      <nav class="main-nav">
        <ul>
          <li><a href="index.php">Главная</a></li>
          <li><a href="cars.php">Мой автопарк</a></li>
        </ul>
      </nav>
      <h1 class="company_name">
              <font color="#2772e1">Smart</font
              ><font color="#e6e6e6">Park</font>
            </h1>
    </header>
    <main>
      <form class="form" action="auth.php" method="POST">
        <span class="title">Логин</span>
        <label for="login" class="label">Логин</label>
        <input
          type="text"
          id="login"
          name="login"
          required=""
          class="input"
        />
        <label for="password" class="label">Пароль</label>
        <input
          type="password"
          id="password"
          name="password"
          required=""
          class="input"
        />
        <input type="submit" class="submit" name="log" value="Войти"></input>
      </form>
    </main>
  </body>
</html>
        