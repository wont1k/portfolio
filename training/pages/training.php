<?php require "../includes/db.php";
include ("../includes/header.php");
$pw= R::findLast('power');
$dr= R::findLast('dry');
$cr= R::findLast('cardio');?>

    <!-- Блок с описанием сайта -->

    <div class="container-fluid">
      <div class="row text-center alert">
        <div class="col-12">
          <h1 class="display-4">
            Тренировки
          </h1>
        </div>
        <hr>
        <div class="col-12">
          <p>Выберите тип тренировки</p>
        </div>
      </div>
    </div>

    <!-- Блок с описанием контента -->
    <div class="grid-posts">
        <div class="container">
            <div class="row">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="../img/training/power.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Силовые тренировки</h5>
                      <p class="card-text">Чтобы улучшить общее состояние здоровья, а также нарастить мышечную массу</p>
                      <a href="power.php?id=<?php echo $_SESSION['logged_user']->power;?>" class="btn btn-dark">Выбрать</a>
                      <?php if ($_SESSION['logged_user']->privileges==1):?>
                      <a href="redact_power.php?id=<?php echo $pw->id+1?>" class="btn btn-success marg">Добавить тренировку</a>
                      <?php endif;?>
                    </div>
                  </div>
                  <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="../img/training/drying.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Для сушки тела</h5>
                      <p class="card-text">Подойдёт для тех, кто хочет избавиться от подкожного слоя жира</p>
                      <a href="dry.php?id=<?php echo $_SESSION['logged_user']->dry;?>" class="btn btn-dark">Выбрать</a>
                      <?php if ($_SESSION['logged_user']->privileges==1):?>
                      <a href="redact_dry.php?id=<?php echo $dr->id+1?>" class="btn btn-success marg">Добавить тренировку</a>
                      <?php endif;?>
                    </div>
                  </div>
                  <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="../img/training/cardio.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Кардио</h5>
                      <p class="card-text">Не только облегчает и ускоряет процесс похудения, но и повышает выносливость</p>
                      <a href="cardio.php?id=<?php echo $_SESSION['logged_user']->cardio;?>" class="btn btn-dark">Выбрать</a>
                      <?php if ($_SESSION['logged_user']->privileges==1):?>
                      <a href="redact_cardio.php?id=<?php echo $cr->id+1?>" class="btn btn-success marg">Добавить тренировку</a>
                      <?php endif;?>
                    </div>
                  </div>
            </div>
        </div>
    </div>

    <!-- Подвал сайта -->

    <?php include ("../includes/footer.php") ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>