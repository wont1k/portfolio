<?php require "../includes/db.php";
include ("../includes/header.php") ?>
<script type="text/javascript" src="../js/calc.js"></script>
    
    <!-- Блок с описанием контента -->

    <div class="container col-md-4 calc">
        <form>
            <div class="form-group">
                <label for="formGroupExampleInput">Возраст</label>
                <input type="text" class="form-control" id="age" placeholder="Ваш Возраст">
                <small id="emailHelpId" class="form-text text-muted">Нужно ввести число от 13 до 80</small>
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Рост</label>
                <input type="text" class="form-control" id="height" placeholder="Ваш рост">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Вес</label>
                <input type="text" class="form-control" id="weight" placeholder="Ваш вес">
            </div>
            <div class="form-check form-check-inline">
                <input id="male" type="radio" name="rad" ><label class="form-check-label" for="inlineRadio1">Мужчина</label>
                <input id="female" type="radio" name="rad" ><label class="form-check-label" for="inlineRadio1">Женщина</label>
           </div>
            <div class="col-auto my-2">
                <label class="mr-sm-2" for="inlineFormCustomSelect">Активность</label>
                <select class="custom-select mr-sm-2" id="active">
                  <option selected value="1.2">Нет физической нагрузки</option>
                  <option value="1.375">Спорт 3 раза в неделю</option>
                  <option value="1.4625">Спорт 5 раз в неделю</option>
                  <option value="1.550">Интенсивные тренировки ±5 раз в неделю</option>
                  <option value="1.6375">Занятия фитнесом каждый день</option>
                  <option value="1.725">Каждый день интенсивно или по два раза в день</option>                  
                  <option value="1.9">Физический труд и частые занятия спортом (5-7 раз в неделю)</option>
                </select>
            </div>
            <button onclick="res()" type="button" class="btn btn-dark col-auto my-2" action="#">Расчёт</button>
        </form>
        <form>
            <div class="container my-2">
                <div class="row">
                  <div class="col-7">
                    <p id="age_er" style="color: red"></p>
                  </div>
                  <div class="col-7">
                    <span id="day">Суточная норма:</span>
                  </div>
                  <div class="col">
                    <p id="totalCals"></p>
                  </div>
                </div>
            </div>
            <div class="container my-2">
                <div class="row">
                  <div class="col-7">
                    <span id="for_loss">Для похудения:</span>
                  </div>
                  <div class="col">
                    <p id="weight_loss"></p>
                  </div>
                </div>
            </div>
        </form>
    </div>

    <!-- Подвал сайта -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
