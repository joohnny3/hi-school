<?php require_once "db.php";
include "sidebar.php";
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
        /* 讓側邊欄固定在視窗邊緣 */
        left: 0;
        /* 讓側邊欄貼近視窗的左側 */
        top: 0;
        /* 讓側邊欄從視窗的頂部開始 */
        width: 200px;
        /* 設定側邊欄的寬度 */
        height: 100vh;
        /* 讓側邊欄佔據整個視窗的高度 */
        overflow-y: auto;
        /* 讓側邊欄的內容可以在需要時滾動 */
        background-color: #f1f1f1;
        /* 設定側邊欄的背景色 */
        transition: all 0.5s;
        /* 讓側邊欄的變化有過渡效果 */
    }

    #sidebar-button-wrapper {
        position: fixed;
        /* 讓按鈕固定在視窗邊緣 */
        left: 200px;
        /* 讓按鈕位於側邊欄的右側 */
        top: 0;
        /* 讓按鈕貼近視窗的頂部 */
        transition: all 0.5s;
        /* 讓按鈕的變化有過渡效果 */
    }
    </style>
</head>

<body>
    <!-- <a href="./api/logout.php">登出</a> -->
    <form id="myForm" action="./backend.php?do=student" method="post">
        <input type="hidden" name="school_num" id="school_num">
        <div>
            <?php for($i = 0; $i < count($_SESSION['school_nums']); $i++): ?>
            <img src="./image/<?= $_SESSION['school_imgs'][$i] ;?> " width="50px"
                data-value=<?=$_SESSION['school_nums'][$i];?>>
            <?php endfor; ?>
            <!-- <img src="path/to/image7.png" data-value="+"> -->
        </div>
    </form>
       
    <script type="text/javascript">
    const images = document.querySelectorAll('img');
    for (let i = 0; i < images.length; i++) {
        images[i].addEventListener('click', function() {
            const val = this.getAttribute('data-value');
            document.querySelector('#school_num').value = val;
            document.querySelector('#myForm').submit();
        });
    }
    </script>
    <script>
    function toggleSidebar() {
        var sidebar = document.getElementById('sidebar');
        var buttonWrapper = document.getElementById('sidebar-button-wrapper');
        if (sidebar.style.left === '0px') {
            sidebar.style.left = '-200px'; // 隱藏側邊欄
            buttonWrapper.style.left = '0px'; // 移動按鈕到最左邊
        } else {
            sidebar.style.left = '0px'; // 顯示側邊欄
            buttonWrapper.style.left = '200px'; // 移動按鈕到側邊欄右側
        }
    }
    </script>
    <?php
        $showSidebar = 0;
        // print_r($_SESSION);
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