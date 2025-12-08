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
    <link rel="stylesheet" type="text/css" href="styles/adresa.css" />
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
      <div class="shap"><img src="images/27.jpg" /></div>
      <div class="text"><h1>АДРЕСА</h1></div>
    </section>
    <article>
      <div class="blocks">
        <div class="block I">
          <a href="#" class="a">ABSOLUTE</a>
          <p>
            г.Махачкала, ул.Гагарина, д.35<br />
            <br />
            <span class="poch"
              ><a href="mailto:Amgagarina@mail.ru">Amgagarina@mail.ru</a></span
            ><br />
            <br />
            <span class="poch"
              ><a href="tel:89284129480">+7 (928) 412 94 80</a></span
            >
          </p>
        </div>
        <div class="block II">
          <a href="#" class="a">ABSOLUTE</a>
          <p>
            г.Махачкала, ул.Казбекова, д.95<br />
            <br />
            <span class="poch"
              ><a href="mailto:Amkazbekova@mail.ru"
                >Amkazbekova@mail.ru</a
              ></span
            ><br />
            <br />
            <span class="poch"
              ><a href="tel:89887918235">+7 (988) 791 82 35</a></span
            >
          </p>
        </div>
        <div class="block III">
          <a href="#" class="a">ABSOLUTE</a>
          <p>
            г.Махачкала, пр.Петра Первого, д.55<br />
            <br />
            <span class="poch"
              ><a href="mailto:Ampetrapervogo@mail.ru"
                >Ampetrapervogo@mail.ru</a
              ></span
            ><br />
            <br />
            <span class="poch"
              ><a href="tel:89646120359">+7 (964) 612 03 59</a></span
            >
          </p>
        </div>
      </div>
      <div class="blocks">
        <div class="block IV">
          <a href="#" class="a">ABSOLUTE</a>
          <p>
            г.Каспийск, ул.Хизроева, д.25<br />
            <br />
            <span class="poch"
              ><a href="mailto:Akhizroeva@mail.ru">Akhizroeva@mail.ru</a></span
            ><br />
            <br />
            <span class="poch"
              ><a href="tel:89384012738">+7 (938) 401 27 38</a></span
            >
          </p>
        </div>
        <div class="block V">
          <a href="#" class="a">ABSOLUTE</a>
          <p>
            г.Каспийск, ул.Алферово, д.7<br />
            <br />
            <span class="poch"
              ><a href="mailto:Akalferovo@mail.ru">Akalferovo@mail.ru</a></span
            ><br />
            <br />
            <span class="poch"
              ><a href="tel:89890192683">+7 (989) 019 26 83</a></span
            >
          </p>
        </div>
        <div class="block VI">
          <a href="#" class="a">ABSOLUTE</a>
          <p>
            г.Каспийск, ул.Кирова, д.50<br />
            <br />
            <span class="poch"
              ><a href="mailto:Akkirova@mail.ru">Akkirova@mail.ru</a></span
            ><br />
            <br />
            <span class="poch"
              ><a href="tel:89630123659">+7 (963) 012 36 59</a></span
            >
          </p>
        </div>
      </div>
      <div class="blocks">
        <div class="block VII">
          <a href="#" class="a">ABSOLUTE</a>
          <p>
            г.Дербент, ул.Камунарова, д.20<br />
            <br />
            <span class="poch"
              ><a href="mailto:Adkamunarova@mail.ru"
                >Adkamunarova@mail.ru</a
              ></span
            ><br />
            <br />
            <span class="poch"
              ><a href="tel:89181235763">+7 (918) 123 57 63</a></span
            >
          </p>
        </div>
        <div class="block VIII">
          <a href="#" class="a">ABSOLUTE</a>
          <p>
            г.Дербент, ул.Тагиева, д.43<br />
            <br />
            <span class="poch"
              ><a href="mailto:Adtagieva@mail.ru">Adtagieva@mail.ru</a></span
            ><br />
            <br />
            <span class="poch"
              ><a href="tel:89995601823">+7 (999) 560 18 23</a></span
            >
          </p>
        </div>
        <div class="block IX">
          <a href="#" class="a">ABSOLUTE</a>
          <p>
            г.Дербент, ул.Шеболдаева, д.14<br />
            <br />
            <span class="poch"
              ><a href="mailto:Adsheboldaeva@mail.ru"
                >Adsheboldaeva@mail.ru</a
              ></span
            ><br />
            <br />
            <span class="poch"
              ><a href="tel:89452037423">+7 (945) 203 74 23</a></span
            >
          </p>
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
</php>
