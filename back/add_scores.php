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
        }

        #scoresInput {
            width: 300px;
        }

        #scoresBtn {
            text-align: center;
        }

        #scoresBtn>input {
            background-color: lightgreen;
            border-color: lightgreen;
            color: black;
        }

        #scoresBtn>input:hover {
            background: #469c76;
            border-color: #469c76;
            color: white;
        }
    </style>
</head>

<body>
    <form action="./api/add_scores.php" method="post">
        <select class="form-select form-select-lg mb-3" size="3" aria-label="size 3 select example" name="score_select" id="selectScores">
            <option selected value="scores_5">第五次模擬考成績登入</option>
            <option value="scores_4">第四次模擬考成績登入</option>
            <option value="scores_3">第三次模擬考成績登入</option>
            <option value="scores_2">第二次模擬考成績登入</option>
            <option value="scores">第一次模擬考成績登入</option>
        </select>
        <div class="input-group mb-3 ">
            <div>
                <label for="score_input"></label>
                <input class="form-control" type="text" id="scoresInput" name="score_input" id="scores" value="請輸入學生模擬考分數" onfocus="this.value=''">
            </div>
        </div>
        <div id="scoresBtn">
            <input type="hidden" name="school_num" id="school_num" value="<?= $_POST['school_num'] ?>">
            <input class="btn btn btn-success mt-2" type="submit" value="送出">
        </div>
    </form>
</body>

</html>