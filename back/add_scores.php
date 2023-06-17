<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #selectScores {
            width: 300px;
            text-align: center;
            height: 150px;
            background-color: #e9ecefcf;
        }
    </style>
</head>

<body>
<?php
// dd($_POST);
$sql = "SELECT `name`,`school_num` from `students` where `school_num` = '{$_POST['school_num']}'";
$value = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
// dd($value);
?>
<div style="font-size: 25px;text-shadow: 1px 1px 1px white;">
    <?=$value['name'];?>
</div>
<div style="font-size: 17px;text-shadow: 1px 1px 1px white;">
<?=$value['school_num'] ;?>
</div>
<br>
    <form action="./api/add_scores.php" method="post">
        <select class="form-select form-select-lg mb-3" size="3" aria-label="size 3 select example" name="score_select" id="selectScores">
            <option selected value="scores_5">第五次模擬考成績</option>
            <option value="scores_4">第四次模擬考成績</option>
            <option value="scores_3">第三次模擬考成績</option>
            <option value="scores_2">第二次模擬考成績</option>
            <option value="scores">第一次模擬考成績</option>
        </select>
        <div class="input-group mb-5 ">
            <input class="form-control" type="text" id="scoresInput" name="score_input" id="scores" value="請輸入成績" onfocus="this.value=''">
            <input type="hidden" name="school_num" id="school_num" value="<?= $_POST['school_num'] ?>">
            <input class="input-group-text" type="submit" value="成績登入">
        </div>
    </form>
</body>

</html>