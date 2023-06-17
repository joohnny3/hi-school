<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: flex;
            flex-direction: inherit;
        }

        .scoreStudent>img {
            height: 30%;
            width: auto;
            margin: 0 13px;
            border-radius: 7px;
            border: 1px dashed white;
            margin-bottom: 4px;
        }
        .scoreStudent{
            text-align: center;
            font-size: 18px;
            text-shadow: 0px 1px 1px white;
        }

        body {
            backdrop-filter: blur(8px) !important;
        }
    </style>
</head>

<body>
    <?php

    $scoreName = $_SESSION['select'];


    for ($i = 0; $i < count($scoreName); $i++) {
        $sql = "SELECT `name`,`school_num` from `students` where `school_num`='{$scoreName[$i]}'";
        $row = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        $rows[] = $row;
    }

    $student_images = [];
    foreach ($_SESSION['school_imgs'] as $img) {
        $parts = explode(".", $img);
        $student_num = array_shift($parts);
        // 刪除炸裂後陣列的第一個值
        $student_images[$student_num] = $img;
    }
    for ($i = 0; $i < count($_SESSION['select']); $i++) {
        $selected_student = $_SESSION['select'][$i];
        if (isset($student_images[$selected_student])) {
            $img = $student_images[$selected_student];
    ?>
           <div class="scoreStudent">
            <img src="./image/<?= $img; ?>" alt="" width="100px"><br>
               <?= $rows[$i][0]['name']; ?><br>
               <?= $rows[$i][0]['school_num']; ?>
            </div>
    <?php
        }
    }
    unset($_SESSION['select']);
    ?>



</body>

</html>