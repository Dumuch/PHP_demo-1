<!-- получаем данные с формы и фильтруем вводимые данные-->
<?php
  $username = filter_var(trim($_POST['username']), FILTER_SANITIZE_STRING);
  $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
  $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
  $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

  // проверка на длину
  if(mb_strlen($username) < 3 || mb_strlen($username) > 90) {
    echo 'Недопустимая длина имени';
    exit();
  } else if(mb_strlen($email) < 2 || mb_strlen($email) > 50) {
    echo 'Недопустимая длина Email';
    exit();
  } else if(mb_strlen($login) < 2 || mb_strlen($login) > 6) {
    echo 'Недопустимая длина логина';
    exit();
  } else if(mb_strlen($pass) < 2 || mb_strlen($pass) > 6) {
    echo 'Недопустимая длина пароля(от 2 до 6 символов)';
    exit();
  }


  // шифруем пароль
  $pass = md5($pass . "werikkn589rikN");

  // подключение к базе данных
  // порядок значений(хост, имя, пароль, база данных)
  $mysqli = new mysqli('localhost', 'root', 'root', 'testing');

  // помещаем данные в таблицу
  $mysqli->query("INSERT INTO `users` (`name`, `email`, `login`, `pass`)
    VALUES('$username', '$email', '$login', '$pass')");

  // закрытие базы данных
  $mysqli->close();

  //перенаправление после отправки формы
  // header('Location: /');

?>
