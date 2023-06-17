<?php
require_once "../db.php";

$sql = "update `students` 
     set  
      `en_name`='{$_POST['en_name']}',
      `birthday`='{$_POST['birthday']}',
      `addr`='{$_POST['addr']}',
      `tel`='{$_POST['tel']}',
      `email`='{$_POST['email']}',
      `intro`='{$_POST['intro']}'
       where `school_num`='{$_SESSION['school_num']}'";

$pdo->exec($sql);

header("location:../index.php?do=student");
