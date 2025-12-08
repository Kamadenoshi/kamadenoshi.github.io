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
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/onas.css">
	<title>ABSOLUTE</title>
</head>
<body>
	<header>
		<div class="logo"><a href="index.php"><img src="images/1.png"></a></div>
		<nav>
		<ul class="nav">
			<li><a href="index.php">ГЛАВНАЯ</a></li>
			<li class="uslu"><a href="uslugi.php">УСЛУГИ</a>
				<ul class="usl">
					<li><a href="trenajer.php">ТРЕНАЖЕРНЫЙ ЗАЛ</a></li>
					<li><a href="bassein.php">БАССЕЙН</a></li>
					<li><a href="detskiy.php">ДЕТСКИЙ ФИТНЕС</a></li>
					<li><a href="igroviye.php">ИГРОВЫЕ ВИДЫ СПОРТА</a></li>
				</ul>
			</li>
			<li><a href="aboniment.php">АБОНЕМЕНТ</a></li>
			<li class="uss"><a href="onas.php">О НАС</a>
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
  			<div class="log"><a href="index.php"><img src="images/1.png"></a></div>
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
		<div class="shap"><img src="images/4.jpg"></div>
		<div class="text"><h1>О НАС</h1></div>
	</section>
	<article>
		<div class="dva">
			<div class="block s">
				<h1>В чем наша сила?</h1>
				<p>ABSOLUTE - быстроразвивающийся фитнес клуб, который смог завовевать доверие тысячи людей желающих прокачать себя по максимуму. У нас насчитывается самое большое количество клубов во всем Дагестане, мы планируем развиваться по всей стране и выйти на мировую арену.</p>
			</div>
			<div class="block o">
				<h1>Наша особенность</h1>
				<p>У нас самый большой выбор различных услуг, как расслабляющих так и укрепляющих:
				<ol> 
					<li>Фитнес и разнообразные групповые занятия для взрослых и детей</li>
					<li>Салоны красоты & spa</li>
					<li>Сауны и парные</li>
					<li>Бары с самым разнообразным меню</li>
					<li>Бассейны с морской водой</li>
				</ol>
				</p>
			</div>
		</div>	
		<div class="dva">	
			<div class="block t">
				<h1>Тренерский состав</h1>
				<p>Служба подготовки кадров руководствуется высокими стандартами в подборе команды, обучении тренеров, предоставлении в клубах фитнес-программ мирового уровня. Весь персонал проходит специальное обучение, участвует в ежегодных тренингах и сертификациях с последующей аттестацией для работы в клубах.</p>
				<a href="trenera.php">ПОДРОБНЕЕ</a>
			</div>
			<div class="block a">
				<h1>Оборудование</h1>
				<p>ABSOLUTE с момента основания уделяет большое внимание качеству, эффективности, удобству и безопасности тренажеров. В наших залах устанавливается оборудование ведущих мировых брендов. Среди них Life Fitness – крупнейший в мире производитель премиального фитнес-оборудования; легендарные тренажеры Hammer Strength — бренд №1 в мире среди силовых тренажеров со свободными весами.</p>
			</div>
		</div>	
	</article>
	<div class="str"><a href="#top"><img src="images/str.png" class="str"></a></div>
	<footer>
		<br>
		<br>
		<br>
		<div class="left">
		<div class="ft"><p>©ABSOLUTE, 2023.Все права защищены.</p></div>
		<div class="pl"><img src="images/mc.png"> <img src="images/mir.png"> <img src="images/visa.png"></div>
		</div>
		<div class="right">
		<div class="poch"><p>УЗНАВАЙТЕ ОБО ВСЁМ ПЕРВЫМИ</p> <p>Email</p><input type="email" name="mail"></div>
		</div>
	</footer>
</body>
</html>