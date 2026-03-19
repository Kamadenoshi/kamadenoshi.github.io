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
    <link rel="stylesheet" href="styles/modell.css" />
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
          <li class="menu__item"><a href="#">История</a></li>
          <li class="menu__item"><a href="#">Вход</a></li>
        </ul>
      </div>
    </header>
    <div class="bg-cont">
      <img src="styles/bg-pattern.png" alt="" />
    </div>
    <div class="container">
      <div class="slides">
        <div class="block1">
          <div class="element-animation1">
            <span class="image"><img src="styles/images/911.jpg" /></span>
          </div>
          <div class="text1">
            <div class="element-animation">
              <span class="zago"
                ><h2>Porsche 911 – Легенда, Проверенная Временем</h2></span
              >
              <span class="text">
                <ul>
                  <li>
                    Двигатель: 3.0–4.0 л, 6-цилиндровый (битурбо/атмосферный)
                  </li>
                  <li>Мощность: 385–650 л.с.</li>
                  <li>Разгон 0-100 км/ч: 2.7–4.2 сек</li>
                  <li>Макс. скорость: до 340 км/ч</li>
                  <li>Трансмиссия: 7-МКПП / 8-PDK</li>
                  <li>Привод: Задний / Полный</li>
                  <li>Длина: 4519–4573 мм</li>
                  <li>Масса: 1435–1715 кг</li>
                  <li>Расход: 9.2–12.5 л/100 км</li>
                </ul>
              </span>
              <button class="open-modal-btn" data-model="911">
                <div class="default-btn">
                  <svg
                    class="css-i6dzq1"
                    stroke-linejoin="round"
                    stroke-linecap="round"
                    fill="none"
                    stroke-width="2"
                    stroke="#FFF"
                    height="20"
                    width="20"
                    viewBox="0 0 24 24"
                  >
                    <path
                      d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"
                    ></path>
                    <circle r="3" cy="12" cx="12"></circle>
                  </svg>
                  <span>Подробнее</span>
                </div>
                <div class="hover-btn">
                  <svg
                    class="css-i6dzq1"
                    stroke-linejoin="round"
                    stroke-linecap="round"
                    fill="none"
                    stroke-width="2"
                    stroke="#fff"
                    height="20"
                    width="20"
                    viewBox="0 0 24 24"
                  >
                    <circle r="1" cy="21" cx="9"></circle>
                    <circle r="1" cy="21" cx="20"></circle>
                    <path
                      d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"
                    ></path>
                  </svg>
                  <span>Оформить</span>
                </div>
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="slides">
        <div class="block1">
          <div class="element-animation1">
            <span class="image"><img src="styles/images/7182.jpg" /></span>
          </div>
          <div class="text1">
            <div class="element-animation">
              <span class="zago"
                ><h2>Porsche 718 – Признанная Легендой</h2></span
              >
              <span class="text">
                <ul>
                  <li>Двигатель: 2.0–4.0 л, 4–6-цилиндровый (турбо / атмосферный)
                  </li>
                  <li>Мощность: 300–420 л.с.
                  </li>
                  <li>Разгон 0–100 км/ч: 3.9–5.1 сек</li>
                  <li>Макс. скорость: до 293 км/ч
                  </li>
                  <li>Трансмиссия: 6-МКПП / 7-PDK
                  </li>
                  <li>Привод: Задний
                  </li>
                  <li>Длина: 4379–4456 мм
                  </li>
                  <li>Масса: 1335–1460 кг
                  </li>
                  <li>Расход: 8.1–11.0 л/100 км
                  </li>
                </ul>
              </span>
              <button class="open-modal-btn" data-model="718">
                <div class="default-btn">
                  <svg
                    class="css-i6dzq1"
                    stroke-linejoin="round"
                    stroke-linecap="round"
                    fill="none"
                    stroke-width="2"
                    stroke="#FFF"
                    height="20"
                    width="20"
                    viewBox="0 0 24 24"
                  >
                    <path
                      d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"
                    ></path>
                    <circle r="3" cy="12" cx="12"></circle>
                  </svg>
                  <span>Подробнее</span>
                </div>
                <div class="hover-btn">
                  <svg
                    class="css-i6dzq1"
                    stroke-linejoin="round"
                    stroke-linecap="round"
                    fill="none"
                    stroke-width="2"
                    stroke="#fff"
                    height="20"
                    width="20"
                    viewBox="0 0 24 24"
                  >
                    <circle r="1" cy="21" cx="9"></circle>
                    <circle r="1" cy="21" cx="20"></circle>
                    <path
                      d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"
                    ></path>
                  </svg>
                  <span>Оформить</span>
                </div>
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="slides">
        <div class="block1">
          <div class="element-animation1">
            <span class="image"><img src="styles/images/taycan.jpg" /></span>
          </div>
          <div class="text1">
            <div class="element-animation">
              <span class="zago"
                ><h2>Porsche Taycan – Будущее Электрической Динамики</h2></span
              >
              <span class="text">
                <ul>
                  <li>Двигатель: Электродвигатель (передний и задний оси)
                  </li>
                  <li>Мощность: 435–571 л.с.
                  </li>
                  <li>Разгон 0–100 км/ч: 3.7–4.0 сек
                  </li>
                  <li>Макс. скорость: до 250 км/ч
                  </li>
                  <li>Трансмиссия: 2-ступ. редуктор (на задней оси)
                  </li>
                  <li>Привод: Полный
                  </li>
                  <li>Длина: 4963 мм
                  </li>
                  <li>Масса: 2140–2220 кг
                  </li>
                  <li>Расход: 21.0–25.0 кВт⋅ч/100 км
                  </li>
                </ul>
              </span>
              <button class="open-modal-btn" data-model="taycan">
                <div class="default-btn">
                  <svg
                    class="css-i6dzq1"
                    stroke-linejoin="round"
                    stroke-linecap="round"
                    fill="none"
                    stroke-width="2"
                    stroke="#FFF"
                    height="20"
                    width="20"
                    viewBox="0 0 24 24"
                  >
                    <path
                      d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"
                    ></path>
                    <circle r="3" cy="12" cx="12"></circle>
                  </svg>
                  <span>Подробнее</span>
                </div>
                <div class="hover-btn">
                  <svg
                    class="css-i6dzq1"
                    stroke-linejoin="round"
                    stroke-linecap="round"
                    fill="none"
                    stroke-width="2"
                    stroke="#fff"
                    height="20"
                    width="20"
                    viewBox="0 0 24 24"
                  >
                    <circle r="1" cy="21" cx="9"></circle>
                    <circle r="1" cy="21" cx="20"></circle>
                    <path
                      d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"
                    ></path>
                  </svg>
                  <span>Оформить</span>
                </div>
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="slides">
        <div class="block1">
          <div class="element-animation1">
            <span class="image"><img src="styles/images/panamera.jpg" /></span>
          </div>
          <div class="text11">
            <div class="element-animation">
              <span class="zago"
                ><h2>
                  Porsche Panamera – Динамика и Роскошь в Совершенном Балансе
                </h2></span
              >
              <span class="text">
                <ul>
                  <li>Двигатель: 4.0 л, V8 (битурбо)
                  </li>
                  <li>Мощность: 480–500 л.с.
                  </li>
                  <li>Разгон 0–100 км/ч: 3.9–4.1 сек
                  </li>
                  <li>Макс. скорость: до 300 км/ч
                  </li>
                  <li>Трансмиссия: 8-PDK
                  </li>
                  <li>Привод: Полный
                  </li>
                  <li>Длина: 5049–5053 мм
                  </li>
                  <li>Масса: 1995–2045 кг
                  </li>
                  <li>Расход: 11.0–12.2 л/100 км</li>
                </ul>
              </span>
              <button class="open-modal-btn" data-model="panamera">
                <div class="default-btn">
                  <svg
                    class="css-i6dzq1"
                    stroke-linejoin="round"
                    stroke-linecap="round"
                    fill="none"
                    stroke-width="2"
                    stroke="#FFF"
                    height="20"
                    width="20"
                    viewBox="0 0 24 24"
                  >
                    <path
                      d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"
                    ></path>
                    <circle r="3" cy="12" cx="12"></circle>
                  </svg>
                  <span>Подробнее</span>
                </div>
                <div class="hover-btn">
                  <svg
                    class="css-i6dzq1"
                    stroke-linejoin="round"
                    stroke-linecap="round"
                    fill="none"
                    stroke-width="2"
                    stroke="#fff"
                    height="20"
                    width="20"
                    viewBox="0 0 24 24"
                  >
                    <circle r="1" cy="21" cx="9"></circle>
                    <circle r="1" cy="21" cx="20"></circle>
                    <path
                      d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"
                    ></path>
                  </svg>
                  <span>Оформить</span>
                </div>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="modal" class="modal hidden">
  <div class="modal-content">
    <span class="close-btn">&times;</span>
    <h2>Оформление заказа</h2>
    <form id="order-form" method="post" action="order.php">
      <div class="text2">

      <label for="login">Логин:</label>
      <input type="text" id="login" name="login" readonly />

      <label for="model">Модель:</label>
      <input type="text" id="model" name="model" readonly />

      <label for="trim">Комплектация:</label>
      <select id="trim" name="trim">
        <option value="base">Базовая</option>
        <option value="mid">Средняя</option>
        <option value="full">Полная</option>
      </select>

      <label for="price">Цена:</label>
      <input type="text" id="price" name="price" readonly />
<label for="color">Цвет:</label>
<select name="color" id="color-select">
  <option value="red">Красный</option>
  <option value="black">Чёрный</option>
  <option value="yellow">Жёлтый</option>
</select>
<button type="submit" class="submit">Отправить</button>
</div>

<div class="car-preview">
  <img id="car-image" src="uu/911_red.jpg" alt="Превью автомобиля" />
</div>

      
    </form>
  </div>
</div>

    <script>
  const userLogin = "<?php echo htmlspecialchars($login, ENT_QUOTES, 'UTF-8'); ?>";
</script>

    <script src="main.js"></script>
    <div id="toast" class="toast hidden">Заказ оформлен!</div>

<style>
.toast {
  position: fixed;
  top: 20px;
  left: 45%;
  background: #0f0;
  color: #000;
  padding: 20px 30px;
  border-radius: 12px;
  box-shadow: 0 0 10px #0004;
  transition: all 0.3s ease;
  font-family: 'AnonymousPro-Regular', monospace;
  z-index: 9999;
}
.toast.hidden {
  opacity: 0;
  pointer-events: none;
}
</style>

<script>
document.getElementById("order-form").addEventListener("submit", function(e) {
  e.preventDefault();

  const formData = new FormData(this);
  fetch("order.php", {
    method: "POST",
    body: formData
  })
  .then(res => res.json())
  .then(data => {
    if (data.success) {
      const toast = document.getElementById("toast");
      toast.textContent = data.message;
      toast.classList.remove("hidden");
      setTimeout(() => {
        toast.classList.add("hidden");
      }, 3000);
    } else {
      alert("Ошибка: " + data.message);
    }
  })
  .catch(err => {
    alert("Произошла ошибка при отправке формы.");
    console.error(err);
  });
});
</script>

  </body>
</html>
