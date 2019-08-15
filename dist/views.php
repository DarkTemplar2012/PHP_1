<?php
include  'engine/autoload.php';
autoload('config');
// mysqli_query(myDbConnect(), "truncate gallery.url;");
// foreach ($imgArrScan as $values) {
//     $query = "INSERT INTO `gallery`.`url` (`url`) VALUES ('$values');";
//     mysqli_query(myDbConnect(), $query);
// };
$tmp = basename($_POST['action']);


$query = "SELECT * FROM `gallery`.`url` WHERE (`url` = '$tmp');;";


$result = mysqli_query(myDbConnect(), $query);

$employees = [];

while ($row = mysqli_fetch_assoc($result)) {
    $employees[] = $row;
}

foreach ($employees as $key => $value) {
    $totalView = $value['views'];
}

$totalView += 1;

$query = "UPDATE `gallery`.`url` SET `views` = '$totalView' WHERE (`url` = '$tmp');";

mysqli_query(myDbConnect(), $query);

mysqli_close(myDbConnect());
