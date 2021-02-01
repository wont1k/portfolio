<?php
	require "includes/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Сайт фан-клуба хк ЦСКА</title>

  <!-- Bootstrap Grid -->
  <link rel="stylesheet" type="text/css" href="/media/assets/bootstrap-grid-only/css/grid12.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

  <!-- Custom -->
  <link rel="stylesheet" type="text/css" href="/media/css/style.css">
</head>
<body>

  <div id="wrapper">

    <?php include ("includes/HEADER.php") ?>

    <div id="content" style="background-image: url(media/images/cska-chempiony-legendy.jpg); background-size: cover;">
      <div class="container">
        <div class="row">
          <section class="content__left col-md-8">
            <div class="block">
              <a href="/article.php?all=1">Все обсуждения</a>
              <h3>Новые_обсуждения</h3>
              <div class="block__content">
                <div class="articles articles__horizontal">

                	<?php $articles = mysqli_query($connection, "SELECT * FROM `chat` ORDER BY `id` DESC LIMIT 10");
                		while ( $art = mysqli_fetch_assoc($articles)) {
                			?>
										<article class="article">
                      <div class="article__info">
                      	<?php $art_cat = false;
                      	foreach ($categorie as $cat) {
                      	  	if ( $cat['id'] == $art['categorie_id']){
                      	  		$art_cat = $cat;
                      	  		break; 
                      	  	}       
                         	}                	?>
                      <a href="article.php?id=<?php echo $art['id']?>"><?php echo $art['title']?></a>
                      <div class="article__info__meta">
                      	<?php 
                      		$art_cat = false;
                      		foreach ($categorie as $cat) {
   													if ($cat['id'] == $art['categorie_id']) 
   													{
   														$art_cat = $cat;
   														break;
   													}
                      		}
                      	?>
                        <small>Категория: <a href="/article.php?categorie_id=<?php echo $art_cat['id'] ?>"> <?php echo $art_cat['categorie_chat'] ?></a></small>
                      </div>
                      <div class="article__info__preview"><?php echo mb_substr(strip_tags($art['comment']), 0 , 30, 'utf-8') . ' ...' ?></div>
                    </div>
                  </article>		
                			<?php
                		}
                		?>
                </div>
              </div>
            </div>

            <div class="block">
              <a href="/article.php?categorie_id=4">Все обсуждения</a>
              <h3>Трансферы</h3>
              <div class="block__content">
                <div class="articles articles__horizontal">

                  	<?php $articles = mysqli_query($connection, "SELECT * FROM `chat` WHERE `categorie_id` = 4 ORDER BY `id` DESC LIMIT 10");
                		while ( $art = mysqli_fetch_assoc($articles)) {
                			?>
										<article class="article">
                      <div class="article__info">
                      	<?php $art_cat = false;
                      	foreach ($categorie as $cat) {
                      	  	if ( $cat['id'] == $art['categorie_id']){
                      	  		$art_cat = $cat;
                      	  		break; 
                      	  	}       
                         	}                	?>
                      <a href="article.php?id=<?php echo $art['id']?>"><?php echo $art['title']?></a>
                      <div class="article__info__meta">
                      	<?php 
                      		$art_cat = false;
                      		foreach ($categorie as $cat) {
   													if ($cat['id'] == $art['categorie_id']) 
   													{
   														$art_cat = $cat;
   														break;
   													}
                      		}
                      	?>
                        <small>Категория: <a href="/article.php?categorie_id=<?php echo $art_cat['id'] ?>"> <?php echo $art_cat['categorie_chat'] ?></a></small>
                      </div>
                      <div class="article__info__preview"><?php echo mb_substr(strip_tags($art['comment']), 0 , 30, 'utf-8') . ' ...' ?></div>
                    </div>
                  </article>		
                			<?php
                		}
                		?>

                </div>
              </div>
            </div>

            <div class="block">
              <a href="/article.php?categorie_id=5">Все обсуждения</a>
              <h3>Тренерский штаб</h3>
              <div class="block__content">
                <div class="articles articles__horizontal">

                  <?php $articles = mysqli_query($connection, "SELECT * FROM `chat` WHERE `categorie_id` = 5 ORDER BY `id` DESC LIMIT 10");
                		while ( $art = mysqli_fetch_assoc($articles)) {
                			?>
										<article class="article">
                      <div class="article__info">
                      	<?php $art_cat = false;
                      	foreach ($categorie as $cat) {
                      	  	if ( $cat['id'] == $art['categorie_id']){
                      	  		$art_cat = $cat;
                      	  		break; 
                      	  	}       
                         	}                	?>
                      <a href="article.php?id=<?php echo $art['id']?>"><?php echo $art['title']?></a>
                      <div class="article__info__meta">
                      	<?php 
                      		$art_cat = false;
                      		foreach ($categorie as $cat) {
   													if ($cat['id'] == $art['categorie_id']) 
   													{
   														$art_cat = $cat;
   														break;
   													}
                      		}
                      	?>
                        <small>Категория: <a href="/article.php?categorie_id=<?php echo $art_cat['id'] ?>"> <?php echo $art_cat['categorie_chat'] ?></a></small>
                      </div>
                      <div class="article__info__preview"><?php echo mb_substr(strip_tags($art['comment']), 0 , 30, 'utf-8') . ' ...' ?></div>
                    </div>
                  </article>		
                			<?php
                		}
                		?>
                </div>
              </div>
            </div>
            <?php if($_COOKIE['user'] != ''): ?>
            <div class="block">
              <h3>Добавить обсуждение</h3><br><br>
              	<form action="/includes/add.php" method="post"> 
									<div class="form__group">
										<input type="text"  class="form-control" name="article" id="article" style="width:  200px; height: 30px;" placeholder="Введите название"><br><br>
									</div>
									<div class="form__group">
										<select class="form-control" name="categorie" id="categorie">
  										<option>Травмы</option>
  										<option>Матчи</option>
  										<option>Игроки</option>
  										<option>Трансферы</option>
  										<option>Тренерский штаб</option>
  										<option>Разное</option>
										</select><br><br>
									</div>
									<div class="form__group">
										<input name="text" required="" class="form__control" style="width:  600px; height: 200px; padding: 0 0 175px 0;" placeholder="Текст комментария ..."><br><br>
		            	</div>
		            	<button class="btn btn-success" type="submit">Добавить</button>
								</form>    
            </div>
          <?php endif ?>
          </section>
          <section class="content__right col-md-4">
            <?php include 'includes/sitebar.php' ?>
          </section>
        </div>
      </div>
    </div>

    <?php include 'includes/footer.php'?>

  </div>

</body>
</html>