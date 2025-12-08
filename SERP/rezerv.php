<?php
$mysql = new mysqli("localhost", "root", "", "SERP");
$mysql->query("SET NAMES 'utf8'");

$bron = [];

?>


<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SERP</title>
    <link rel="stylesheet" href="styles/rezerv.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Bellota+Text&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <header>
      <div class="menu_osn">
        <input id="menu_toggle" type="checkbox" />
        <label class="menu_btn" for="menu_toggle">
          <span></span>
        </label>
        <div class="menu_box">
          <div class="left_side">
            <ul>
              <li><a href="index.html">Главная</a></li>
              <li><a href="menu.html">Меню</a></li>
            </ul>
          </div>
          <div class="logo">
            <img src="styles/logo_alt.svg" alt="logo" />
          </div>
          <div class="right_side">
            <ul>
              <li><a href="rezerv.php">Резерв</a></li>
              <li><a href="contacts.html">Контакты</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="menu">
        <input id="menu__toggle" type="checkbox" />
        <label class="menu__btn" for="menu__toggle">
          <span></span>
        </label>
        <ul class="menu__box">
          <li class="menu__item"><a href="index.html">Главная</a></li>
          <li class="menu__item"><a href="menu.html">Меню</a></li>
          <li class="menu__item"><a href="rezerv.php">Резерв</a></li>
          <li class="menu__item"><a href="contacts.html">Контакты</a></li>
        </ul>
      </div>
    </header>
    <main>
      <div class="left_side">
        <img src="images/bron.jpg" alt="rezerv" />
      </div>
      <div class="right_side">
        <h1>Зарезервировать стол</h1>
        <p>
          Выберите время и дату, чтобы в самый важный момент быть уверенными в
          наличии места в любимом ресторане
        </p>
        <form action="bron.php" method="post">
          <span class="line_1">
            <div class="for_place">
              <label for="date">Дата</label>
              <input type="date" name="date" id="date" min="2024-10-01" required/>
            </div>
            <div class="for_place">
              <label for="time">Время</label>
              <input type="time" name="time" id="time" min="10:00" max="0:00" format="HH:mm" required/>
            </div>
          </span>
          <span class="line_2">
            <div class="for_place">
              <label for="name">Имя</label>
              <input type="text" name="name" id="name" required/>
            </div>
            <div class="for_place">
              <label for="phone">Телефон</label>
              <input type="tel" name="phone" id="phone" required/>
            </div>
          </span>
          <span class="line_3">
            <div class="for_place">
              <label for="people">Количество человек</label>
              <input type="number" name="people" id="people" min="1" max="8" required/>
            </div>
            <div class="for_place">
              <label for="comments">Комментарии</label>
              <input type="text" name="comments" id="comments" required/>
            </div>
          </span>
          <input type="submit" value="Зарезервировать" />
        </form>
      </div>
      <?php 
          session_start();
          if (isset($_SESSION['form_submitted'])) {
            echo '<div class="form_submit" id="form_submit">
                    <h1>Ваша бронь успешно оформлена!</h1>
                    <button class="close_btn" id="close">X</button>
                  </div>';
            unset($_SESSION['form_submitted']);
        }   
          ?>
    </main>
    <script src="scripts/window.js"></script>
      </body>
</html>
