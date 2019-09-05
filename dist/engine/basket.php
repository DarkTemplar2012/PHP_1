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
    $_SESSION['good'][] = $_POST['good'];
    // $goods = $_SESSION['good'];
    // print_r($goods) ;
    session_write_close();
    header("Location: ".$_SERVER['PHP_SELF']);
}

if (isset($_POST['goodRem'])) {
    session_start();
    $goodRem = $_POST['goodRem'];
    foreach (array_reverse($_SESSION['good'], true) as $key => $value) {
        if ($value == $goodRem) {
            unset($_SESSION['good'][$key]);
            break;
        }
    };
    session_write_close();
    header("Location: ".$_SERVER['PHP_SELF']);
}

if (isset($_POST['createOrder'])) {
    $login = $_SESSION['user_name'];
    $query_id_user = "SELECT id_user FROM `geek`.`user` WHERE `user_name` = '$login' LIMIT 1;";
    $mysql_id_user = mysqli_query(myDbConnect(), $query_id_user);
    $user_id_DB = mysqli_fetch_assoc($mysql_id_user);
    $id = $user_id_DB['id_user'];
    print_r($user_id_DB);
    foreach ($_SESSION['good'] as $key => $value) {
        $query_insert_basket = "INSERT INTO `geek`.`basket` (`id_user`, `id_good`) VALUES ('$id', '$value');";
        mysqli_query(myDbConnect(), $query_insert_basket);
    };
    // session_start();
    // session_destroy();

    session_write_close();
}
// print_r($_SESSION['good']);
