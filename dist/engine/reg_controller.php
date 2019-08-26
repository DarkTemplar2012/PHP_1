<?php

session_start();


$login = '';
$password = '';
$status = '';

function safeReg($data)
{
    return htmlspecialchars(strip_tags($data));
}

if (isset($_POST['login']) && isset($_POST['password'])) {
    $login = safeReg($_POST['login']);
    $password = safeReg($_POST['password']);

    $user = getUser($login);

    if ($user) {
        $status = 'Логин существует! Выберите другой';
        $_SESSION['isAuth'] = false;
    } else {
        $_SESSION['isAuth'] = true;
        $passwordHash = password_hash($password, PASSWORD_BCRYPT);
        $queryUser ="INSERT INTO `geek`.`user` (`user_name`, `user_login`, `user_password`) VALUES ('$login', '$login', '$passwordHash');";
        mysqli_query(myDbConnect(), $queryUser);
        mysqli_close(myDbConnect());

        $_SESSION['user_name'] = $login;
        header('location: /index.php');
    }
}

session_write_close();
