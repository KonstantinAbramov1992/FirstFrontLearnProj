<?php
  $login = trim(filter_var($_POST['login'], FILTER_SANITIZE_STRING));
  $pass = trim(filter_var($_POST['pass'], FILTER_SANITIZE_STRING));

  $hash = 'hviixjugt3567489eknvx';
  $pass = md5($pass . $hash);

  require_once '../my_sql_connect.php';

  $sql = ('SELECT `id` FROM `users` WHERE `login` LIKE ? AND `pass` LIKE ?');
  $query = $pdo->prepare($sql);
  $query->execute([$login, $pass]);
  $site_user = $query->fetch(PDO::FETCH_OBJ);

  if ($query->rowCount() == 0)
    echo "Пользователя с таким login и паролем не существует";
  else {
    setcookie('login', $login, time() + 3600*24*30, '/');
    echo "OK";
  }
?>
