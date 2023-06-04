<?php require_once "db.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>好學校</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body>
    <header>
        <?php
        if (!isset($_SESSION['login'])) {
        ?>
            <a href="index.php?do=login">登入</a>
            <a href="index.php?do=reg">註冊</a>
        <?php } ?>
    </header>
    <main>
        <?php
        $showSidebar = true;
        $do = $_GET['do'] ?? '';
        $file = "./front/" . $do . ".php";
        
        include file_exists($file) ? $file : "";
        ?>
    </main>
    <footer></footer>
</body>

</html>