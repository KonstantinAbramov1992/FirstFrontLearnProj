<?php
$name = $_COOKIE['login'];
$mess = trim(filter_var($_POST['mess'], FILTER_SANITIZE_STRING));

require_once '../my_sql_connect.php';

if (strlen($mess) < 1) {
  echo "Пустые сообщения не отправляются";
  exit();
}

$sql = ('INSERT INTO `chat`(`username`, `mess`) VALUES (?, ?)');
$query = $pdo->prepare($sql);
$query->execute([$name, $mess]);
echo 'OK';
?>
