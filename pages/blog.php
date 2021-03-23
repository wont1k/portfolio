<?php require "../includes/db.php";
include ("../includes/header.php");?>
<script type="text/javascript" src="../js/sort.js"></script>

    <?php if ($_GET['id'] != ''): ?>
      <div class="container">
        <div class="row text-center alert">
          <?php $bl = R::findOne('blog', 'id = ?', [$_GET['id']]);
          $bl->views++;
          R::store($bl); ?>
            <div class="col-12">
              <h1 class="display-4"><?php echo $bl->title.'<br>';?></h1>
              <hr>
              <div class="col-12">
                <?php $bl->text = preg_replace( "#\r?\n#", "<br />", $bl->text );?> 
                <p><?php echo $bl->text. '<br>';?></p>
              </div>
            </div>
            <hr>
            <div class="col-8 offset-2">
              <?php if ($user->privileges == 1): ?> <a href="redact_blog.php?id=<?php echo $bl->id?>" class="btn-lg btn-dark">Редактировать запись</a><?php endif;?>
              <a href="blog.php" class="btn btn-dark">Вернуться назад</a>
              <span class="views"><img class="eye" src="../img/view/eye.svg" alt="Просмотры"><? echo ': '. $bl->views; ?></span>
              <span>12.02.2020</span>
            </div>
        </div>
      </div>
      <?php          
    else:
    ?>
    <div class="container">
      <div class="row text-center alert">
        <div class="col-12">
          <h1 class="display-4">
            Блог
          </h1>
        </div>
        <hr>
        <div class="col-12">
          <h5>Интересные и полезные статьи, лайфхаки и
          многое другое</h5>
        </div>
        <div class="col-12 options">
          <span class="sort">Сортировать по: </span>
          <a class="sort-item" id="price" data-value="price" href="#" onclick="func1()">
            <span>Просмотрам</span> <i id="icon-up-price"></i>
          </a>
          <a class="sort-item" id="date" data-value="date" href="#" onclick="func2()">
            <span>Дате</span> <i id="icon-up-date"></i>
          </a>
        </div>
      </div>
    </div>
    <!-- Блок с описанием контента -->
    <div class="grid-posts">
        <div class="container">
            <div class="row">
              <?php if (isset($_GET['view'])):
                if($_GET['view'] !=1): 
                $blogs = R::findAll('blog', 'ORDER BY views DESC');
                else: $blogs = R::findAll('blog', 'ORDER BY views');
              endif;
              else:if($_GET['date'] !=1): $blogs = R::findAll('blog', 'ORDER BY date DESC');
              else: $blogs = R::findAll('blog', 'ORDER BY date');
              endif;
              endif;
              foreach ($blogs as $blog){?>
              <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card card-blog" style="width: 19rem;">
                    <div class="card-body">
                      <?php if ($user->privileges == 1): ?> <a href="redact_blog.php?id=<?php echo $blog->id ?>" class="float-right"><img  class ="link-redact" src="../img/icon/changer.svg" alt="редактировать"></a><?php endif;?>
                      <h5 class="card-title"><?php echo $blog->title.'<br>';?></h5>
                      <p class="card-text"><?php echo mb_substr(strip_tags($blog->text), 0 , 40, 'utf-8').  '... <br>'; ?></p>
                      <div class="card-down blog-down">
                        <a href="blog.php?id=<?php echo $blog->id?>" class="btn btn-dark blog-info">Посмотреть подробнее</a>
                          <span class="view"><img class="eye" src="../img/view/eye.svg" alt="Просмотры"><? echo ': '. $blog->views; ?></span>
                          <span class="data"><? echo date_format(new DateTime($blog->date), 'd.m.Y'); ?></span>
                      </div>
                    </div>
                </div>
              </div>
              <?php } 
              $last = R::findLast('blog');
              if ($user->privileges == 1):?>
              <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card" style="width: 19rem;">
                    <div class="card-body text-center">
                     <a class="add" href="redact_blog.php?id=<?php echo $last->id+1;?>"><img class="img_add"src="../img/icon/plus.png" alt="добавить" width="100px"></a>
                    </div>
                </div>
                <?php endif;?>
              </div>
            </div>
        </div>
    </div>
    <!-- Подвал сайта -->
    <?php endif;?>
    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>