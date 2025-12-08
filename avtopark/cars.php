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

if (isset($_SESSION["parkname"])) {
  $parkname = $_SESSION["parkname"];
  $cars = [];
  $result = $mysql->query("SELECT * FROM cars WHERE parkname = '$parkname' AND model != 'Базовая модель' AND number != '000000'");
  while ($row = $result->fetch_assoc()) {
    $cars[] = $row;
}
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
    <link rel="stylesheet" href="styles/cars.css" />
  </head>
  <body>
    <header>
      <nav class="main-nav">
        <ul>
          <li><a href="index.php">Главная</a></li>
          <li><a class="active" href="cars.php">Мой автопарк</a></li>
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
      <?php if (isset($login)): ?>
    <?php if (empty($cars)): ?>
      <div class="line">
        <h1 class="company_name">    
          <font color="#2772e1">Smart</font
          ><font color="#2c2c2c">Park</font>
        </h1>
        <h2>Вы еще не добавили автомобили в автопарк</h2>
        <a class="create_park" href="autopark.php">Добавить автомобиль</a>
      </div>
    <?php else: ?>
      <div class="line">
        <h2>Мой автопарк</h2>
        <h3><?php echo $parkname; ?></h3>
      </div>
      <div class="car-list">
  <?php foreach ($cars as $car) : ?>
    <div class="car-card">
                        <h3><?php echo htmlspecialchars($car['model']); ?></h3>
                        <p><strong>Серийный номер:</strong> <?php echo htmlspecialchars($car['number']); ?></p>
                        <img src="images/auto.jpeg" alt="Изображение автомобиля">
                        <div class="card-actions">
                            <a href="maintenance.php?car_id=<?php echo $car['id']; ?>" class="btn">Обслуживание</a>
                            <a href="autopark.php" class="btn">Добавить автомобиль</a>
                        </div>
                    </div>
  <?php endforeach; ?>
</div>
    <?php endif; ?>
    <?php else: ?>
      <div class="no_log">
        <h1 class="company_name">    
          <font color="#2772e1">Smart</font
          ><font color="#2c2c2c">Park</font>
        </h1>
        <h2>Вы не вошли в аккаунт</h2>
        <a class="create_park" href="login.php">Вход</a>
      </div>
    <?php endif; ?>
    </main>
</body>
</html>