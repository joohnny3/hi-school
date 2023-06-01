<?php require_once "../db.php";
// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";

if ($_FILES['img']['error'] == 0) {

    //$name=md5(strtotime('now') . $_FILES['img']['name']);
    $name = $_FILES['img']['name'];
    //$tmp=explode('.',$_FILES['img']['name']);
    //$sub="." . array_pop($tmp);

    move_uploaded_file($_FILES['img']['tmp_name'], "../image/" . $name);

    $sql = "UPDATE `images` set
    `img`='$name',`story`='{$_POST['story']}',`type`='{$_FILES['img']['type']}' where `school_num`='{$_SESSION['school_num']}'";

    $pdo->exec($sql);

    header("location:../index.php?do=student");
}
?>
