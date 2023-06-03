<?php require_once "../db.php";


print "<pre>";
print_r($_POST);
print "</pre>";
print "<pre>";
print_r($_SESSION);
print "</pre>";
//可以選擇使用編碼來為密碼或資料加密
/* $pw=md5($_POST['pw']);
echo $pw; */
$sql = "SELECT COUNT(*) FROM `scores` WHERE `school_num` = '{$_POST['school_num']}'";
$repeat = $pdo->query($sql)->fetchColumn();

print_r($repeat);

if ($repeat) {
    $sql = "UPDATE `scores` set
    `scores`='{$_POST['scores']}' where `school_num` = '{$_POST['school_num']}'";
   $pdo->exec($sql);
   header("location:../backend.php");
}

