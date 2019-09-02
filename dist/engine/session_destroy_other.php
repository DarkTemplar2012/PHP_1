<?php

if (isset($_POST['logout'])) {
    session_start();
    // session_destroy();
    $_SESSION['isAuth'] = false;

    header('location: '.$_SERVER['REQUEST_URI']);
    die;
}
