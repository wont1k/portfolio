<header id="header" style="background-image: url(/media/images/header.png); height: 240px; background-size: cover; ">
      <div class="header__top">
        <div class="container">
          <div class="header__top__logo" >
            <h1 style="color:white;"><?php echo $config['title'] ?></h1>
          </div>
          <nav class="header__top__menu">
            <ul>
              <li><a href="/" style="color:white;">Главная</a></li>
              <li><a href="/pages/about_me.php" style="color:white;">Обо мне</a></li>
              <li><a href="http://vk.com/id152000135" target="_blank" style="color:white;">Я Вконтакте</a></li>
                <?php if($_COOKIE['user'] == '') : ?>
                <li><a href="../pages/singin.php" style="color:white;">Войти</a></li>
                <li><a href="../pages/registration.php" style="color:white;">Регистрация</a></li> 
                <?php else : ?>
                <li><h4 style="color:white;"> Вы авторизованны как: <a href="#" style="color:white;"><?=$_COOKIE['user'] ?></a></h4> <br><br> <a href="../includes/exit.php" style="color:white;">Выйти</a></li> 
                <?php endif; ?>
            </ul>
          </nav>
        </div>
      </div>
       <?php $categorie_q = mysqli_query($connection, "SELECT * FROM `categorie`");
       $categorie = array();
       while ( $cat = mysqli_fetch_assoc($categorie_q)) {
          $categorie[] = $cat;
        }  ?>
      <div class="header__bottom">
        <div class="container">
          <nav>

            <ul>
              <li style="color: white; font-size: 20px; text-decoration: none;"> Категории обсуждений :</li>
              <?php
                    foreach ($categorie as $cat)
                    {
                      ?>
                         <li><a href="/article.php?categorie_id=<?php echo $cat['id'] ?>"><?php echo $cat['categorie_chat'] ?></a></li>
                      <?php
                    }
                      ?>
            </ul>
          </nav>
        </div>
      </div>
    </header>