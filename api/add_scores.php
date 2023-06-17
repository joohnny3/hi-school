<?php require_once "../db.php";
dd($_POST);
dd($_SESSION);

$chk = _count('scores', ['school_num' => $_POST['school_num']]);

if ($chk) {
    $sql = "UPDATE `scores` set
    `{$_POST['score_select']}`='{$_POST['score_input']}' where `school_num` = '{$_POST['school_num']}'";
    $pdo->exec($sql);
    header("location:../backend.php");
}else{
    header("location:../backend.php?do=add_scores");    
}
