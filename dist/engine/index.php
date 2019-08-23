<?php

// $imgArrScan = (autoload(PUBLIC_DIR.'img/gallery'));

// foreach ($imgArrScan as $values) {
//     $query = "INSERT INTO `gallery`.`url` (`url`) VALUES ('$values');";
//     mysqli_query(myDbConnect(), $query);
// };

$query = "SELECT * FROM `geek`.`goods`;";

$result = mysqli_query(myDbConnect(), $query);

$employees = [];

while ($row = mysqli_fetch_assoc($result)) {
    $employees[] = $row;
}

mysqli_close(myDbConnect());
