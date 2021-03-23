<?php require "../includes/db.php";
include ("../includes/header.php") ?>

    <!-- Блок с описанием сайта -->

    <div class="container-fluid">
      <div class="row text-center alert">
        <div class="col-12">
          <h1 class="display-4">
            Диета
          </h1>
        </div>
        <hr>
        <div class="col-12">
          <span>Выберите, для чего Вам нужна диета</span>
        </div>
      </div>
    </div>

    <!-- Блок с описанием контента -->

    <div class="grid-posts">
        <div class="container">
            <div class="row">
              <div class="col-lg-4 col-sm-12">
                <div class="card card-diet" style="width: 25rem;">
                    <img class="card-img-top" src="../img/diet/muscle.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Для набора массы</h5>
                      <p class="card-text">Диеты, которые способствуют росту мышц </p>
                      <a href="mass.php" class="btn btn-dark">Выбрать</a>
                    </div>
                </div>
              </div>
              <div class="col-lg-4 offset-lg-3 col-sm-12"> 
                <div class="card card-diet" style="width: 25rem;">
                    <img class="card-img-top" src="../img/diet/w_loss.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Для похудения</h5>
                      <p class="card-text">Для тех, кто хочет избавиться от жира</p>
                      <a href="gracilis.php" class="btn btn-dark">Выбрать</a>
                    </div>
                </div>
              </div>
            </div>
        </div>
    </div>

    <!-- Подвал сайта -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>