<?php
  $title = trim(filter_var($_POST['title'], FILTER_SANITIZE_STRING));
  $intro = trim(filter_var($_POST['intro'], FILTER_SANITIZE_STRING));
  $text = trim(filter_var($_POST['text'], FILTER_SANITIZE_STRING));

  require_once '../my_sql_connect.php';

  $sql = ('SELECT `id` FROM `users` WHERE `login` = ?');
  $query = $pdo->prepare($sql);
  $query->execute([$login]);
  $site_user = $query->fetch(PDO::FETCH_OBJ);

  if ($query->rowCount() != 0) {
      echo "пользователь c таким login уже существует";
  } else {
    if (strlen($title) < 3) {
      echo 'Заголовок хотя бы 3 буквы';
      exit();
    } elseif (strlen($intro) < 3) {
      echo 'Intro хотя бы 3 символa';
      exit();
    } elseif (strlen($text) < 8) {
      echo 'Текст хотя бы 8 символов';
      exit();
    } else {

      $sql = ('INSERT INTO `articles`(`title`, `intro`, `text`, `date`, `author`) VALUES (?, ?, ?, ?, ?)');
      $query = $pdo->prepare($sql);
      $query->execute([$title, $intro, $text, time(), $_COOKIE['login']]);
      echo 'OK';
    }
  }
?>
