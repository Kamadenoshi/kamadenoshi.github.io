<?php
$mysql = new mysqli("localhost", "root", "", "SERP");
$mysql->query("SET NAMES 'utf8'");

session_start();

$bron = $mysql->query("INSERT INTO `rezerv`(`date`, `time`, `name`, `phone`, `people`, `comments`) VALUES('" . $_POST['date'] . "', '" . $_POST['time'] . "','" . $_POST['name'] . "' ,'" . $_POST['phone'] . "', '" . $_POST['people'] . "', '" . $_POST['comments'] . "')");

$_SESSION['form_submitted'] = true;

header('location: rezerv.php');

