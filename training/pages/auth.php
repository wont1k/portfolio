<?php require "../includes/db.php"; 
include ("../includes/header.php"); ?>

<div class="container log_reg col-md-4">
  <?if ($_GET['auth'] != ''){
    echo '<div style="color: red">'."Вам нужно авторизоваться".'</div> <hr>';
  }?>
  <form action="#" method="post">
    <div class="form-group">
      <label for="name">Логин</label>
      <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин">
    </div>
    <div class="form-group">
      <label for="password">Пароль</label>
      <input type="password" class="form-control" name="password" id="password" placeholder="Введите пароль">
      <small id="emailHelpId" class="form-text text-muted">Используйте латинские буквы</small>
    </div>
    <button type="submit" name="log" class="btn btn-dark">Вход</button>
  </form>
  <?php $data = $_POST;
    if (isset($data['log'])){
      $errors = array();
      $user = R::findOne('users', 'login = ?', array($data['login']));
      if ($user){
        if (password_verify($data['password'], $user->password )){
          if ($user->email_confirmed == 1){
            $_SESSION['logged_user'] = $user;
            echo '<div style="color: green">'."Вы успешно авторизовались".'</div> <hr>';
            echo("<meta http-equiv='refresh' content='1'>");
          }else {
            $errors[] = "Email не подтверждён. Пожалуйста проверьте почту и подтвердите свой email";
          }
        }else {  
          $errors[] = "Неверно введён пароль";
        }
      }else{
        $errors[] = "Пользователь с таким логином не найден";
      }
      if (!empty($errors)){
        echo '<div style="color: red">'.array_shift($errors).'</div> <hr>';
      }
    }
  ?>
<div>