<?php
  $user = 'root';
  $password = 'root';
  $db = 'site_proger';
  $host = 'localhost';

  $dsn = 'mysql:host='.$host.';dbname='.$db;
  $pdo = new PDO($dsn, $user, $password);
