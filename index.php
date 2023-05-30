<?php require_once "db.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>好學校</title>
    <style>
        body{
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
<header>
    <?php
    if(!isset($_SESSION['login'])){
    ?>
        <a href="index.php?do=login">登入</a>
        <a href="index.php?do=reg">註冊</a>
        <?php
    }else{
        ?>
        <a href="./api/logout.php">登出</a>
    <?php
    //   if ($_SESSION['role']='student') {
    //     include "./front/student.php";
    //   }
     }
    ?>
</header>
<main>
    
    <?php
// print_r($_SESSION);
$do=$_GET['do']??'login';

$file="./front/".$do.".php";

if(file_exists($file)){
    include $file;
}else{
    include "./front/login.php";
}
?>

</main>
<footer></footer>

</body>
</html>