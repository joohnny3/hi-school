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
            background-image: none;
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

        h1 {
            display: none;
        }
    </style>
</head>

<body>
    <?php
    // getStudentData 在 db.php
    if (isset($_SESSION['school_num'])) {
        [$rows, $scores] = getStudentData($_SESSION['school_num'], $pdo);
    } elseif (isset($_POST['school_num'])) {
        [$rows, $scores] = getStudentData($_POST['school_num'], $pdo);
    }

    foreach ($rows as $idx => $row) {
        if ($showSidebar) {
    ?>
            <div id="sidebar">
                <ul>
                    <li><a href="index.php?do=edit_student">編輯學生資訊</a></li>
                    <?php
                    if (empty($row['img'])) { ?>
                        <li><a href="index.php?do=photo_upload">新增照片</a></li>
                    <?php
                    }
                    ?>
                    <?php
                    if (isset($_SESSION['login'])) {
                    ?>
                        <li><a href="./api/logout.php">登出</a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        <?php
        }
        ?>
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
                    <div>成績</div>
                </div>
                <?php foreach ($scores as  $value) { ?>
                    <div class="box2">
                        <div><?= $row['school_num']; ?></div>
                        <div><?= $row['dept']; ?></div>
                        <div><?= $row['birthday']; ?></div>
                        <div><?= $row['uni_id']; ?></div>
                        <div><?= $row['tel']; ?></div>
                        <div><?= $row['email']; ?></div>
                        <div><?= $row['guardian']; ?></div>
                        <div><?= $value['scores']; ?></div>
                    </div>
                <?php } ?>
                <div class="photo">
                    <div>
                        <a href="index.php?do=photo_upload">
                            <img src="./image/<?= $row['img']; ?>" alt="" width="144px">
                        </a>
                    </div>
                    <div><?= $row['en_name']; ?></div>
                </div>
            </div>
            <div class="nav">
                <div>地址</div>
                <div><?= $row['addr']; ?></div>
            </div>
            <div>簡介</div>
            <div><?= $row['intro']; ?></div>
        </div>
        <?php
        if ($showSidebar) {
        ?>
            <div id="sidebar-button-wrapper">
                <button id="sidebar-button" onclick="toggleSidebar()"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                    </svg></button>
            </div>
    <?php
        }
    } ?>
    <script>
        // 功能表開關
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
    </script>

</body>

</html>