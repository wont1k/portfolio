<?php require "../includes/db.php";
include ("../includes/header.php");?>
  

<div class="container log_reg col-md-4">
  <form action="#" method="post">
    <div class="form-group">
      <label for="name">Логин</label>
      <input type="text" class="form-control" name="login" id="login" value="<?php echo @$data['login']?>" placeholder="Введите логин">
    </div>
    <div class="form-group">
      <label for="password">Пароль</label>
      <input type="password" class="form-control" name="password" id="password" placeholder="Введите пароль">
      <small id="emailHelpId" class="form-text text-muted">Используйте латинские буквы</small>
    </div>
		<div class="form-group">
      <label for="password">Повтор пароля</label>
      <input type="password" class="form-control" name="password-2" id="password-2" placeholder="Введите пароль ещё раз">
    </div>
		<div class="form-group">
      <label for="text">Email</label>
      <input type="text" class="form-control" name="email" id="email" placeholder="Введите свой email">
    </div>
    <button name="singup" type="submit" class="btn btn-dark">Регистрация</button>
  </form>
  <?php $data = $_POST;
  if (isset($data['singup'])){
    $errors = array();
    $log = R::findOne('users', 'login=?', [$data['login']]);
		$email = R::findOne('users', 'login=?', [$data['email']]);

    if ((mb_strlen(trim($data['login'])) < 5) or (mb_strlen(trim($data['login'])) > 50 )){
    	$errors[]	= 'Неверная длина логина';
    }

    if ((mb_strlen($data['password']) < 4) or (mb_strlen($data['password']) > 15 )){
      $errors[]	= 'Неверная длина пароля';
    }

		if ($data['password'] != $data['password-2']){
			$errors[]	= "Пароли не совпадают";
		}

		if (!(filter_var($data['email'], FILTER_VALIDATE_EMAIL))) {
    	$errors[]	= "E-mail адрес указан неверно";
		} 

    if(!empty($log)){
      $errors[]= 'Пользователь с таким логином уже существует';
    }

		if(!empty($email)){
      $errors[]= 'Пользователь с таким email уже зарегестрирован';
    }

    if (empty($errors)) {
    	$user = R::dispense('users');
    	$user-> login = $data['login'];
    	$user-> password	= password_hash($data['password'], PASSWORD_DEFAULT);
			$user-> email = $data['email'];
			$hash = md5($login . time());
			$user-> hash = $hash;
			R::store($user);
    	// Переменная $headers нужна для Email заголовка
			$headers  = "MIME-Version: 1.0\r\n";
			$headers .= "Content-type: text/html; charset=utf-8\r\n";
			$headers .= "To: <$email>\r\n";
			$headers .= "From: <mail@example.com>\r\n";
			// Сообщение для Email
			$message = '<html>
										<head>
											<title>Подтвердите Email</title>
										</head>
										<body>
											<p>Что бы подтвердить Email, перейдите по <a href="http://training/confirmedhash=' . $hash . '">ссылка</a></p>
										</body>
									</html>';
    	if (mail($email, "Подтвердите Email на сайте", $message, $headers)) {
    		// Если да, то выводит сообщение
    		echo 'Подтвердите на почте';
    	}
													//echo '<div style="color: green">'."Вы успешно зарегистрировались".'<br>'. "теперь вам нужно авторизоваться".'</div> <hr>';
    }else {
    	echo '<div style="color: red">'.array_shift($errors).'</div> <hr>';

    }
	}?>        
</div>
