<?php require_once "../db.php";

$sql = "SELECT count(*) from `permissions` where `user`='{$_POST['user']}' && `password`='{$_POST['password']}'";

$chk = $pdo->query($sql)->fetchColumn();


if ($chk) {

    $sql_value = "SELECT `role`,`school_num` from `permissions`,`students` where `user`='{$_POST['user']}' && `password`='{$_POST['password']}' && `school_num`='{$_POST['user']}'";

    $value = $pdo->query($sql_value)->fetch(PDO::FETCH_ASSOC);


    $_SESSION['login'] = $_POST['user'];
    $_SESSION['school_num'] = $value['school_num'];
    $_SESSION['role'] = $value['role'];
    // print "<pre>";
    // print_r($value);
    // print "</pre>";
    // if(isset($_SESSION['position'])){
    //     header("location:".$_SESSION['position']);
    //     unset($_SESSION['position']);
    //     exit();
    // }
    if ($value['role'] == "teacher") {
        print "test";
    } elseif ($value['role'] == "student") {
        header("location:../index.php?do=student");
    } else {
        print "來者何人?";
    }
} else {
    header("location:../index.php?do=login&error=1");
}
