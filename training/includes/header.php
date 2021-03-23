<?php $log = $_SESSION['logged_user']->login;
$user = R::findOne('users', 'login = ?', [$log]);?>
<!doctype html>
<html lang="ru">
  <head>
    <title>Лучший спортивный сайт</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css"/>  
    <link rel="stylesheet" href="/css/styles.css">
  </head>
<body>
    <!-- Шапка сайта -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
          <a class="navbar-brand" href="/"><img src="/img/main/logo.png"></a>
          <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
              aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
          <div class="collapse navbar-collapse" id="collapsibleNavId">
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item<?php if ($_SERVER ['PHP_SELF'] == '/index.php') 
                            {
                              ?>active<?php
                            }?>">
                      <a class="nav-link" href="/index.php">Главная</a>
                  </li>
                  <li class="nav-item<?php if ($_SERVER ['PHP_SELF'] == '/pages/blog.php') 
                            {
                              ?>active<?php
                            }?>">
                      <a class="nav-link" href="/pages/blog.php">Блог</a>
                  </li>
                  <li class="nav-item<?php if ($_SERVER ['PHP_SELF'] == '/pages/training.php') 
                            {
                              ?>active<?php
                            }?>">
                    <a class="nav-link" href="/pages/training.php">Тренировки</a>
                </li>
                <li class="nav-item<?php if ($_SERVER ['PHP_SELF'] == '/pages/diet.php') 
                            {
                              ?>active<?php
                            }?>">
                    <a class="nav-link" href="/pages/diet.php">Диета</a>
                </li>
                <li class="nav-item<?php if ($_SERVER ['PHP_SELF'] == '/pages/calc.php') 
                            {
                              ?>active<?php
                            }?>">
                    <a class="nav-link" href="/pages/calc.php">Калькулятор калорий</a>
                </li>
                <li class="nav-item<?php if ($_SERVER ['PHP_SELF'] == '/pages/login.php') 
                            {
                              ?>active<?php
                            }?>">
                    <a class="nav-link" href="/pages/login.php">Личный кабинет<?php if ( isset($_SESSION['logged_user'])) :
                    ?>:<span class="login"><?php echo " " . $_SESSION['logged_user'] ->login;  endif;?></span></a>
                </li>
              </ul>
          </div>
    </nav>
