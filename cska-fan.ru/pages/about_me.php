<?php
  require "../includes/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo $config['title'] ?></title>

  <!-- Bootstrap Grid -->
  <link rel="stylesheet" type="text/css" href="/media/assets/bootstrap-grid-only/css/grid12.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

  <!-- Custom -->
  <link rel="stylesheet" type="text/css" href="/media/css/style.css">
</head>
<body>

  <div id="wrapper">

    <?php include '../includes/HEADER.php'?>

    <div id="content" style="background-image: url(../media/images/cska-chempiony-legendy.jpg)">
      <div class="container">
        <div class="row">
          <section class="content__left col-md-12">
            <div class="block">
              <h3>Обо мне</h3>
              <div class="block__content">

                <div class="full-text">
<img src="../media/images/about_me.jpg" width= "450px" height="400px">
<p>Студент МИРЭА. Учусь на направлении инфомационные системы и технологии</p>

<h2>Это мой курсовой проект</h2>
<p> Тут я создал сайт при помощи языка программирования PHP<p>
<p>На сайте для всех авторизованных пользователей предоставлеана возможность участвовать в обсуждениях тех или иных событий связанных с хоккейным клубом ЦСКА </p>

<p>Пользователи так же сами могут начинать обсуждения</p>
                </div>
              </div>
            

          </section>
        </div>
      </div>
    </div>

    <?php include '../includes/footer.php'?>

  </div>

</body>
</html>