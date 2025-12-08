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
    <link rel="stylesheet" type="text/css" href="styles/aboniment.css" />
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
      <div class="shap"><img src="images/2.jpg" /></div>
      <div class="text"><h1>АБОНЕМЕНТ</h1></div>
    </section>
    <article>
      <h1>Карта</h1>
      <div class="tarif">
        <div class="ind">
          <div class="card"><img src="images/card.png" /></div>
          <div class="inff">
            <h1>Тарифы по нашей карте</h1>
            <h2>Индивидуальный 1 Месяц</h2>
            <p>
              Неограниченное по времени посещение всех зон клуба<br />
              Групповые программы по расписанию<br />
              Зона релаксации и обновления<br />
              Функциональное тестирование<br />
              2 вводные персональные тренировки<br />
              Заморозка на срок до 90 дней
            </p>
          </div>
        </div>
        <span><a href="konatkt.php">ДЛЯ ПОКУПКИ ОБРАЩАТЬСЯ ПО НОМЕРУ</a></span>
        <div class="vip">
          <div class="card"><img src="images/card-vip.png" /></div>
          <div class="infv">
            <h1>Тарифы по нашей карте</h1>
            <h2>VIP на 1 Месяц</h2>
            <div class="v">
              <p class="vv">
                Неограниченное по времени посещение всех зон клуба<br />
                Групповые программы по расписанию<br />
                Зона релаксации и обновления<br />
                Функциональное тестирование<br />
                2 вводные персональные тренировки<br />
                Заморозка на срок до 90 дней<br />
                Консьерж-тренер<br />
              </p>
              <p>
                Персональный шкаф в VIP-раздевалке<br />
                Индивидуальная прачечная спортивной одежды<br />
                5 персональных тренировок<br />
                10 гостевых визитов<br />
                100 сеансов солярия<br />
                1 сеанс массажа
              </p>
            </div>
          </div>
        </div>
        <span><a href="konatkt.php">ДЛЯ ПОКУПКИ ОБРАЩАТЬСЯ ПО НОМЕРУ</a></span>
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
