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
    <link rel="stylesheet" href="styles/shop.css" />
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
          <?php if (isset($_SESSION['login'])) {
            echo '<li><a href="logout.php">Выйти</a></li>';
          }
          ?>
          <?php if (!isset($_SESSION['login'])) {
            echo '<li><a href="login.php">Войти</a></li>';
          }
          ?>
        </ul>
      </nav>
    </header>
    <main>
    <h1>Корма для питомцев</h1>
  <div class="cards-container">
    <div class="card">
      <img src="images/korm1.jpg" alt="Корм 1">
      <h2>Корм для собак "Актив"</h2>
      <p>Питательный состав для активных собак.</p>
      <div class="btn">
        <p>Цена: 500₽</p>
      <form action="addToCart.php" method="post">
        <input type="hidden" name="productName" value='Корм для собак "Актив"'>
        <input type="hidden" name="price" value="500">
        <input type="hidden" name="category" value="Корма">
        <button type="submit">Добавить в корзину</button>
      </form>
      </div>
      
    </div>
    <div class="card">
      <img src="images/korm2.png" alt="Корм 2">
      <h2>Корм для кошек "Гурман"</h2>
      <p>Натуральные ингредиенты для кошек.</p>
      <div class="btn">
        <p>Цена: 600₽</p>
      <form action="addToCart.php" method="post">
        <input type="hidden" name="productName" value='Корм для кошек "Гурман"'>
        <input type="hidden" name="price" value="600">
        <input type="hidden" name="category" value="Корма">
        <button type="submit">Добавить в корзину</button>
      </form>
      </div>
      
    </div>
    <div class="card">
      <img src="images/korm3.jpg" alt="Корм 3">
      <h2>Корм для грызунов "Энергия"</h2>
      <p>Специальный состав для мелких питомцев.</p>
      <div class="btn">
        <p>Цена: 350₽</p>
      <form action="addToCart.php" method="post">
        <input type="hidden" name="productName" value='Корм для грызунов "Энергия"'>
        <input type="hidden" name="price" value="350">
        <input type="hidden" name="category" value="Корма">
        <button type="submit">Добавить в корзину</button>
      </form>
      </div>
      
    </div>
  </div>

  <!-- Карточки с игрушками для питомцев -->
  <h1>Игрушки для питомцев</h1>
  <div class="cards-container">
    <div class="card">
      <img src="images/igrujka1.jpg" alt="Игрушка 1">
      <h2>Мячик для собак</h2>
      <p>Прочный и безопасный мячик для игр.</p>
      <div class="btn">
        <p>Цена: 300₽</p>
      <form action="addToCart.php" method="post">
        <input type="hidden" name="productName" value="Мячик для собак">
        <input type="hidden" name="price" value="300">
        <input type="hidden" name="category" value="Игрушки">
        <button type="submit">Добавить в корзину</button>
      </form>
      </div>
      
    </div>
    <div class="card">
      <img src="images/igrujka2.jpeg" alt="Игрушка 2">
      <h2>Игрушка для кошек "Мышка"</h2>
      <p>Интерактивная игрушка для развлечения.</p>
      <div class="btn">
       <p>Цена: 250₽</p>
      <form action="addToCart.php" method="post">
        <input type="hidden" name="productName" value='Игрушка для кошек "Мышка"'>
        <input type="hidden" name="price" value="250">
        <input type="hidden" name="category" value="Игрушки">
        <button type="submit">Добавить в корзину</button>
      </form> 
      </div>
      
    </div>
    <div class="card">
      <img src="images/igrujka3.jpeg" alt="Игрушка 3">
      <h2>Когтеточка с игрушками</h2>
      <p>Удобное место для игр и ухода за когтями.</p>
      <div class="btn">
        <p>Цена: 800₽</p>
      <form action="addToCart.php" method="post">
        <input type="hidden" name="productName" value="Когтеточка с игрушками">
        <input type="hidden" name="price" value="800">
        <input type="hidden" name="category" value="Игрушки">
        <button type="submit">Добавить в корзину</button>
      </form>
      </div>
    </div>
  </div>

  <!-- Карточки со средствами для ухода -->
  <h1>Средства для ухода</h1>
  <div class="cards-container">
    <div class="card">
      <img src="images/uhod1.jpg" alt="Шампунь 1">
      <h2>Шампунь для собак</h2>
      <p>Нежное очищение и уход за шерстью.</p>
      <div class="btn">
        <p>Цена: 450₽</p>
      <form action="addToCart.php" method="post">
        <input type="hidden" name="productName" value="Шампунь для собак">
        <input type="hidden" name="price" value="450">
        <input type="hidden" name="category" value="Средства для ухода">

        <button type="submit">Добавить в корзину</button>
      </form>
      </div>
      
    </div>
    <div class="card">
      <img src="images/uhod2.jpeg" alt="Шампунь 2">
      <h2>Шампунь для кошек</h2>
      <p>Формула, безопасная для чувствительной кожи.</p>
      <div class="btn">
        <p>Цена: 500₽</p>
      <form action="addToCart.php" method="post">
        <input type="hidden" name="productName" value="Шампунь для кошек">
        <input type="hidden" name="price" value="500">
        <input type="hidden" name="category" value="Средства для ухода">
        <button type="submit">Добавить в корзину</button>
      </form>
      </div>
    </div>
    <div class="card">
      <img src="images/uhod3.jpg" alt="Средство для ухода 3">
      <h2>Кондиционер для шерсти</h2>
      <p>Укрепляет и блестит шерсть питомца.</p>
      <div class="btn">
        <p>Цена: 480₽</p>
      <form action="addToCart.php" method="post">
        <input type="hidden" name="productName" value="Кондиционер для шерсти">
        <input type="hidden" name="price" value="480">
        <input type="hidden" name="category" value="Средства для ухода">
        <button type="submit">Добавить в корзину</button>
      </form>
      </div>
      
    </div>
  </div>
  </main>