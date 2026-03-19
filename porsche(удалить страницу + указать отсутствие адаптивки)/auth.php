<?php
$mysql = new mysqli("localhost", "root", "", "porsche");
$mysql->query("SET NAMES 'utf8'");

session_start();

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_POST['auth']) {
    $password = md5(test_input($_POST['password']));
    $login = test_input($_POST['login']);
    $users = [];
    $limitation = $mysql->query("SELECT * from users WHERE login = '$login' limit 1");
    while ($row = mysqli_fetch_assoc($limitation)) {
        $users[] = array(
            'login' => $row['login'],
            'password' => $row['password']
        );
    }

    if (count($users) > 0) {
        if ($users[0]['password'] == $password) {
            if ($users[0]['admin'] == 1) {
                header('location: admin_panel.php');
            } else {
                $_SESSION['login'] = $login;
                header('location: index.php');
            }
        } else {
            $_SESSION['AUTH_ERR'] = '3';
            header('location: index.html');
        }
    } else {
        $_SESSION['AUTH_ERR'] = '2';
        header('location: index.html');
    }
}

if ($_POST['register']) {
    $name = test_input($_POST['name']);
    $email = test_input($_POST['email']);
    $login = test_input($_POST['login']);
    $password = md5(test_input($_POST['password']));
    $users = [];
    $limitation = $mysql->query("SELECT * from users WHERE login = '$login' or name = '$name' limit 1");
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
        $mysql->query("INSERT INTO  `users` (`name`, `email`, `login`, `password`) VALUES('" . $name . "', '" . $email . "', '" . $login . "' , '" . $password . "');");
    }
    header('location: index.html');
}
