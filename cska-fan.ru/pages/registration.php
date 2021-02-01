<?php  require "../includes/config.php"; ?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<div class="container mt-4">
	<h1>Форма регистрации</h1>
	<form action="../includes/check.php" method="post" style="width: 500px"> 
		<input type="text"  class="form-control" name="login" id="login" placeholder="Введите логин"><br>
		<input type="text"  class="form-control" name="name" id="name" placeholder="Введите никнейм"><br>
		<input type="password"  class="form-control" name="password" id="password" placeholder="Введите пароль"><br>
		<button class="btn btn-success" type="submit">Зарегестрироваться</button>

	</form>

</div>






    <div class="container padding col-md-4">
        <div class="form-group">
          <form></form>
          <label for="name">Логин</label>
          <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин">
        </div>
        <div class="form-group">
          <label for="password">Пароль</label>
          <input type="password" class="form-control" name="" id="password" placeholder="Введите пароль">
          <small id="emailHelpId" class="form-text text-muted">Используйте латинские буквы</small>
        </div>
        <button type="button" class="btn btn-dark" action="#">Вход</button>
        <button type="button" class="btn btn-dark">Регистрация</button>
    </div>