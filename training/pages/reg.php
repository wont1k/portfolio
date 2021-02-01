<?php require "../includes/db.php";
include ("../includes/header.php");?>
  

  <div class="container padding col-md-4">
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
        <button name="singup" type="submit" class="btn btn-dark">Регистрация</button>
        </form>
        <?php $data = $_POST;
        	if (isset($data['singup'])){

        		$errors = array();
            $log = R::findOne('users', 'login=?', [$data['login']]);

        		if ((mb_strlen(trim($data['login'])) < 5) or (mb_strlen(trim($data['login'])) > 50 )){
        				$errors[]	= 'Неверная длина логина';
        		}

        		if ((mb_strlen($data['password']) < 4) or (mb_strlen($data['password']) > 15 )){
        				$errors[]	= 'Неверная длина пароля';
        		}

            if(!empty($log)){
              $errors[]= 'Пользователь с таким логином уже существует';
            }

        		if (empty($errors)) {
        			$user = R::dispense('users');
        			$user-> login = $data['login'];
        			$user-> password	= password_hash($data['password'], PASSWORD_DEFAULT);
        			R::store($user);
        			echo '<div style="color: green">'."Вы успешно зарегистрировались".'<br>'. "теперь вам нужно авторизоваться".'</div> <hr>';
        		}
        		else {
        			echo '<div style="color: red">'.array_shift($errors).'</div> <hr>';

        		}
        	}


         ?>
        
    </div>
