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
        // switch($_SESSION['pr']){
        //     case "super":
        //         echo "<a href='backend.php?do=super'>系統管理</a>";
        //     break; 
        //     case "member":
        //         echo "<a href='backend.php?do=member'>會員中心</a>";
        //     break;
        //     case "admin":
        //         echo "<a href='backend.php?do=admin'>管理</a>";
        //     break;
        // }
    }
    ?>
</header>
<main>

<?php

$do=$_GET['do']??'list';

$file="./front/".$do.".php";

if(file_exists($file)){
    include $file;
}else{
    include "./front/list.php";
}
?>

</main>
<footer></footer>

</body>
</html>