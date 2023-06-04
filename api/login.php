<?php require_once "../db.php";

$chk = _count('permissions', ['user' => $_POST['user'], 'password' => $_POST['password']]);

if ($chk) {

    $sql_value = "SELECT `role` from `permissions`,`students` where `user`='{$_POST['user']}' && `password`='{$_POST['password']}'";


    $value = $pdo->query($sql_value)->fetch(PDO::FETCH_ASSOC);

    $_SESSION['login'] = $_POST['user'];
    $_SESSION['role'] = $value['role'];


    if ($value['role'] == "teacher") {
        $sql_dept = "SELECT `school_num` FROM `students` WHERE `dept` = (SELECT `dept` FROM `permissions`,`class` WHERE `permissions`.`user` = '{$_POST['user']}' AND `permissions`.`name` = `class`.`teacher`);";
        $school_dept = q($sql_dept);
        foreach ($school_dept as $key => $school_info) {
            $_SESSION['school_nums'][] = $school_info['school_num'];
        }
        $sql_img = "SELECT `img` 
        FROM `images`, `students` 
        WHERE LEFT(`images`.`school_num`, 6) = LEFT('{$_SESSION['school_nums'][0]}', 6) GROUP by `images`.`school_num`
        ";
        $school_img = q($sql_img);
        foreach ($school_img as $img => $school_imgs) {
            $_SESSION['school_imgs'][] = $school_imgs['img'];
        }
        header("location:../backend.php");
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
