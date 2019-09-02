<?php
/*$option = [
	'cookie_lifetime' => 24*60*60,
//	'read_and_close' => true,
	'write_and_close' => true
];*/

session_start();

// setcookie('name', 'Vasya', time()+3600*24*14);



// $_SESSION['name'] = "Foma";

// print_r($_SESSION);
// print_r($_COOKIE);

//session_destroy();

// $password = "Admin";


//$passwordHash = password_hash($password, PASSWORD_BCRYPT);
// $passwordHash = '$2y$12$aFiQ4r0975VQ7xAqII7zyuWp9k.odgcL0ylsZo3aHGhywxqUfQjZ6';


// $isAuth = password_verify($password, $passwordHash);

//echo $passwordHash;

/*if ($isAuth) {
	echo "Пароль верный!";
	$_SESSION['isAuth'] = true;

}
else {
	echo "Пароль не верный!";
	$_SESSION['isAuth'] = false;

}*/

session_write_close();
