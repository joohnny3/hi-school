<?php
require_once "../db.php";

$sql = "update `students` 
     set  
      `en_name`='{$_POST['en_name']}',
      `birthday`='{$_POST['birthday']}',
      `uni_id`='{$_POST['uni_id']}',
      `addr`='{$_POST['addr']}',
      `tel`='{$_POST['tel']}',
      `dept`='{$_POST['dept']}',
      `email`='{$_POST['email']}',
      `guardian`='{$_POST['guardian']}',
      `intro`='{$_POST['intro']}'
       where `school_num`='{$_POST['school_num']}'";

$pdo->exec($sql);

header("location:../index.php?do=student");
