<?php require_once "../db.php";

$repeat = _count('permissions', ['user' => $_POST['user']]);

if ($repeat) {
    header("location:../index.php?do=reg&repeat=1");
} elseif (
    $_POST['role'] == "teacher" && !empty($_POST) 
) {
    $sql = "INSERT into `permissions` (`name`,`uni_id`,`user`,`password`,`role`)
     values('{$_POST['name']}',
           '{$_POST['uni_id']}',
           '{$_POST['user']}',
           '{$_POST['password']}',
           '{$_POST['role']}')";
    $pdo->exec($sql);
    header("location:../index.php?do=login");
} elseif ($_POST['role'] == "student" && !empty($_POST) && count(array_filter($_POST, 'strlen')) == count($_POST)) {
    $sql_pre = "INSERT into `permissions` (`name`,`uni_id`,`user`,`password`,`role`)
     values('{$_POST['name']}',
           '{$_POST['uni_id']}',
           '{$_POST['user']}',
           '{$_POST['password']}',
           '{$_POST['role']}')";
    $sql_students = "INSERT into `students` (`school_num`,`name`,`en_name`,
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
    $sql_scores = "INSERT into `scores` (`school_num`,`dept`)
    values('{$_POST['school_num']}',
    '{$_POST['dept']}')";
    $sql_images = "INSERT into `images` (`school_num`)
    values('{$_POST['school_num']}')";
    $pdo->exec($sql_pre);
    $pdo->exec($sql_students);
    $pdo->exec($sql_scores);
    $pdo->exec($sql_images);
    header("location:../index.php?do=login");
} else {
    header("location:../index.php?do=reg&error=1");
}
