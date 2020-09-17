<!DOCTYPE html>
<html lang="ru" dir="ltr">
<head>
  <?php
    $website_title = 'Регистрация на сайте';
    require 'blocks/head.php';
  ?>
</head>
<body>
  <?php require 'blocks/header.php';?>


  <main class="container mt-5">
    <div class="row">
      <div class="col-md-8 mb-3">
        <h4>Форма регистрации</h4>
        <!-- обработка данных на другой странице -->
        <form class="" action="reg/reg.php" method="post">
          <label for="username">Ваше имя</label>
          <input type="text" name="username" id="username" class="form-control">

          <label for="Email">Email</label>
          <input type="text" name="Email" id="Email" class="form-control">

          <label for="login">Логин</label>
          <input type="text" name="login" id="login" class="form-control">

          <label for="password">Пароль</label>
          <input type="password" name="password" id="password" class="form-control">

          <button type="submit" class="btn btn-success mt-5">
            Зарегистрироваться
          </button>
        </form>
      </div>

    <?php require 'blocks/aside.php';?>

    </div>
  </main>


  <?php require 'blocks/footer.php';?>

</body>
</html>
