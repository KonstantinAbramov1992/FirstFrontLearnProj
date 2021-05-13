<?php
  $username = trim(filter_var($_POST['username'], FILTER_SANITIZE_STRING));
  $useremail = trim(filter_var($_POST['useremail'], FILTER_SANITIZE_EMAIL));
  $login = trim(filter_var($_POST['login'], FILTER_SANITIZE_STRING));
  $pass = trim(filter_var($_POST['pass'], FILTER_SANITIZE_STRING));

  require_once '../my_sql_connect.php';

  $sql = ('SELECT `id` FROM `users` WHERE `login` = ?');
  $query = $pdo->prepare($sql);
  $query->execute([$login]);
  $site_user = $query->fetch(PDO::FETCH_OBJ);

  if ($query->rowCount() != 0) {
      echo "пользователь c таким login уже существует";
  } else {
    if (strlen($username) < 3) {
      echo 'Имя хотя бы 3 буквы';
      exit();
    } elseif (strlen($login) < 3) {
      echo 'Login хотя бы 3 символa';
      exit();
    } elseif (strlen($pass) < 8) {
      echo 'Пароль хотя бы 8 символов';
      exit();
    } else {
      $hash = 'hviixjugt3567489eknvx';
      $pass = md5($pass . $hash);

      $sql = ('INSERT INTO `users`(`username`, `email`, `login`, `pass`) VALUES (?, ?, ?, ?)');
      $query = $pdo->prepare($sql);
      $query->execute([$username, $useremail, $login, $pass]);
      echo 'OK';
    }
  }
?>
