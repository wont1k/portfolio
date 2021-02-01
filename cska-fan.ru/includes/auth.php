<?php  
require "../includes/config.php";
	$login = filter_var(trim($_POST['login']));
	$password = filter_var(trim($_POST['password']));

	$password = md5($password."cska-fan.ru");
	$result = mysqli_query ( $connection, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password' ");
	$user = mysqli_fetch_assoc($result);
	if ( count($user) <= 0 ) {
		echo "Такой пользователь не найден";
		exit();
	}
	
	setcookie('user', $user['name'], time() + 3600, "/" );

	header('Location: /');


	?>