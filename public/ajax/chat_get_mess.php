<?php
  $all_id = $_POST['all_id'];

  require_once '../my_sql_connect.php';

  $sql = 'SELECT * FROM `chat` ORDER BY `id`';
  $query = $pdo->query($sql);
  $messages = $query->fetchAll(PDO::FETCH_OBJ);

  $messages = json_encode($messages);

  echo $messages;

?>
