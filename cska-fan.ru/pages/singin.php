<?php  require "../includes/config.php"; ?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<div class="container mt-4">
	<h1>Форма Авторизации</h1>
	<form action="../includes/auth.php" method="post" style="width: 500px"> 
		<input type="text"  class="form-control" name="login" id="login" placeholder="Введите логин"><br>
		<input type="password"  class="form-control" name="password" id="password" placeholder="Введите пароль"><br>
		<button class="btn btn-success" type="submit">Авторизоваться</button>

	</form>

</div>