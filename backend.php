<?php
require_once "db.php";
include_once "sidebar.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #sidebar {
            position: fixed;
            left: -200px;
            top: 0;
            width: 200px;
            height: 100vh;
            overflow-y: auto;
            background-color: #f1f1f1;
            transition: all 0.5s;
        }

        #sidebar-button-wrapper {
            position: fixed;
            left: 0;
            top: 0;
            transition: all 0.5s;
        }
    </style>
</head>

<body>
    <form id="myForm" action="./backend.php?do=student" method="post">
        <input type="hidden" name="school_num" id="school_num">
        <div>
            <?php for ($i = 0; $i < count($_SESSION['school_nums']); $i++) { ?>
                <img src="./image/<?= $_SESSION['school_imgs'][$i]; ?>" width="50px" data-value="<?= $_SESSION['school_nums'][$i]; ?>">
            <?php }; ?>
        </div>
    </form>

    <script>
        function toggleSidebar() {
            var sidebar = document.getElementById('sidebar');
            var buttonWrapper = document.getElementById('sidebar-button-wrapper');
            if (sidebar.style.left === '0px') {
                sidebar.style.left = '-200px';
                buttonWrapper.style.left = '0px';
            } else {
                sidebar.style.left = '0px';
                buttonWrapper.style.left = '200px';
            }
        }
        const images = document.querySelectorAll('img');
        for (let i = 0; i < images.length; i++) {
            images[i].addEventListener('click', function() {
                const val = this.getAttribute('data-value');
                document.querySelector('#school_num').value = val;
                document.querySelector('#myForm').submit();
            });
        }
    </script>
    <?php

    $showSidebar = 0;
    $do = $_GET['do'] ?? '';
    $file = "./front/" . $do . ".php";
    $fileBack = "./back/" . $do . ".php";

    if (file_exists($file)) {
        include $file;
    } elseif (file_exists($fileBack)) {
        include $fileBack;
    } else {
        include "";
    }
    ?>
</body>


</html>