<?php
$mysql = new mysqli("localhost", "root", "", "smartpark");
$mysql->query("SET NAMES 'utf8'");

session_start();

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_POST['log']) {
    $login = test_input($_POST['login']);
    $password = md5(test_input($_POST['password']));
    $users = [];
    $limitation = $mysql->query("SELECT * from accounts WHERE login = '$login' limit 1");
    while ($row = mysqli_fetch_assoc($limitation)) {
        $users[] = array(
            'login' => $row['login'],
            'password' => $row['password'],
            'parkname' => $row['parkname'] 
        );
    }

    if (count($users) > 0) {
        if ($users[0]['password'] == $password && $users[0]['login'] == $login) {
            $_SESSION['login'] = $login;
            $_SESSION['parkname'] = $users[0]['parkname']; 
            header('location: cars.php');
            exit();
        }
    } else {
        $_SESSION['AUTH_ERR'] = '3';
        header('location: index.php');
        exit();
    }
}


if ($_POST['register']) {
    $name = test_input($_POST['name']);
    $parkname = test_input($_POST['parkname']);
    $email = test_input($_POST['email']);
    $login = test_input($_POST['login']);
    $password = md5(test_input($_POST['password']));
    $users = [];
    $limitation = $mysql->query("SELECT * from accounts WHERE login = '$login' or email = '$email' limit 1");
    while ($row = mysqli_fetch_assoc($limitation)) {
        $users[] = array(
            'login' => $row['login'],
            'password' => $row['password'],
        );
    }

    if (count($users) > 0) {
        $_SESSION['AUTH_ERR'] = '1';
    } else {
        unset($_SESSION['AUTH_ERR']);
        $mysql->query("INSERT INTO accounts (name, parkname, email, login, password) 
                VALUES ('$name', '$parkname', '$email', '$login', '$password')");

// Затем добавляем автопарк в cars
$mysql->query("INSERT INTO cars (model, number, parkname) 
                VALUES ('Базовая модель', '000000', '$parkname')");
    header('location: login.php');
}
}
