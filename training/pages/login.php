<?php require "../includes/db.php";
include ("../includes/header.php");

     if ( isset($_SESSION['logged_user'])) :?>

    <div class="container-fluid">
      <div class="row text-center alert">
        <div class="col-12">
          <h1 class="display-4">
            Личный кабинет
          </h1>
        </div>
        <hr>
      </div>
    </div>
    <div class="container padding col-md-6">
    <form method="post">
      <div class="form-group">
        <label for="name">Ваше Имя</label>
        <input type="text" class="form-control" name="name" id="name" value="<?php echo $_SESSION['logged_user']->name;?>">
      </div>
      <div class="form-group">
        <label for="text">Ваша фамилия</label>
        <input  type="text" class="form-control" name="second_name" id="second_name" value="<?php echo $_SESSION['logged_user']->second_name; ?>"></input>
      </div>
      <button type="submit" name="change" class="btn btn-dark btn-lg btn-block">Изменить</button>
    </form>    
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
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">Силовые тренировки</h5>
                      <p class="card-text">Вы прошли <?php echo $_SESSION['logged_user']->power;?> тренировок из <?php echo $pw->id?></p>
                      <a class="btn btn-dark btn-lg btn-block" href="power.php?id=<?php echo $_SESSION['logged_user']->power?>">Продолжить тренировку</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">Сушка тела</h5>
                      <p class="card-text">Вы прошли <?php echo $_SESSION['logged_user']->dry;?> тренировок из <?php echo $dr->id?></p>
                      <a class="btn btn-dark btn-lg btn-block" href="cardio.php?id=<?php echo $_SESSION['logged_user']->dry?>">Продолжить тренировку</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">Кардио</h5>
                      <p class="card-text">Вы прошли <?php echo $_SESSION['logged_user']->cardio;?> тренировок из <?php echo $cr->id?></p>
                      <a class="btn btn-dark btn-lg btn-block" href="cardio.php?id=<?php echo $_SESSION['logged_user']->cardio?>">Продолжить тренировку</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container padding col-md-4">
          <form action="../includes/logout.php">
            <button type="submit" name="logout" class="btn btn-dark btn-lg btn-block">Выйти</button>
          </form>
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
  <?php endif;
  include ("../includes/footer.php"); ?>
    

    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>