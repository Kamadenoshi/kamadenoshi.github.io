<?php

$mysql = new mysqli("localhost", "root", "", "absolute");
$mysql->query("SET NAMES 'utf8'");

if ($mysql->connect_error) {
    echo "Error: " . $mysql->connect_error;
    exit();
}

$fname = $_POST['fname'];
$email = $_POST['email'];
$vopros = $_POST['vopros'];

$mysql->query("INSERT INTO `messages`(`fname`, `email`, `vopros`) VALUES('$fname', '$email', '$vopros')");
header('location: index.php');