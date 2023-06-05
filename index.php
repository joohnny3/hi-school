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
    <title>hi_School</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        a {
            font-family: 'Roboto', sans-serif;
            font-size: 44px;
        }

        h1 {
            font-family: 'Dancing Script', cursive;
            font-size: 108px;
            text-align: center;
        }

        .menu {
            display: flex;
            justify-content: space-around;
            background: #f1f1f1;
            padding: 20px 0;
        }

        .menu-item {
            cursor: pointer;
        }
    </style>
</head>

<body>
    <h1>hi_School</h1>
    <header>
        <?php
        if (!isset($_SESSION['login'])) {
        ?>
        <div class="menu">

            <div class="menu-item" id="login">
                <a href="index.php?do=login">Log in</a>
            </div>
            <div class="menu-item" id="register">
                <a href="index.php?do=reg">Sing up</a>
            </div>
        </div>
        <?php } ?>
    </header>
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