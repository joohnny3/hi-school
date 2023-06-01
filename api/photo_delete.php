<?php require_once "../db.php";

$sql="UPDATE `images` set
`img`='',`story`='',`type`='' where `school_num`='{$_SESSION['school_num']}'";

$img=$pdo->query("select `img` from `images` where `school_num`='{$_SESSION['school_num']}'")->fetch(PDO::FETCH_ASSOC);


unlink("../image/".$img['img']);

$pdo->exec($sql);

// header("location:../upload.php");