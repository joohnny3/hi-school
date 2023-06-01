<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>學生基本資料</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: auto;
            display: flex;
            text-align: center;
            background-color: #f0f0f0;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
        }

        .container {
            width: 36vw;
            height: 90vh;
            display: flex;
            flex-direction: column;
            background-color: #fff;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            border-radius: 15px;
            padding: 20px;
            overflow: auto;
        }

        .header,
        .nav,
        .footer {
            display: flex;
            justify-content: space-between;
            padding: 10px;
        }

        .header {
            height: 40%;
        }

        .nav {
            height: 5%;
        }

        .footer {
            height: 55%;
        }

        .photo {
            width: 40%;
        }

        .header div,
        .nav div,
        .footer div {
            margin: 5px 0;
        }

        a {
            color: red;
        }

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
    <?php
    $sql = "SELECT * from `students` where `school_num` = {$_SESSION['school_num']}";
    $rows = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    foreach ($rows as $idx => $row) {
    ?>
        <div id="sidebar">
            <ul>
                <li><a href="index.php?do=edit_student">編輯學生資訊</a></li>
                <!-- 可以在這裡添加更多的功能選項 -->
                <li><a href="index.php?do=photo_upload">新增照片</a></li>
                <?php
                if (isset($_SESSION['login'])) {
                } {
                ?>
                    <li><a href="./api/logout.php">登出</a></li>
                <?php
                } ?>
            </ul>
        </div>
        <div class="container">
            <div class="header">
                <div class="box1">
                    <div>學號</div>
                    <div>科系</div>
                    <div>出生日期</div>
                    <div>身分證字號</div>
                    <div>電話</div>
                    <div>電子郵件</div>
                    <div>監護人</div>
                </div>
                <div class="box2">
                    <div><?= $row['school_num']; ?></div>
                    <div><?= $row['dept']; ?></div>
                    <div><?= $row['birthday']; ?></div>
                    <div><?= $row['uni_id']; ?></div>
                    <div><?= $row['tel']; ?></div>
                    <div><?= $row['email']; ?></div>
                    <div><?= $row['guardian']; ?></div>
                </div>
                <div class="photo">
                    <div><img src="" alt=""> photo</div>
                    <div><?= $row['en_name']; ?></div>
                </div>
            </div>
            <div class="nav">
                <div>地址</div>
                <div><?= $row['addr']; ?></div>
            </div>
            <div class="footer">
                <div>簡介</div>
                <div>今年</div>
            </div>
        </div>
        <div><a href="index.php?do=edit_student">編輯</a></div>
        <div id="sidebar-button-wrapper">
            <button id="sidebar-button" onclick="toggleSidebar()">功能表</button>
        </div>
    <?php
    } ?>
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

</body>

</html>