<?php
session_start();

$mysql = new mysqli("localhost", "root", "", "zoomagaz");
$mysql->query("SET NAMES 'utf8'");

if ($mysql->connect_error) {
    echo "Error: " . $mysql->connect_error;
    exit();
}

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$mysql->query("INSERT INTO `messages`(`name`, `email`, `message`) VALUES('$name', '$email', '$message')");
header('location: index.php');