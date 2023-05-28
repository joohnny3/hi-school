<?php require_once "../db.php";

//可以選擇使用編碼來為密碼或資料加密
/* $pw=md5($_POST['pw']);
echo $pw; */
$sql = "SELECT COUNT(*) FROM `permissions` WHERE `user` = '{$_POST['user']}'";
$repeat = $pdo->query($sql)->fetchColumn();

print_r($repeat);

if ($repeat) {
    header("location:../index.php?do=reg&repeat=1");
}elseif (
    $_POST['role'] == "teacher" && !empty($_POST) &&
    count(array_filter($_POST, 'strlen')) == count($_POST)
)
//  確認post每個值有都有輸入(strlen至少大於0才會回傳)
{
    $sql = "INSERT into `permissions` (`name`,`uni_id`,`user`,`password`,`role`)
     values('{$_POST['name']}',
           '{$_POST['uni_id']}',
           '{$_POST['user']}',
           '{$_POST['password']}',
           '{$_POST['role']}')";
    $pdo->exec($sql);
    header("location:../index.php?do=login");
} elseif ($_POST['role'] == "student" && !empty($_POST) && count(array_filter($_POST, 'strlen')) == count($_POST)) {
    $sql = "INSERT into `permissions` (`name`,`uni_id`,`user`,`password`,`role`)
     values('{$_POST['name']}',
           '{$_POST['uni_id']}',
           '{$_POST['user']}',
           '{$_POST['password']}',
           '{$_POST['role']}')";
    $sql2 = "INSERT into `students` (`school_num`,`name`,`en_name`,
    `birthday`,`uni_id`,`addr`,`tel`,`email`,`dept`,`guardian`) values(
        '{$_POST['school_num']}',
        '{$_POST['name']}',
        '{$_POST['en_name']}',
        '{$_POST['birthday']}',
        '{$_POST['uni_id']}',
        '{$_POST['addr']}',
        '{$_POST['tel']}',
        '{$_POST['email']}',
        '{$_POST['dept']}',
        '{$_POST['guardian']}')";

    $pdo->exec($sql);
    $pdo->exec($sql2);
    header("location:../index.php?do=login");
} else {
    header("location:../index.php?do=reg&error=1");
}
