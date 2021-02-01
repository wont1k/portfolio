<?php 
include('includes/db.php');

$login = $_GET['login'];
$password = $_GET['password'];
$count = mysqli_query($connection, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password' ");
if (mysqli_num_rows($count) == 0)
{ 
		echo 'Неверный логин или пароль!';
}else
{
		echo 'Вы успешно зашли как ' . $login;
}


?>