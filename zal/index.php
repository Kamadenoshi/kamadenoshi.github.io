<?php
session_start();

$mysql = new mysqli("localhost", "root", "", "absolute");
$mysql->query("SET NAMES 'utf8'");

if ($mysql->connect_error) {
  echo "Error: " . $mysql->connect_error;
  exit();
}

?>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="styles/style.css" />
    <script src="scripts/main.js"></script>
    <title>ABSOLUTE</title>
  </head>
  <body>
    <header>
      <div class="logo">
        <a href="index.php"><img src="images/1.png" /></a>
      </div>
      <nav>
        <ul class="nav">
          <li><a href="index.php">ГЛАВНАЯ</a></li>
          <li class="uslu">
            <a href="uslugi.php">УСЛУГИ</a>
            <ul class="usl">
              <li><a href="trenajer.php">ТРЕНАЖЕРНЫЙ ЗАЛ</a></li>
              <li><a href="bassein.php">БАССЕЙН</a></li>
              <li><a href="detskiy.php">ДЕТСКИЙ ФИТНЕС</a></li>
              <li><a href="igroviye.php">ИГРОВЫЕ ВИДЫ СПОРТА</a></li>
            </ul>
          </li>
          <li><a href="aboniment.php">АБОНЕМЕНТ</a></li>
          <li class="uss">
            <a href="onas.php">О НАС</a>
            <ul class="us">
              <li><a href="trenera.php">ТРЕНЕРЫ</a></li>
              <li><a href="adresa.php">АДРЕСА</a></li>
            </ul>
          </li>
          <li><a href="konatkt.php">КОНТАКТЫ</a></li>
        </ul>
        <div class="menu">
          <input id="menu__toggle" type="checkbox" />
          <label class="menu__btn" for="menu__toggle">
            <span></span>
          </label>
          <ul class="menu__box">
            <div class="log">
              <a href="index.php"><img src="images/1.png" /></a>
            </div>
            <li><a class="menu__item" href="index.php">ГЛАВНАЯ</a></li>
            <li><a class="menu__item" href="uslugi.php">УСЛУГИ</a></li>
            <li><a class="menu__item" href="aboniment.php">АБОНЕМЕНТ</a></li>
            <li><a class="menu__item" href="onas.php">О НАС</a></li>
            <li><a class="menu__item" href="konatkt.php">КОНТАКТЫ</a></li>
          </ul>
        </div>
      </nav>
      <div class="prav">
        <p>+7 903 477 77 77</p>
        <?php if (isset($_SESSION['login'])) {
            echo '<li><a href="logout.php">Выйти <img src="images/str2.png" /></a></li>';
          }
          ?>
          <?php if (!isset($_SESSION['login'])) {
            echo '<li><a href="login.php">Войти <img src="images/str2.png" /></a></li>';
          }
          ?>
      </div>
    </header>
    <section>
      <div class="slider middle">
        <div class="slides">
          <input type="radio" name="r" id="r1" checked />
          <input type="radio" name="r" id="r2" />
          <input type="radio" name="r" id="r3" />
          <input type="radio" name="r" id="r4" />
          <div class="slide s1">
            <img src="images/2.jpg" class="img" />
          </div>
          <div class="slide">
            <img src="images/3.jpg" class="img" />
          </div>
          <div class="slide">
            <img src="images/4.jpg" class="img" />
          </div>
          <div class="slide">
            <img src="images/5.jpg" class="img" />
          </div>
        </div>
        <div class="navigation">
          <label for="r1" class="bar"></label>
          <label for="r2" class="bar"></label>
          <label for="r3" class="bar"></label>
          <label for="r4" class="bar"></label>
        </div>
      </div>
    </section>
    <div class="text">
      <h1>
        СТАНЬ <font color="darkred">СИЛЬНЕЕ</font><br />
        ВМЕСТЕ С ЛУЧШИМ ФИТНЕС-ЗАЛОМ В ДАГЕСТАНЕ
      </h1>
    </div>
    <article>
      <div class="blocks">
        <h1>УСЛУГИ</h1>
        <div class="bol us1">
          <div class="inf">
            <p>Тренажерный зал</p>
            <a href="trenajer.php">Подробнее</a>
          </div>
          <p class="in">
            В тренажерных залах нашей сети фитнес-клубов используется только
            лучшее спортивное обородувание, которое поможет вам с наибольшей
            эффективностью стать лучшей версией себя!
          </p>
        </div>
        <div class="bol us2">
          <div class="inf">
            <p>Бассейн</p>
            <a href="bassein.php">Подробнее</a>
          </div>
          <p class="in">
            Бассейны наших клубов помогут вам эффективно избавиться от стресса и
            усталости, а так же помогут вам в процессе укрепления вашего тела!
          </p>
        </div>
        <span class="line uslu"><a href="uslugi.php">ВСЕ УСЛУГИ</a></span>
        <div class="ab1">
          <div>
            <h1><a href="aboniment.php">ВАШ АБОНЕМЕНТ</a></h1>
            <p>Сроком от одного месяца до одного года уже ждет вас!</p>
            <p>
              Мы предлагаем вам все возможности наших центров при покупке карты
              нашего зала,<br />
              вы можете сами выбрать для себя удобный тариф и дни посещения.
            </p>
          </div>
          <img src="images/card.png" class="card" />
        </div>
        <span class="line kl"><a href="adresa.php">НАШИ КЛУБЫ</a></span>
        <div class="onas">
          <h2>
            ABSOLUTE - БЫСТРО РАЗВИВАЮЩАЯСЯ СЕТЬ ФИТНЕС-КЛУБОВ РАСПОЛОЖЕННЫХ В
            ДАГЕСТАНЕ И НЕ ПЛАНИРУЮЩИХ ОСТАНАВЛИВАТЬСЯ НА ДОСТИГНУТОМ
          </h2>
          <div class="bol onas"></div>
        </div>
      </div>
    </article>
    <div class="str">
      <a href="#top"><img src="images/str.png" class="str" /></a>
    </div>
    <footer>
      <br />
      <br />
      <br />
      <div class="left">
        <div class="ft"><p>©ABSOLUTE, 2023.Все права защищены.</p></div>
        <div class="pl">
          <img src="images/mc.png" /> <img src="images/mir.png" />
          <img src="images/visa.png" />
        </div>
      </div>
      <div class="right">
        <div class="poch">
          <p>УЗНАВАЙТЕ ОБО ВСЁМ ПЕРВЫМИ</p>
          <p>Email</p>
          <input type="email" name="mail" />
        </div>
      </div>
    </footer>
  </body>
</html>
