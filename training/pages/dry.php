<?php require "../includes/db.php";
include ("../includes/header.php");
		
	if (!(isset($_SESSION['logged_user']))) :
		echo "<meta http-equiv=refresh content=0;URL=auth.php?auth=0>";
	else:
    $dr = R::findOne('dry', 'id = ?', [(int)$_GET['id']]);
    $last = R::findLast('dry');
    if ($dr->id != ''):?>
		<div class="container-fluid">
        <div class="row text-center alert">
            <div class="col-12">
              <h1 class="display-4">Тренировка №<?php echo $dr->id.'<br>';?></h1>
              <hr>
              <div class="col-12">
                <?php $dr->text = preg_replace( "#\r?\n#", "<br />", $dr->text );?> 
                <p><?php echo $dr->text. '<br>';?></p>
              </div>
            </div>
            <div class="col-4 offset-4">
                <form action="dry.php?id=<?php echo $dr->id;?>" method="post">
            		  <button type="submit" name="success" class="btn-lg btn-success">Тренировку выполнил</button>
                </form>
            </div>
            <div class="col-4 offset-4 but_red">
              <?php if ($user->privileges == 1): ?> <a href="redact_dry.php?id=<?php echo $dr->id?>" class="btn-lg btn-dark">Редактировать запись</a><?php endif;?>
            </div>
            <?php $data = $_POST;
   						 if (isset($data['success'])){
                if ( !(R::findOne('dryList', 'id_user = ? AND id_training = ?', [$user->id, $dr->id]))): 
                  $_SESSION['logged_user']->dry =	$_SESSION['logged_user']->dry +1;
                  R::store($_SESSION['logged_user']);
                  $drlist = R::dispense('drylist');
                  $drlist-> id_user = (int)$user-> id ;
                  $drlist-> id_training = (int)$dr-> id ;
                  R::store($drlist);
                endif;
   					}?>
        </div>
      </div>
      <?php else :?>
      <div class="container-fluid">
        <div class="row text-center alert">
            <div class="col-12" style="color: green">
              <h1 class="display-4">Вы успешно прошли все тренировки</h1>
            </div>
        </div>
      </div>
  <?php endif;
	endif; ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>