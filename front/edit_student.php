<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>修改個人資料</title>
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
    </style>
</head>
<body>
<?php
    $sql = "SELECT * from `students` where `school_num` = {$_SESSION['school_num']}";
    $rows = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    foreach ($rows as $idx => $row) {
    ?>
        <form action="./api/edit_student.php" method="post">
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
                <div><input type="text" name="school_num" value="<?= $row['school_num']; ?>" readonly></div>
                <div><input type="text" name="dept" value="<?= $row['dept']; ?>" readonly></div>
                <div><input type="text" name="birthday" value="<?= $row['birthday']; ?>"></div>
                <div><input type="text" name="uni_id" value="<?= $row['uni_id']; ?>"></div>
                <div><input type="text" name="tel" value="<?= $row['tel']; ?>"></div>
                <div><input type="text" name="email" value="<?= $row['email']; ?>"></div>
                <div><input type="text" name="guardian" value="<?= $row['guardian']; ?>"></div>
            </div>
            <div class="photo">
                <div>photo</div>
                <div><input type="text" name="en_name" value="<?= $row['en_name']; ?>"></div>
            </div>
        </div>
        <div class="nav">
            <div>地址</div>
            <div><input type="text" name="addr" value="<?= $row['addr']; ?>"></div>
        </div>
        <div class="footer">
            <div>簡介</div>
        </div>
        <div><input type="text" name="intro" value="<?= $row['intro']; ?>"></div>
    </div>
    <button type="submit">送出</button>
</form>

    <?php
    } ?>
</body>
</html>