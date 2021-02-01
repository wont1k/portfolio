<?php 
	require "../includes/config.php";
	$login = filter_var(trim($_POST['login']));
	$password = filter_var(trim($_POST['password']));
	$name = filter_var(trim($_POST['name']));
	$email = filter_var(trim($_POST['email']));

	if((mb_strlen($login) <5) or (mb_strlen($login) > 90)) {
		echo "Недопустимая длина логина";
		exit();
	}else if ((mb_strlen($name) < 3 ) or (mb_strlen($name) > 50 )){
		echo "Недопустимая длина имени";
		exit();
	}else if ((mb_strlen($password) < 4 ) or (mb_strlen($password) > 15 )){
		echo "Недопустимая длина пароля (от 4 до 15 символов)";
		exit();
	}
	$password = md5($password."cska-fan.ru");
	mysqli_query ( $connection, "INSERT INTO `users` (`login`, `password`, `name`) VALUES ('$login','$password','$name') ");
	header('Location: /');
 ?>
