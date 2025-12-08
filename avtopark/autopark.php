<?php
session_start();

$mysql = new mysqli("localhost", "root", "", "smartpark");
$mysql->query("SET NAMES 'utf8'");

if ($mysql->connect_error) {
  echo "Error: " . $mysql->connect_error;
  exit();
}

if (isset($_SESSION["login"])) {
  $login = $_SESSION["login"];
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
    <link rel="stylesheet" href="styles/autopark.css" />
  </head>
  <body>
    <header>
      <nav class="main-nav">
        <ul>
          <li><a href="index.php">Главная</a></li>
          <li><a href="cars.php">Мой автопарк</a></li>
        </ul>
      </nav>
      <?php if (isset($login)): ?>
        <h1 class="reg_button">
        <img src="images/icon_reg.svg" class="icon_reg" />
          <?php echo $login; ?>
        </h1> 
      <?php else: ?>
        <a class="reg_button" href="reg.php"
        ><img src="images/icon_reg.svg" class="icon_reg" /> Регистрация</a
        >
      <?php endif; ?>
    </header>
    <main>
    <form class="form" action="parkCreate.php" method="POST">
        <span class="title">Добавить автомобиль</span>
        <label for="model" class="label">Модель автомобиля</label>
        <input
          type="text"
          id="model"
          name="model"
          required=""
          class="input"
        />
        <label for="number" class="label">Серийный номер</label>
        <input
          type="text"
          id="number"
          name="number"
          required=""
          class="input"
        />
        <?php if (isset($login)): ?>
        <input type="submit" class="submit" name="carCreate" value="Добавить автомобиль"></input>
        <?php else: ?>
          <a href="login.php" class="submit">Войдите в аккаунт, чтобы добавить автомобиль</a>
        <?php endif; ?>
      </form>
    </main>
  </body>
</html>