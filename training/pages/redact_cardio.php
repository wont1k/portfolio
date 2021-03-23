<?php require "../includes/db.php";
include ("../includes/header.php");
$cr = R::findOne('cardio', 'id = ?', [$_GET['id']]);?>
	<div class="container padding col-md-6">
	  <form method="post">
	    <div class="form-group">
	      <label for="name">Заголовок</label>
	      <input type="text" class="form-control" name="title" id="title" value="<?php echo $bl->title;?>">
	    </div>
			<div class="form-group">
	      <label for="text">Текст тренировки</label>
	      <textarea type="text" class="form-control" rows="8" name="text" id="text"><?php echo $cr->text ?></textarea>
	     </div>
	    <button type="submit" name="change" class="btn btn-dark btn-lg btn-block"><?php $last = R::findLast('cardio');
    	if ($_GET['id'] > $last->id):?>Добавить<?php else:?>Изменить<?php endif;?></button>
	  </form>
	</div>
	<?php $data = $_POST;
    if (isset($data['change'])){
    	if ($_GET['id'] > $last->id){
				$cardio = R::dispense('cardio');
  			$cardio-> text	= $data['text'];
  			R::store($cardio);
  			echo("<meta http-equiv='refresh' content='1'>");
			}else { 
    	$cr->text = $data['text'];
    	R::store($cr);
    	echo("<meta http-equiv='refresh' content='1'>");
    	}
    }?>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 	</body>
</html>