<!DOCTYPE html>
<html lang="ru" dir="ltr">
<head>
  <script src="JS/jquery.js" type="text/javascript"></script>
  <script src="JS/jquery.maskedinput.js" type="text/javascript"></script>
  <?php
    $website_title = 'PHP блог';
    require 'blocks/head.php';
  ?>
</head>
<body>
  <?php require 'blocks/header.php';?>


  <main class="container mt-5">
    <div class="row">
      <div class="col-md-8 mb-3">

        <h1>Отправка данных на почту</h1>
        <!-- action заполняем обработчик данных -->
        <form class="" action="mail.php" method="POST">
          <label for="username">Ваше имя</label>
          <input type="text" name="username" id="username" required pattern="[А-Я,а-я,A-Z,a-z]{1-15}">

          <label for="email">Email</label>
          <input type="text" name="email" id="email" required pattern="[а-я,a-z,0-9]1-10[@]1[а-я,a-z,0-9]1-10[.]1C2-3">

          <label for="phone">Телефон</label>
          <input type="phone" name="phone" id="phone" required pattern="[0-9]{6,15}">
          <script>
//Код jQuery, установливающий маску для ввода телефона элементу input
//1. После загрузки страницы,  когда все элементы будут доступны выполнить...
$(function(){
  //2. Получить элемент, к которому необходимо добавить маску
  $("#phone").mask("8(999) 999-9999");
});
</script>


<!--HTML элемент, который будет иметь заполнитель дд.мм.гггг -->
<input  id="date" type="text">
<!--HTML элемент, который будет иметь в качестве заполнителя пробел -->
<input  id="index" type="text">
<script>
$(function() {
  //задание заполнителя с помощью параметра placeholder
  $("#date").mask("99.99.9999", {placeholder: "дд.мм.гггг" });
  //задание заполнителя с помощью параметра placeholder
  $("#index").mask("999999", {placeholder: " " });
});
</script>


          <!-- <label for="pass">Пароль</label>
          <input type="password" name="pass" id="pass"> -->

          <button type="submit" class="btn btn-success mt-5">
            Отправить заявку
          </button>
        </form>

      </div>

    <?php require 'blocks/aside.php';?>

    </div>
  </main>


  <?php require 'blocks/footer.php';?>

</body>
</html>
