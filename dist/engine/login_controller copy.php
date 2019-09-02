<?php

session_start();


$login = '';
$password = '';
$status = '';

function safe($data)
{
    return htmlspecialchars(strip_tags($data));
}

if (isset($_POST['login']) && isset($_POST['password'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    $user = getUser($login);

    if ($user) {
        if (password_verify($password, $user['user_password'])) {
            $_SESSION['isAuth'] = true;
            $_SESSION['user_name'] = $user['user_login'];


            header('location: /index.php');
            die;
        } else {
            $status = 'Пароль не верный! Проверьте данные и повторите вновь';
            $_SESSION['isAuth'] = false;
        }
    } else {
        $status = 'Логин не верный! Проверьте данные и повторите вновь';
        $_SESSION['isAuth'] = false;
    }
}

session_write_close();
