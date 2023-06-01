<?php require_once "../db.php";


if($_FILES['img']['error']==0){

    //$name=md5(strtotime('now') . $_FILES['img']['name']);
    $name=$_FILES['img']['name'];
    //$tmp=explode('.',$_FILES['img']['name']);
    //$sub="." . array_pop($tmp);
    
    move_uploaded_file($_FILES['img']['tmp_name'],"../img/".$name);

    $sql="UPDATE `images` set
    `img`='$name',`story`='{$_POST['story']}',`type`='{$_FILES['img']['type']}' where `school_num`='{$_SESSION['school_num']}'";

    $old_image=$pdo->query("select `img` from `images` where `school_num`='{$_SESSION['school_num']}'")->fetchColumn();
    unlink("../img/".$old_image);
    $pdo->exec($sql);
    
    // header("location:../upload.php");
}
