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
    <link rel="stylesheet" type="text/css" href="styles/konatkt.css" />
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
      <div class="shap"><img src="images/5.jpg" /></div>
      <div class="text"><h1>КОНТАКТЫ</h1></div>
    </section>
    <article>
      <div class="koninf">
        <h1>Обратная связь</h1>
        <p>
          Предложения, вопросы, пожелания<br />
          <br />
          <br />
          <a href="tel:89282822222" class="phone">8 928 282 22 22</a><br />
          <br />
          <a href="tel:89034777777" class="phone">8 903 477 77 77</a><br />
          <br />
          <a href="mailto:Absolute@mail.ru">Absolute@mail.ru</a>
        </p>
      </div>
      <form action="send.php" method="post">
        <div class="konform">
          <label for="fname" class="lbl">Имя</label>
          <input type="text" name="fname" class="inp" />
          <br />
          <label for="email" class="lbl">Почта</label>
          <input type="email" name="email" class="inp" />
          <br />
          <label for="vopros" class="lbl">Вопрос</label>
          <textarea name="vopros" class="vopros"></textarea>
          <br />
          <input type="submit" name="send" class="send" value="Отправить" />
        </div>
      </form>
    </article>
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
