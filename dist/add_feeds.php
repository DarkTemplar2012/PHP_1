<?php
include  'engine/autoload.php';
autoload('config');
$feed_name = $_POST['name'];
$feed_text = $_POST['text'];
$feed_url = $_SERVER['HTTP_REFERER'];
$queryInsert ="INSERT INTO `geek`.`feedback` (`feedback_body`, `feedback_user`, `url`) VALUES ('$feed_text', '$feed_name', '$feed_url');";
mysqli_query(myDbConnect(), $queryInsert);
mysqli_close(myDbConnect());
header('Location: ' . $feed_url);
