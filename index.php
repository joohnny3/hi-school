<?php require_once "db.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="./css/index.css">
    <link rel="icon" href="./photo/hello.png" type="image/png">
    <title>hi_School</title>
</head>

<body>
    <header>
        <?php
        if (!isset($_SESSION['login'])) {
        ?>
            <div class="menu">

                <div class="login">
                    <a href="index.php?do=login">Log in</a>
                </div>
                <div class="register">
                    <a href="index.php?do=reg">Sing up</a>
                </div>
            </div>
        <?php } ?>
    </header>
    <h1 class="animate__animated animate__jello">hi_School</h1>
    <main>
        <div id="content">
            <?php
            $showSidebar = true;
            $do = $_GET['do'] ?? '';
            $file = "./front/" . $do . ".php";

            if (file_exists($file)) {
                include $file;
            }
            ?>
        </div>
    </main>
    <footer></footer>
</body>

</html>