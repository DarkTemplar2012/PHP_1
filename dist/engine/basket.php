<?php



// session_destroy();

// $goods = '';
// $_SESSION['good'] = 0;
// $password = '';
// $status = '';

// function safe($data)
// {
//     return htmlspecialchars(strip_tags($data));
// }

if (isset($_POST['good'])) {
    session_start();
    // $good = $_SESSION['good'];
    // $good[] = $_POST['good'];
    $_SESSION['good'][] = $_POST['good'];;
    // $goods = $_SESSION['good'];
    // print_r($goods) ;
    session_write_close();
    header("Location: ".$_SERVER['PHP_SELF']);
}

if (isset($_POST['goodRem'])) {
    session_start();
    $goodRem = $_POST['goodRem'];
    foreach ($_SESSION['good'] as $key => $value) {
        if ($value == $goodRem) {
            unset($_SESSION['good'][$key]);
            break;
        }
    };
    session_write_close();
    header("Location: ".$_SERVER['PHP_SELF']);
}
