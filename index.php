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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>hi_School</title>
</head>

<body>
    <header>
        <?php
        if (empty($_GET)) { ?>
            <div class="message" style="display: flex;">
                <a href="index.php?do=message_board">Message</a>
                <!-- <a href="index.php?do=message_board">vote</a> -->
            </div>
        <?php }
        ?>
        <?php
        if (!isset($_SESSION['login'])) {
        ?>
            <div class="menu">
                <div class="login">
                    <a href="index.php?do=login">Log in</a>
                </div>
                <div class="register">
                    <a href="index.php?do=reg">Sign up</a>
                </div>
            </div>
        <?php } else { ?>
            <div class="signOut">
                <a href="./api/logout.php">Sign out</a>
            </div>
        <?php } ?>
    </header>
    <main>
        <div class="title">

            <h1 class="animate__animated animate__jello">hi_School</h1>
        </div>
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