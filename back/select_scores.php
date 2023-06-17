<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .form-check {
            font-size: 20px;
            color: white;
        }

        #selectScores {
            width: 250px;
            height: 120px;
            text-align: center;
            background-color: #e9ecefcf;
        }

        .selectBtn {
            text-align: center;
        }

        #selBtn {
            background-color: lightgreen;
            border-color: lightgreen;
            color: black;
        }

        #selBtn:hover {
            background: #469c76;
            border-color: #469c76;
            color: white;
        }
    </style>
</head>

<body>

    <body>
        <form action="./api/select_scores.php" method="post">

            <select class="form-select form-select-lg mb-3" size="3" aria-label="size 3 select example" name="scores" id="selectScores">
                <option selected value="flunk">需補考學生</option>
                <option value="pass">合格學生</option>
                <option value="max">班級最高分</option>
                <option value="min">班級最低分</option>
            </select>
            <div class="selectBtn">
                <input type="hidden" name="school_num" id="school_num" value="<?= $_POST['school_num'] ?>">
                <input type="submit" class="btn btn-success mt-2" id="selBtn" value="查詢">
            </div>
        </form>
    </body>
</body>

</html>