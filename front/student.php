<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>學生基本資料</title>
    <link rel="stylesheet" href="./css/student.css">
</head>

<body>
    <?php
    if (isset($_SESSION['school_num'])) {
        [$rows, $scores] = getStudentData($_SESSION['school_num'], $pdo);
    } elseif (isset($_POST['school_num'])) {
        [$rows, $scores] = getStudentData($_POST['school_num'], $pdo);
    }

    foreach ($rows as $idx => $row) {
        if ($showSidebar) {
    ?>
            <div id="sidebar" class="d-flex flex-column align-items-start justify-content-between px-5 py-4">
                <div>
                    <p>
                        <a class="text-white" href="index.php?do=edit_student">編輯個人資料</a>
                    </p>
                    <?php
                    if (empty($row['img'])) { ?>
                        <p>
                            <a class="text-white" href="index.php?do=photo_upload">新增照片</a>
                        </p>
                    <?php
                    }
                    ?>
                    <p>
                        <a class="text-white" href="index.php?do=student_scores">模擬考成績查詢</a>
                    </p>
                    <p>
                        <a class="text-white" href="index.php?do=add_message">新增留言板訊息</a>
                    </p>
                </div>
                <?php
                if (isset($_SESSION['login'])) {
                ?>
                    <p><a class="text-white" href="./api/logout.php">登出</a></p>
                <?php
                }
                ?>

            </div>
        <?php
        }
        ?>
        <div class="container d-flex flex-column rounded p-3">
            <div class="header">
                <?php foreach ($scores as  $value) { ?>
                    <div class="box2">
                        <div><?= $row['name']; ?></div>
                        <div><?= $row['dept']; ?></div>
                        <div><?= $row['school_num']; ?></div>
                        <div><?= $row['uni_id']; ?></div>
                        <div><?= $row['birthday']; ?></div>
                        <div><?= $row['tel']; ?></div>
                        <div><?= $row['email']; ?></div>
                        <div><?= $row['addr']; ?></div>
                    </div>
                <?php } ?>
                <?php if ($_SESSION['role'] == "teacher") { ?>
                    <div class="teacherPhoto">
                        <div id="img" class="position-relative">
                            <img src="./image/<?= $row['img']; ?>" alt="" height="250px">
                        </div>
                    <?php } else { ?>
                        <div class="photo">
                            <div id="img" class="position-relative">
                                <a href="index.php?do=photo_upload">
                                    <img src="./image/<?= $row['img']; ?>" alt="" height="250px">
                                </a>
                            </div>
                        <?php } ?>

                        <div class="enName">
                            <h5>
                                <?= $row['en_name']; ?>
                            </h5>
                        </div>
                        </div>
                    </div>
                    <div class="intro">
                        <h5>簡介</h5>
                    </div>
                    <div class="hr_">
                        <hr>
                    </div>
                    <div><?= $row['intro']; ?></div>
            </div>
            <?php
            if ($showSidebar) {
            ?>
                <div id="sidebar-button-wrapper">
                    <button id="sidebar-button" class="border-0 bg-transparent text-white" onclick="toggleSidebar()"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
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
                    sidebar.style.left = '-230px';
                    buttonWrapper.style.left = '0px';
                } else {
                    sidebar.style.left = '0px';
                    buttonWrapper.style.left = '230px';
                }
            }
        </script>

</body>

</html>