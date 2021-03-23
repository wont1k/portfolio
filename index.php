<?php require "includes/db.php";
include ("includes/header.php") ?>

    <!-- Слайдер -->
<div class="carousel slide" data-ride="carousel" id="slides">
  <ul class="carousel-indicators">
    <li data-target="#slides" data-slide-to="0" class="active"></li>
    <li data-target="#slides" data-slide-to="1" class="active"></li>
    <li data-target="#slides" data-slide-to="2" class="active"></li>
  </ul>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/main/slider.jpg">
          <div class="carousel-caption">
            <h1 class="display-2">Хочешь "потренить"?</h1>
            <h4>Тогда ты по адресу</h4>
          </div>
        </div>
          <div class="carousel-item">
            <img src="img/main/slider_2.jpg">
            <div class="carousel-caption">
              <h1 class="display-2">Заходи</h1>
              <h4>Не стесняйся</h4>
          </div>
        </div>
          <div class="carousel-item">
            <img src="img/main/slider_3.jpg">
            <div class="carousel-caption">
              <h1 class="display-2">О спорте</h1>
              <h4>И не только</h4>
            </div>
          </div>
        </div>
    </div>
    

    <!-- Основной блок -->

    <div class="container-fluid">
      <div class="row jumbotron text-center">
        <div class="col-xs-12 col-sm-12 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-10 offset-xl-1 text-center">
          <p class="lead">
            «Триумф не дарует настоящей силы, ее формирует борьба.  <br>
            Борьба с сомнениями, страхами, ленью. <br>
            Борись и не сдавайся и обретешь силу»<br> &#169 Арнольд Шварценеггер.
          </p>
        </div>
      </div>
    </div>

    <!-- Блок с описанием сайта -->

    <div class="container-fluid">
      <div class="row text-center alert">
        <div class="col-12">
          <h1 class="display-4">
            Создай себя сам!
          </h1>
        </div>
        <hr>
        <div class="col-12">
          Благодаря нашему сайту ты познаешь азы здорового образа жизни.
          Ни за что не надо платить. Сайт полностью бесплатный.
          От тебя требуется лишь одно - желание. Помни - нет 
          ничего невозможного...
        </div>
      </div>
    </div>

    <!-- Блок с описанием контента -->

    <div class="container">
      <div class="row text-center foot">
        <div class="col-xs-12 col-sm-6 col-md-4">
          <h3>&#128526;БЛОГ</h3>
          <p>Интересные статьи из мира спорта, 
            а также полезные советы</p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <h3>&#127947;ТРЕНИРОВКИ</h3>
          <p>Список эффективных тренировок в домашних условиях</p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <h3>&#129361;ДИЕТА</h3>
          <p>Всё о правильном питании и не только</p>
        </div>
      </div>
    </div>

    <!-- Подвал сайта -->
    
    <?php include ("includes/footer.php")?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>