<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

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
            <img src="./image/<?= $img; ?>" alt="" width="100px">
    <?php
        }
    }
    unset($_SESSION['select']);
    ?>



</body>

</html>