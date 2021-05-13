<?php
$id = $_POST['id'];

require_once '../my_sql_connect.php';

$sql = ('DELETE FROM `users` WHERE `id` = ?');
$query = $pdo->prepare($sql);
$query->execute([$id]);

echo $id;
?>
