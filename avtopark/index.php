<?php
session_start();

$mysql = new mysqli("localhost", "root", "", "smartpark");
$mysql->query("SET NAMES 'utf8'"); if ($mysql->connect_error) { echo "Error: " .
$mysql->connect_error; exit(); } if (isset($_SESSION["login"])) { $login =
$_SESSION["login"]; } ?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Автопарк</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Alegreya+SC&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="styles/style.css" />
  </head>
  <body>
    <header>
      <nav class="main-nav">
        <ul>
          <li><a class="active" href="index.php">Главная</a></li>
          <li><a href="cars.php">Мой автопарк</a></li>
        </ul>
      </nav>
      <?php if (isset($login)): ?>
      <div class="user">
        <h1>
          <img src="images/icon_reg.svg" class="icon_reg" />
          <?php echo $login; ?>
        </h1>
        <a class="exit" href="logout.php"
          ><img src="images/x.svg" class="exit" />Выход</a
        >
      </div>

      <?php else: ?>
      <a class="reg_button" href="reg.php"
        ><img src="images/icon_reg.svg" class="icon_reg" /> Регистрация</a
      >
      <?php endif; ?>
    </header>
    <main>
      <div class="inf_cont main_cont">
        <div class="inf_img">
          <img src="images/inf_first.png" />
        </div>
        <div class="inf_header">
          <h1>Управления автопарком на основе машинного обучения</h1>
        </div>
        <div class="inf_text">
          <span class="inf_text_line">
            <img src="images/check.svg" />
            <p>
              Контролируйте движение транспортных средств и расход топлива в
              режиме реального времени с точностью данных 99,97%
            </p>
          </span>
          <span class="inf_text_line">
            <img src="images/check.svg" />
            <p>
              Лицензия на право использования программного обеспечения: Astra
              Linux Special Edition. Уровень защищенности «Максимальный»
            </p>
          </span>
          <span class="inf_text_line">
            <img src="images/check.svg" />
            <p>Бесплатное обучение работе с платформой управления автопарком</p>
          </span>
          <span class="inf_text_line">
            <img src="images/check.svg" />
            <p>Сократите затраты на содержание автопарка до 30% за 1 месяц</p>
          </span>
        </div>
      </div>
      <div class="inf_cont">
        <div class="inf_header">
          <h1>Множество датчиков контроля</h1>
        </div>
        <div class="inf_wrap">
          <div class="inf_text">
            <p class="inf_many">
              Многофункциональное оборудование от одного из ведущих российских
              производителей оборудования автомониторинга всех видов транспорта,
              который по праву заслужил высокий уровень доверия со стороны
              покупателей. Мы предлагаем не просто купить и установить
              спутниковый мониторинг ГЛОНАСС\GPS, а комплексное решение,
              контроль транспорта, который включает в себя линейку различного
              телематического оборудования, системы транспортной аналитики,
              тахографы и карты водителя по выгодной цене
            </p>
          </div>
          <div class="inf_img">
            <img src="images/inf_second.png" />
          </div>
        </div>
      </div>
      <div class="inf_cont">
        <div class="inf_third_block">
          <div class="inf_header ih_left">
            <h1 class="company_name">
              <font color="#2772e1">Smart</font>
              <font color="#2c2c2c">Park</font>
            </h1>
            <p class="inf_into_header">
              это новый инструмент для помощи в принятии решений по управлению
              автопарком и увеличения его эффективности с использованием
              технологий машинного обучения
            </p>
          </div>
          <img src="images/inf_third.png" />
        </div>
        <div class="inf_text down_text">
          <p>
            Наша инновационная аналитическая программа позволит обеспечить
            безопасность и экономичность на дороге, а также будет способствовать
            снижению финансовых затрат предприятия. Наша цель - создание
            максимально эффективной системы для анализа автотранспортного
            бизнеса. 
          </p>
        </div>
      </div>
      <div class="inf_cont">
        <div class="inf_header">
          <h1>Качество вождения</h1>
        </div>
        <div class="inf_text">
          <p class="inf_text_center">
            Автоматически формируются таблицы с различными параметрами, в
            которых отображаются лучшие показатели в данной категории с
            разбивкой по маркам ТС и колоннам. Возможность отследить водителей с
            наиболее экономичным вождением.
          </p>
        </div>
        <div class="inf_img">
          <img class="inf_img_double" src="images/inf_fourth1.png" />
          <img src="images/inf_fourth2.png" />
        </div>
      </div>
      <div class="inf_cont">
        <div class="inf_header">
          <h1>Отчетность и техническое обслуживание</h1>
        </div>
        <div class="inf_wrap">
          <div class="inf_text">
            <p class="inf_many">
              Весь набор данных о работе транспортного средства за любой период
              времени в одном отчёте, распределенном по дням. Быстрая сверка
              позволяет оперативно найти погрешности и недостатки в работе как
              конкретного автомобиля, так и группы машин в целом, а так же
              планирывание и создание оповещения о техническом обслуживании
              автомобиля. Своевременное соблюдение сроков проведения ТО
              гарантирует долговременную и эффективную эксплуатацию
              транспортного средства.
            </p>
          </div>
          <div class="inf_img">
            <img src="images/inf_fifth.png" />
          </div>
        </div>
      </div>
      <div class="inf_cont">
        <div class="inf_header">
          <h1>Контроль расхода топлива</h1>
        </div>
        <div class="inf_wrap">
          <div class="inf_text">
            <p class="inf_many">
              Система контроля топлива (система скрт) - это прежде всего датчик
              контроля расхода топлива, который устанавливается в бак
              автомобиля, передает информацию об уровне топлива и его расходе в
              систему мониторинга транспорта. Обобщение этой информации
              позволяет не только спрогнозировать и точно рассчитать топливные
              затраты, а также режима эксплуатации автотранспорта, но и
              сократить случаи нецелевого использования техники, наладить учет
              топлива.
            </p>
          </div>
          <div class="inf_img">
            <img src="images/inf_sixth.png" />
          </div>
        </div>
      </div>
    </main>
    <footer>
      <div class="footer_top">
        <div class="ft_txt">
          <h1 class="company_name">
            <font color="#2772e1">Smart</font><font color="#2c2c2c">Park</font>
          </h1>
          <p>8 900 260-80-20</p>
        </div>
        <div class="icons">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0,0,256,256"
            width="72px"
            height="72px"
            fill-rule="nonzero"
            class="tg"
          >
            <g
              fill="none"
              fill-rule="nonzero"
              stroke="#000000"
              stroke-width="5.33333"
              stroke-linecap="butt"
              stroke-linejoin="miter"
              stroke-miterlimit="10"
              stroke-dasharray=""
              stroke-dashoffset="0"
              font-family="none"
              font-weight="none"
              font-size="none"
              text-anchor="none"
              style="mix-blend-mode: normal"
              class="tg_circle"
            >
              <path
                d="M128,252.49848c-68.75861,0 -124.49848,-55.73987 -124.49848,-124.49848v0c0,-68.75861 55.73987,-124.49848 124.49848,-124.49848v0c68.75861,0 124.49848,55.73987 124.49848,124.49848v0c0,68.75861 -55.73987,124.49848 -124.49848,124.49848z"
                id="shape"
              ></path>
            </g>
            <g
              fill="#000000"
              fill-rule="nonzero"
              stroke="none"
              stroke-width="1"
              stroke-linecap="butt"
              stroke-linejoin="miter"
              stroke-miterlimit="10"
              stroke-dasharray=""
              stroke-dashoffset="0"
              font-family="none"
              font-weight="none"
              font-size="none"
              text-anchor="none"
              style="mix-blend-mode: normal"
              class="tg_path"
            >
              <g transform="translate(-9.06339,0.00027) scale(5.33333,5.33333)">
                <path
                  d="M5.83,23.616c12.568,-5.529 28.832,-12.27 31.077,-13.203c5.889,-2.442 7.696,-1.974 6.795,3.434c-0.647,3.887 -2.514,16.756 -4.002,24.766c-0.883,4.75 -2.864,5.313 -5.979,3.258c-1.498,-0.989 -9.059,-5.989 -10.7,-7.163c-1.498,-1.07 -3.564,-2.357 -0.973,-4.892c0.922,-0.903 6.966,-6.674 11.675,-11.166c0.617,-0.59 -0.158,-1.559 -0.87,-1.086c-6.347,4.209 -15.147,10.051 -16.267,10.812c-1.692,1.149 -3.317,1.676 -6.234,0.838c-2.204,-0.633 -4.357,-1.388 -5.195,-1.676c-3.227,-1.108 -2.461,-2.543 0.673,-3.922z"
                ></path>
              </g>
            </g>
          </svg>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0,0,256,256"
            width="70px"
            height="70px"
            fill-rule="nonzero"
            class="whats"
          >
            <g
              fill="none"
              fill-rule="nonzero"
              stroke="#000000"
              stroke-width="5.12"
              stroke-linecap="butt"
              stroke-linejoin="miter"
              stroke-miterlimit="10"
              stroke-dasharray=""
              stroke-dashoffset="0"
              font-family="none"
              font-weight="none"
              font-size="none"
              text-anchor="none"
              style="mix-blend-mode: normal"
              class="whats_circle"
            >
              <path
                d="M128,252.63486c-68.83393,0 -124.63486,-55.80093 -124.63486,-124.63486v0c0,-68.83393 55.80093,-124.63486 124.63486,-124.63486v0c68.83393,0 124.63486,55.80093 124.63486,124.63486v0c0,68.83393 -55.80093,124.63486 -124.63486,124.63486z"
                id="shape"
              ></path>
            </g>
            <g
              fill="#000000"
              fill-rule="nonzero"
              stroke="none"
              stroke-width="1"
              stroke-linecap="butt"
              stroke-linejoin="miter"
              stroke-miterlimit="10"
              stroke-dasharray=""
              stroke-dashoffset="0"
              font-family="none"
              font-weight="none"
              font-size="none"
              text-anchor="none"
              style="mix-blend-mode: normal"
              class="whats_path"
            >
              <g transform="scale(5.12,5.12)">
                <path
                  d="M25,8c-9.389,0 -17,7.611 -17,17c0,3.127 0.85903,6.04745 2.33203,8.56445l-2.18555,8.1582l8.53711,-1.9043c2.46,1.383 5.29341,2.18164 8.31641,2.18164c9.389,0 17,-7.611 17,-17c0,-9.389 -7.611,-17 -17,-17zM25,9c8.802,0 16,7.198 16,16c0,8.802 -7.198,16 -16,16c-2.997,0 -5.7593,-0.80223 -8.1543,-2.24023l-7.30078,1.62305l1.86133,-6.96094c-1.535,-2.45 -2.40625,-5.31687 -2.40625,-8.42187c0,-8.802 7.198,-16 16,-16zM18.80078,16.54883c-0.302,0 -0.78717,0.11055 -1.20117,0.56055c-0.407,0.45 -1.56641,1.53214 -1.56641,3.74414c0,2.204 1.60312,4.34077 1.82813,4.63477c0.225,0.302 3.10297,4.97934 7.66797,6.77734c3.784,1.49 4.55772,1.19419 5.38672,1.11719c0.821,-0.071 2.65434,-1.08291 3.02734,-2.12891c0.373,-1.047 0.37281,-1.94672 0.25781,-2.13672c-0.114,-0.182 -0.40742,-0.29258 -0.85742,-0.51758c-0.45,-0.225 -2.65631,-1.31294 -3.07031,-1.46094c-0.408,-0.148 -0.70991,-0.22539 -1.00391,0.22461c-0.302,0.45 -1.15683,1.46186 -1.42383,1.75586c-0.259,0.302 -0.51875,0.33633 -0.96875,0.11133c-0.45,-0.225 -1.89833,-0.69556 -3.61133,-2.22656c-1.333,-1.187 -2.23219,-2.65552 -2.49219,-3.10352c-0.26,-0.448 -0.02773,-0.69492 0.19727,-0.91992c0.204,-0.196 0.44883,-0.5193 0.67383,-0.7793c0.217,-0.267 0.29536,-0.44995 0.44336,-0.75195c0.155,-0.294 0.07684,-0.56016 -0.03516,-0.78516c-0.112,-0.225 -0.98281,-2.44312 -1.38281,-3.32812c-0.336,-0.744 -0.68872,-0.76544 -1.01172,-0.77344c-0.262,-0.014 -0.56342,-0.01367 -0.85742,-0.01367z"
                ></path>
              </g>
            </g>
          </svg>

          <a href="#" class="up"
            ><svg
              width="78"
              height="78"
              viewBox="0 0 78 78"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <circle
                cx="38.5"
                cy="43.5"
                r="33"
                fill="#E6E6E6"
                stroke="#9C9C9C"
              />
              <path
                d="M39 37.05L24.05 52L19.5 47.45L39 27.95L58.5 47.45L53.95 52L39 37.05Z"
                fill="#1D1B20"
              />
            </svg>
          </a>
        </div>
      </div>
      <div class="footer_bottom">
        <div class="fb_txt">
          <p>Copyright © 2005-2024 SmartPark</p>
          <p class="fb">ООО "Мониторинговая компания"</p>
        </div>
        <div class="rate">
          <img src="images/google_icon.svg" />
          <div class="rate_inf">
            <img src="images/rate.svg" />
            <p>Рейтинг организации в Google</p>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
