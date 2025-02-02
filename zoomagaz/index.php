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
    <link rel="stylesheet" href="styles/style.css" />
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
          <li><a href="#about">О нас</a></li>
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
      <div class="head">
        <h1>Все для вашего питомца</h1>
        <p>
          Добро пожаловать в наш магазин, где вы найдете все необходимое для
          вашего любимца! У нас большой выбор товаров, чтобы ваш питомец был
          счастлив, здоров и чувствовал себя комфортно. От качественного корма и
          игрушек до стильных аксессуаров и средств по уходу, вы найдете все,
          что нужно, в одном месте.
        </p>
        <br />
        <br />
        <br />
        <br />
        <a href="shop.php">Выбрать товар</a>
        <img src="images/header.png" alt="main" />
      </div>
      <div class="catalog">
        <h2>Покупка по категориям</h2>
        <p>
          Найдите идеальные товары для вашего питомца: корм, игрушки,
          аксессуары, средства по уходу и многое другое, подходящие для его
          породы, возраста и образа жизни.
        </p>
        <div class="goods">
          <div class="good">
            <img src="images/food.jpg" alt="good1" />
            <h3>Корм и лакомства</h3>
            <p>
              Широкий выбор кормов и лакомств для кошек и собак разных пород и
              возрастов. Наши продукты подходят для животных с особыми
              потребностями.
            </p>
            <a href="shop.php">Выбрать корм</a>
          </div>
          <div class="good">
            <img src="images/toys.jpg" alt="good2" />
            <h3>Игрушки и аксессуары</h3>
            <p>
              Разнообразные игрушки и аксессуары для развлечения и ухода за
              питомцами.
            </p>
            <a href="shop.php">Посмотреть аксессуары</a>
          </div>
          <div class="good">
            <img src="images/shampoo.jpg" alt="good3" />
            <h3>Средства по уходу</h3>
            <p>
              Шампуни, кондиционеры, спреи и другие средства по уходу за шерстью
              и кожей животных. У нас есть продукты для разных типов шерсти и
              проблем кожи.
            </p>
            <a href="shop.php">Подобрать уход</a>
          </div>
        </div>
      </div>
      <div class="brands">
        <h2>Доверенные бренды, на которые можно положиться</h2>
        <p>
          Мы сотрудничаем с ведущими производителями, которые известны своим
          качеством и инновациями. У нас большой выбор проверенных брендов,
          которые заботятся о благополучии вашего питомца.
        </p>
        <div class="brands-logos">
          <img src="images/01.png" alt="01" />
          <img src="images/02.png" alt="02" />
          <img src="images/03.png" alt="03" />
          <img src="images/04.png" alt="04" />
          <img src="images/05.png" alt="05" />
          <img src="images/06.png" alt="06" />
          <img src="images/07.png" alt="07" />
          <img src="images/08.png" alt="08" />
          <img src="images/09.png" alt="09" />
          <img src="images/10.png" alt="10" />
        </div>
      </div>
      <div class="inf-block">
        <div class="about-us" id="about">
          <div class="left">
            <h2>О нас</h2>
            <p>Качественные товары для заботы о ваших питомцах</p>
          </div>
          <div class="right">
            <p>
              В нашем зоомагазине вы найдёте всё необходимое для ухода за вашим
              любимцем: от корма и игрушек до аксессуаров и средств гигиены. Мы
              тщательно выбираем товары, чтобы предложить вам только лучшее.
              Здоровье и счастье ваших питомцев — наш приоритет.
            </p>
          </div>
        </div>
        <div class="contact">
          <h2>Свяжитесь с нами</h2>
          <p>
            У вас есть вопросы или нужна помощь? Свяжитесь с нами! Вы можете
            найти адрес нашего магазина, номер телефона, электронную почту и
            ссылки на наши страницы в социальных сетях. Мы всегда рады помочь
            вам найти нужные товары и ответить на ваши вопросы.
          </p>
          <div class="contact-info">
            <div class="left">
              <p>8 800 123-45-67</p>
              <p>fhm@mail.ru</p>
              <br />
              <p>Бизнес-центр «Мир животных», ул. Парковая, д. 5, Москва</p>
              <div class="social">
                <img src="images/insta.svg" alt="insta" />
                <img src="images/vk.svg" alt="vk" />
                <img src="images/whatsapp.svg" alt="whatsapp" />
              </div>
            </div>
            <div class="right">
              <form action="send.php" method="post">
                <input type="text" name="name" placeholder="Ваше имя" />
                <br />
                <input type="email" name="email" placeholder="Ваш email" />
                <br />
                <textarea
                  name="message"
                  placeholder="Ваше сообщение"
                  cols="30"
                  rows="10"
                ></textarea>
                <br />
                <input type="submit" value="Связаться"></input>
              </form>
            </div>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>
