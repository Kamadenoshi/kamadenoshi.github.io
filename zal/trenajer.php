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
    <link rel="stylesheet" type="text/css" href="styles/trenajer.css" />
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
      <div class="shap"><img src="images/6.jpeg" /></div>
      <div class="text"><h1>ТРЕНАЖЕРНЫЙ ЗАЛ</h1></div>
    </section>
    <article>
      <h1>ОБ УСЛУГЕ</h1>
      <div class="blocks">
        <div class="ust">
          <div class="zach">
            <h2>Зачем вообще посещать тренажерный зал?</h2>
            <p>
              Ответ прост - <b>ФИТНЕС МЕНЯЕТ ЖИЗНЬ</b><br />
              Регулярные тренировки – это не только красивая фигура и здоровый
              организм, но еще и отличное настроение! Занятия ускоряют обмен
              веществ, способствуют выработке эндорфинов, дарят энергию и заряд
              бодрости.<br />
              В наших залах вы пройдете все запланированные этапы тренировки с
              комфортом и без потери времени.
            </p>
          </div>
          <div class="nash">
            <h2>Почему именно мы?</h2>
            <p>
              Тренажерные залы клуба <font color="red">ABSOLUTE</font> - Это
              лучшее оборудование, которое гарантированно поможет вам
              проработать все группы мышц, а так же лучшие тренера со всех
              уголков Дагестана, которые помогут вам с правильностью выполнения
              упражнений. Так же удобное разеделение по зонам не даст вам
              заблудиться. Мы используем тренажеры таких ведущих фирм как Life
              Fitness, Hammer Strength и другие.
            </p>
          </div>
        </div>
        <div class="slider middle">
          <div class="slides">
            <input type="radio" name="r" id="r1" checked />
            <input type="radio" name="r" id="r2" />
            <input type="radio" name="r" id="r3" />
            <input type="radio" name="r" id="r4" />
            <div class="slide s1">
              <img src="images/7.jpeg" class="img" />
            </div>
            <div class="slide">
              <img src="images/8.jpg" class="img" />
            </div>
            <div class="slide">
              <img src="images/9.jpeg" class="img" />
            </div>
            <div class="slide">
              <img src="images/10.jpg" class="img" />
            </div>
          </div>
          <div class="navigation">
            <label for="r1" class="bar"></label>
            <label for="r2" class="bar"></label>
            <label for="r3" class="bar"></label>
            <label for="r4" class="bar"></label>
          </div>
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
