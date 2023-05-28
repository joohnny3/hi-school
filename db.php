<?php

$dsn="mysql:host=127.0.0.1;charset=utf8;dbname=school";

$pdo=new PDO($dsn, 'root', '');

date_default_timezone_set("Asia/Taipei");

session_start();

?>