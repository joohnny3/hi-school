<?php require_once "../db.php";

$chk = _count('scores', ['school_num' => $_POST['school_num']]);

if ($chk) {
    $sql = "UPDATE `scores` set
    `scores`='{$_POST['scores']}' where `school_num` = '{$_POST['school_num']}'";
    $pdo->exec($sql);
    header("location:../backend.php");
}else{
    header("location:../backend.php?do=add_scores");    
}
