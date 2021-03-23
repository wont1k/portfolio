<?php require "../includes/db.php";
include ("../includes/header.php");
?>
<div class="container alert mt-5">
  <div class="row">
    <div class="col-4 offset-4">
      <?php 
      if ($_GET['hash']) {
        $hash = $_GET['hash'];
        // Получаем id и подтверждено ли Email
        $user = R::findOne('users', 'hash=?', [$hash]);
        if (!empty($user)) {
            if ($user->email_confirmed == 0) {
              // Если всё верно, то делаем подтверждение
              $user->email_confirmed = 1;
              ?><h5><?echo "Email подтверждён";?><h5><?php
              R::store($user);
            } else {
              ?><h5><?echo "Ваш email уже подтверждён";?><h5><?php
            } 
        } else {
          ?><h5><?echo "Что то пошло не так";?><h5><?php
        }
      } else {
          ?><h5><?echo "Что то пошло не так";?><h5><?php
      } ?>
    </div>
  </div>
</div>
