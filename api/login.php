<?php require_once "../db.php";

$sql = "SELECT count(*) from `permissions` where `user`='{$_POST['user']}' && `password`='{$_POST['password']}'";

$chk = $pdo->query($sql)->fetchColumn();


if ($chk) {

    $sql_value = "SELECT `role` from `permissions`,`students` where `user`='{$_POST['user']}' && `password`='{$_POST['password']}'";

   
    $value = $pdo->query($sql_value)->fetch(PDO::FETCH_ASSOC);

    $_SESSION['login'] = $_POST['user'];
    $_SESSION['role'] = $value['role'];


    if ($value['role'] == "teacher") {
        header("location:../index.php?do=backend");

    } elseif ($value['role'] == "student") {
        $sql_num = "SELECT `school_num` from `students` where `school_num`='{$_POST['user']}'";
        $school_num = $pdo->query($sql_num)->fetch(PDO::FETCH_ASSOC);
        $_SESSION['school_num'] = $school_num['school_num'];
        header("location:../index.php?do=student");

    } else {
        print "來者何人?";
    }
} else {
    header("location:../index.php?do=login&error=1");
}
