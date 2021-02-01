<?php require "../includes/db.php";
include ("../includes/header.php");

    if ($_GET['id'] != ''): ?>
      <div class="container-fluid">
        <div class="row text-center alert">
          <?php $bl = R::findOne('blog', 'id = ?', [$_GET['id']]);?>
            <div class="col-12">
              <h1 class="display-4"><?php echo $bl->title.'<br>';?></h1>
              <hr>
              <div class="col-12">
                <?php $bl->text = preg_replace( "#\r?\n#", "<br />", $bl->text );?> 
                <p><?php echo $bl->text. '<br>';?></p>
              </div>
            </div>
            <div class="col-4 offset-4">
              <?php if ($user->privileges == 1): ?> <a href="redact_blog.php?id=<?php echo $bl->id?>" class="btn-lg btn-dark">Редактировать запись</a><?php endif;?>
            </div>
        </div>
      </div>
      <?php          
    else:
    ?>
    <div class="container-fluid">
      <div class="row text-center alert">
        <div class="col-12">
          <h1 class="display-4">
            Блог
          </h1>
        </div>
        <hr>
        <div class="col-12">
          Интересные и полезные статьи, лайфхаки и
          многое другое
        </div>
      </div>
    </div>
    <!-- Блок с описанием контента -->
    <div class="grid-posts">
        <div class="container">
            <div class="row">
              <?php $blogs = R::findAll('blog');
                    foreach ($blogs as $blog){?>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $blog->title.'<br>';?></h5>
                      <p class="card-text"><?php echo mb_substr(strip_tags($blog->text), 0 , 40, 'utf-8').  '... <br>'; ?></p>
                      <a href="blog.php?id=<?php echo $blog->id?>" class="btn btn-dark">Посмотреть подробнее</a>
                        <?php if ($user->privileges == 1): ?> <a href="redact_blog.php?id=<?php echo $blog->id ?>" class="float-right"><img src="../img/icon/changer.svg" alt="редактировать"></a><?php endif;?>
                    </div>
                </div>
              <?php } 
              $last = R::findLast('blog');
              if ($user->privileges == 1):?>
                <div class="card" style="width: 18rem;">
                    <div class="card-body text-center">
                     <a class="add" href="redact_blog.php?id=<?php echo $last->id+1;?>"><img src="../img/icon/plus.png" alt="добавить" width="100px" style="margin-top: 45px"></a>
                    </div>
                </div>
                <?php endif;?>
            </div>
        </div>
    </div>
    <!-- Подвал сайта -->
    <?php include ("../includes/footer.php"); endif;?>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>