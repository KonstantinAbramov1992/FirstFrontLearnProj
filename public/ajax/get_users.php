<?php
  require_once '../my_sql_connect.php';

  $sql = ('SELECT `username`, `login`, `id` FROM `users`');
  $query = $pdo->query($sql);
  $site_users = $query->fetchAll(PDO::FETCH_OBJ);

  echo json_encode($site_users);
?>
