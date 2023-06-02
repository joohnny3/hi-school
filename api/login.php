<?php require_once "../db.php";

$sql = "SELECT count(*) from `permissions` where `user`='{$_POST['user']}' && `password`='{$_POST['password']}'";

$chk = $pdo->query($sql)->fetchColumn();


if ($chk) {

    $sql_value = "SELECT `role` from `permissions`,`students` where `user`='{$_POST['user']}' && `password`='{$_POST['password']}'";

   
    $value = $pdo->query($sql_value)->fetch(PDO::FETCH_ASSOC);

    $_SESSION['login'] = $_POST['user'];
    $_SESSION['role'] = $value['role'];


    if ($value['role'] == "teacher") {
        $sql_dept = "SELECT `school_num` FROM `students` WHERE `dept` = (SELECT `dept` FROM `permissions`,`class` WHERE `permissions`.`user` = '{$_POST['user']}' AND `permissions`.`name` = `class`.`teacher`);";
       $school_dept = $pdo->query($sql_dept)->fetchAll(PDO::FETCH_ASSOC);
       foreach ($school_dept as $key => $school_info) {
        $_SESSION['school_nums'][] = $school_info['school_num'];
    //    print "<pre>";
    //    print_r($value);
    //    print "</pre>";
       }
    //    print "<pre>";
    //    print_r($school_dept);
    //    print "</pre>";
    //    print "<pre>";
    //    print_r($_SESSION);
    //    print "</pre>";
    //    print $_SESSION[]['school_num'];
        header("location:../index.php?do=select_student");

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