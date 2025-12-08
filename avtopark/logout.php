<?php
session_start();

$mysql = new mysqli("localhost", "root", "", "smartpark");
$mysql->query("SET NAMES 'utf8'");

if ($mysql->connect_error) {
    echo "Error: " . $mysql->connect_error;
    exit();
}
unset($_SESSION['login']);
header('location: index.php');