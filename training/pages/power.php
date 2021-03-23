<?php require "../includes/db.php";
include ("../includes/header.php"); 
	
	if (!(isset($_SESSION['logged_user']))) :
		echo "<meta http-equiv=refresh content=0;URL=auth.php?auth=0>";
	else:
    $pw = R::findOne('power', 'id = ?', [(int)$_GET['id']]);
    $last = R::findLast('power');
    if ($pw->id != ''):?>
		<div class="container-fluid">
        <div class="row text-center alert">
            <div class="col-12">
              <h1 class="display-4">Тренировка №<?php echo $pw->id.'<br>';?></h1>
              <hr>
              <div class="col-12">
                <?php $pw->text = preg_replace( "#\r?\n#", "<br />", $pw->text );?> 
                <p><?php echo $pw->text. '<br>';?></p>
              </div>
            </div>
            <div class="col-4 offset-4">
                <form action="power.php?id=<?php echo $pw->id;?>" method="post">
            		  <button type="submit" name="success" class="btn-lg btn-success">Тренировку выполнил</button>
                </form>
            </div>
            <div class="col-4 offset-4 but_red">
              <?php if ($user->privileges == 1): ?> <a href="redact_power.php?id=<?php echo $pw->id?>" class="btn-lg btn-dark">Редактировать запись</a><?php endif;?>
            </div>
            <?php $data = $_POST;
   						 if (isset($data['success'])){
                if ( !(R::findOne('powerList', 'id_user = ? AND id_training = ?', [$user->id, $pw->id]))): 
                  $_SESSION['logged_user']->power =	$_SESSION['logged_user']->power +1;
                  R::store($_SESSION['logged_user']);
                  $pwlist = R::dispense('powerlist');
                  $pwlist-> id_user = (int)$user-> id ;
                  $pwlist-> id_training = (int)$pw-> id ;
                  R::store($pwlist);
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