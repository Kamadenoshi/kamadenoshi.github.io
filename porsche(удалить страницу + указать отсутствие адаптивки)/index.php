<?php
$mysql = new mysqli("localhost", "root", "", "porsche");
$mysql->query("SET NAMES 'utf8'");

session_start();

$login = isset($_SESSION['login']) ? $_SESSION['login'] : 'Гость';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles/style.css" />
    <title>Главная</title>
  </head>
  <body>
    <header>
      <div class="menu">
        <input type="checkbox" id="burger" />
        <label class="burger" for="burger">
          <span></span>
          <span></span>
          <span></span>
        </label>
        <ul class="menu__box">
          <li class="menu__item"><a href="index.php">Главная</a></li>
          <li class="menu__item"><a href="modell.php">Модели</a></li>
          <li class="menu__item"><a href="market.html">Маркет</a></li>
          <li class="menu__item"><a href="yaya.html">История</a></li>
          <li class="menu__item"><a href="login.php">Вход</a></li>
        </ul>
      </div>
    </header>
    <div class="negr"></div>
    <img src="styles/images/fara1.png" alt="fara" class="fara" />
    <h1 class="animate">&nbsp;Porsche</h1>
    <h2 class="animate">
      Вождение в его самой<br />&nbsp;&nbsp;прекрасной форме
    </h2>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        let faraElement = document.querySelector(".fara");
        let h2Element = document.querySelector("h2");

        h2Element.addEventListener("animationend", function () {
          if (faraElement) {
            // Добавляем анимацию исчезновения
            faraElement.style.animation = "fadeOutSlow 1s ease-in-out forwards";

            // Ждем окончания анимации, затем удаляем элемент
            setTimeout(() => {
              faraElement.remove();
            }, 1000); // Время должно совпадать с длительностью fadeOutSlow
          }
        });
      });
    </script>
  </body>
</html>
