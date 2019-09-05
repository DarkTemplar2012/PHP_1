<?php
$login = $_SESSION['user_name'];
if ($login != 'admin') {
    $queryCab = "SELECT user.user_name, goods.good_name, goods.good_price
    from basket as basket
    inner join user as user on basket.id_user = user.id_user
    inner join goods as goods on basket.id_good = goods.id_good
    where user_name = '$login'
    order by good_name;";
} else {
    $queryCab = "SELECT user.user_name, goods.good_name, goods.good_price
    from basket as basket
    inner join user as user on basket.id_user = user.id_user
    inner join goods as goods on basket.id_good = goods.id_good
    order by user_name;";
}


$resultCab = mysqli_query(myDbConnect(), $queryCab);

$employeesCab = [];

while ($row = mysqli_fetch_assoc($resultCab)) {
    $employeesCab[] = $row;
}

mysqli_close(myDbConnect());
