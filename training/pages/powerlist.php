<?php require "../includes/db.php";
include ("../includes/header.php")?>

    <!-- Блок с описанием сайта -->
    <!-- Блок с описанием сайта -->

    <div class="container-fluid">
      <div class="row text-center alert">
        <div class="col-12">
          <h1 class="display-4">
            Силовые тренировки
          </h1>
        </div>
        <hr>
        <div class="col-12">
          <p>Выберите тренировку</p>
        </div>
      </div>
    </div>

    <!-- Блок с описанием контента -->
    <div class="grid-posts">
      <div class="container">
        <div class="row">
          <?php $powers = R::findAll('power');
          foreach ($powers as $power){?>
          <div class="col-lg-4 col-md-6 col-sm-12"> 
            <?php  if ( R::findOne('powerList', 'id_user = ? AND id_training = ?', [$user->id, $power->id])):?> 
            <div class="card card-complete card-training" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title"><?php echo $power->title.'<br>';?></h5>
                <div class="card-down">
                  <p class="card-text">Тренировка уже пройдена, но вы можете выполнить её ещё раз</p>
                  <a href="power.php?id=<?php echo $power->id?>" class="btn btn-dark">Повторить</a>
                  <?php if ($user->privileges == 1): ?> <a href="redact_blog.php?id=<?php echo $power->id ?>" class="float-right"><img class="redact" src="../img/icon/changer.svg" alt="редактировать"></a><?php endif;?>
                </div>
              </div>
            </div>  <?php else:?>
            <div class="card card-training" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title"><?php echo $power->title.'<br>';?></h5>
                <p class="card-text"><?php echo mb_substr(strip_tags($power->text), 0 , 40, 'utf-8').  '... <br>'; ?></p>
                <div class="card-down">
                  <a href="power.php?id=<?php echo $power->id?>" class="btn btn-dark">Посмотреть подробнее</a>
                  <?php if ($user->privileges == 1): ?> <a href="redact_blog.php?id=<?php echo $power->id ?>" class="float-right"><img class="redact" src="../img/icon/changer.svg" alt="редактировать"></a><?php endif;?>
                </div>
              </div>
            </div>    
            <?php endif;?>
          </div>
          <?php } 
          $last = R::findLast('blog');
          if ($user->privileges == 1):?>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card card-training" style="width: 18rem;">
              <div class="card-body text-center">
                <a class="add" href="redact_power.php?id=<?php echo $last->id+1;?>"><img src="../img/icon/plus.png" alt="добавить" width="100px" style="margin-top: 45px"></a>
              </div>
            </div>
          </div>   
          <?php endif;?>  
        </div>
      </div>
    </div>
    <!-- Подвал сайта -->
    <?php include ("../includes/footer.php");?>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>