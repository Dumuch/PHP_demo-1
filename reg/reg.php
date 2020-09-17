<!-- получаем данные с формы и фильтруем вводимые данные-->
<?php
  $username = trim(filter_var($_POST['username'], FILTER_SANITIZE_STRING));
  $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
  $login = trim(filter_var($_POST['login'], FILTER_SANITIZE_STRING));
  $password = trim(filter_var($_POST['password'], FILTER_SANITIZE_STRING));

  // проверка на длину
  if(strlen($username) <= 3)
    exit();
  else if(strlen($email) <= 3)
    exit();
  else if(strlen($login) <= 3)
    exit();
  else if(strlen($password) <= 3)
    exit();

  // шифруем пароль
  $hash = "reiuljkfikem8478iKJjntg";
  $password = md5($password . $hash);

  //
?>
