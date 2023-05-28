<?php require_once "../db.php";

$sql="SELECT count(*) from `permissions` where `user`='{$_POST['user']}' && `password`='{$_POST['password']}'";

$chk=$pdo->query($sql)->fetchColumn();


if($chk){
    
    $sql_role="SELECT `role` from `permissions` where `user`='{$_POST['user']}' && `password`='{$_POST['password']}'";
    
    $role=$pdo->query($sql_role)->fetchColumn();

    $_SESSION['login']=$_POST['user'];
    
    $_SESSION['role']=$role;

    // if(isset($_SESSION['position'])){
    //     header("location:".$_SESSION['position']);
    //     unset($_SESSION['position']);
    //     exit();
    // }

    header("location:../index.php");
}else{
    header("location:../index.php?do=login&error=1");
}