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
            width: 600px;
            height: 90vh;
            /* display: flex; */
            /* flex-direction: column; */
            background-color: #ffffff90;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            /* border-radius: 15px; */
            /* padding: 20px; */
            overflow: auto;
        }

        .header,
        .nav,
        .footer {
            display: flex;
            justify-content: center;
            padding: 10px;
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

        .title>h1 {
            display: none;
        }

        .back>a {
            color: white;
            position: absolute;
            top: 90%;
            left: 2%;
            text-decoration: none;
            font-size: 18px;
        }

        .box2 {
            width: 70%;
        }

        textarea {
            width: 380px;
            height: 250px;
            resize: none;
            padding: 5px;
            border: 1px solid #ced4da;
            border-radius: 0.375rem;
            /* 用戶不能調整其大小 */
        }

        .header {
            margin-bottom: -25px;
        }

        .footer {
            padding-bottom: initial;
        }

        #editBtn {
            background-color: lightgreen;
            border-color: lightgreen;
            color: black;
        }

        #editBtn:hover {
            background: #469c76;
            border-color: #469c76;
            color: white;
        }
    </style>
</head>

<body>
    <?php
    $sql = "SELECT * from `students` where `school_num` = {$_SESSION['school_num']}";
    $rows = q($sql);
    foreach ($rows as $idx => $row) {
    ?>
        <form action="./api/edit_student.php" method="post">
            <div class="container d-flex flex-column rounded p-3">
                <div class="header">
                    <div class="box2">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">姓名</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name" value="<?= $row['name']; ?>">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">英文名字</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="en_name" value="<?= $row['en_name']; ?>">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">科系</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="dept" value="<?= $row['dept']; ?>" disabled>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">學號</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="school_num" value="<?= $row['school_num']; ?>" disabled>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">身分證字號</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="uni_id" value="<?= $row['uni_id']; ?>" disabled>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">出生日期</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="birthday" value="<?= $row['birthday']; ?>">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">手機號碼</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="tel" value="<?= $row['tel']; ?>">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">e-mail</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="email" value="<?= $row['email']; ?>">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">地址</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="addr" value="<?= $row['addr']; ?>">
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <strong>簡介</strong>
                </div>
                <div class="intro"><textarea name="intro"><?= nl2br($row['intro']) ?></textarea>
                </div>
            </div>
            <button class="btn btn-success mt-2" id="editBtn" type="submit">送出</button>
        </form>
    <?php
    }
    ?>
    <div class="back">
        <a href="index.php?do=student"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z" />
            </svg>back</a>
    </div>
</body>

</html>