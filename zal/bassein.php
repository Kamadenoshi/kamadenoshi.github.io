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
    <link rel="stylesheet" type="text/css" href="styles/bassein.css" />
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
      <div class="shap"><img src="images/11.jpg" /></div>
      <div class="text"><h1>БАССЕЙН</h1></div>
    </section>
    <article>
      <div class="infa">
        <h1>Об услуге</h1>
        <p>
          Визитная карточка бассейнов ABSOLUTE – наличие в них морской водой.
          Она известна своими целебными свойствами, снимает стресс и создает
          дополнительный терапевтический эффект для кожи. Бассейны фитнес-клубов
          ABSOLUTE оборудованы многоступенчатой системой очистки, обеспечивающей
          идеальное состояние воды. Вы можете заниматься самостоятельно или с
          инструктором, а также посещать групповые тренировки. У аквапрограмм
          много преимуществ: отсутствует ударная нагрузка, лучше прорабатываются
          суставы, обеспечивается высокий расход энергии.
        </p>
        <div class="tf">
          <h2>Свободное плавание</h2>
          <img src="images/12.jpg" />
          <p>
            Вы можете свободно посещать бассейны нашего клуба в удобное для вас
            время и заниматься самостоятельно развивая все мышцы вашего тела, но
            не забывайте, что наши тренеры всегда подскажут вам, если вы чего-то
            не знаете.
          </p>
        </div>
        <div class="tf">
          <h2>Индивидуальные занятия с тренером</h2>
          <img src="images/13.png" />
          <p>
            Так же вы можете договориться с тренерами об индивидуальных
            занятиях, с помощью профессионального присмотра и программ занятий
            от наших тренеров вы сможете еще эффективнее развить свое тело и
            укрепить ваш дух.
          </p>
        </div>
        <div class="tf">
          <h2>Групповые занятия</h2>
          <img src="images/14.png" />
          <p>
            В бассейнах наших клубов так же предусмотрены занятия с группой под
            присмотром тренеров, которые проследят за правильностью выполняемых
            упраженений и помогут развиться всем участникам группы.
          </p>
        </div>
        <div class="tf">
          <h2>Для детей</h2>
          <img src="images/15.jpg" />
          <p>
            Так же имеется возможность привести вашего ребенка для занятий в
            группе или индивидуально, можете не беспокоиться за сохранность
            вашего ребенка в бассейне, ведь мы позаботимся о его сохранности
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
</html>
