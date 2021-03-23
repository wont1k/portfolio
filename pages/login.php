<?php require "../includes/db.php";
include ("../includes/header.php");?>
<script type="text/javascript" src="../js/ava.js"></script>
<?php 
if ( isset($_SESSION['logged_user'])) :?>

  <div class="container-fluid">
    <div class="row text-center alert">
      <div class="col-12">
        <h1 class="display-4">Личный кабинет</h1>
      </div>
      <hr>
    </div>
  </div>
  <div class="container">
    <div class="row info">
      <div class="col-md-4 offset-md-1">
        <div class="review-image d-flex align-items-center justify-content-center flex-column review-image-1" id="ava">
        <style>
          .review-image-1{
            background: #000 url("../img/user/<? echo $_SESSION['logged_user']->foto ?>");
            background-position: center center;
            background-size: 300px 300px;
          }
        </style>
          <a class="change-foto" data-fancybox data-src="#modal" href="javascript:;" onclick="func3()"><img src="../img/user/change.svg" alt="change" class="change-image"></a>
        </div>
      </div>
      <div class="col-md-5 offset-md-2">
        <form method="post float-">
          <div class="form-group">
            <label for="name">Ваше Имя</label>
            <input type="text" class="form-control" name="name" id="name" value="<?php echo $_SESSION['logged_user']->name;?>">
          </div>
          <div class="form-group">
            <label for="text">Ваша фамилия</label>
            <input  type="text" class="form-control" name="second_name" id="second_name" value="<?php echo $_SESSION['logged_user']->second_name; ?>"></input>
          </div>
          <div class="form-group">
            <label for="text">Ваш   </label>
            <input  type="text" class="form-control" name="email" id="email" value="<?php echo $_SESSION['logged_user']->email; ?>"></input>
          </div>
          <button type="submit" name="change" class="change btn btn-dark btn-lg btn-block">Изменить</button>
        </form>
      </div>
    </div>    
  </div>
  <?php $data = $_POST;
    $pw = R::findLast('power');
    $dr = R::findLast('dry');
    $cr = R::findLast('cardio');
    if (isset($data['change'])){
      $_SESSION['logged_user']->name = $data['name'];
      $_SESSION['logged_user']->second_name = $data['second_name'];
      R::store($_SESSION['logged_user']);
      echo("<meta http-equiv='refresh' content='1'>");
    } ?>
  <div class="grid-posts">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Силовые тренировки</h5>
              <p class="card-text">Вы прошли <?php echo $_SESSION['logged_user']->power;?> тренировок из <?php echo $pw->id?></p>
            </div>
          </div>
        </div>   
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Сушка тела</h5>
              <p class="card-text">Вы прошли <?php echo $_SESSION['logged_user']->dry;?> тренировок из <?php echo $dr->id?></p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Кардио</h5>
              <p class="card-text">Вы прошли <?php echo $_SESSION['logged_user']->cardio;?> тренировок из <?php echo $cr->id?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="container padding col-md-4">
        <form action="../includes/logout.php">
          <button type="submit" name="logout" class="logout btn btn-dark btn-lg btn-block">Выйти</button>
        </form>
      </div>
    </div>
  </div>

  <?php else:?>
  <div class="log_reg text-center">
    <h2 class="display-4">Вводите в свой акканут <br> или зарегистрируйтесь <br> на стайте</h2>
  </div>
  <div class="butt text-center alert">
    <hr>
    <div class="btn_log">
      <a href="auth.php" class="btn-lg btn-dark">Вход</a>
    </div>
    <div class="btn_reg">
      <a href="reg.php" class="btn-lg btn-dark" >Зарегистрироваться</a>
    </div>
  </div>
  <?php endif; ?>
  
  <div class="modal" id="modal">
		<form enctype="multipart/form-data" method="post"> 
      <input name="picture" type="file" />
      <input type="submit" value="Загрузить" />
    </form>
	</div>
  
  <?php
 
  $path = '../img/user/';

  if ($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    $_FILES['picture']['name'] = str_replace(substr ($_FILES['picture']['name'], 0, strrpos($_FILES['picture']['name'], '.')),$_SESSION['logged_user']->id,$_FILES['picture']['name']);
    if (!@copy($_FILES['picture']['tmp_name'], $path . $_FILES['picture']['name'])):
      echo 'Что-то пошло не так';
    else:
      $_SESSION['logged_user']->foto= $_FILES['picture']['name'];
      R::store($_SESSION['logged_user']);
    endif;
  }?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>