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
    </style>
</head>

<body>

    <body>
        <form action="./api/select_scores.php" method="post">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="scores" id="inlineRadio1" value="max">
                <label class="form-check-label" for="inlineRadio1">班級最高分</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="scores" id="inlineRadio2" value="min">
                <label class="form-check-label" for="inlineRadio2">班級最低分</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="scores" id="inlineRadio2" value="pass">
                <label class="form-check-label" for="inlineRadio2">班級合格學生</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="scores" id="inlineRadio3" value="flunk">
                <label class="form-check-label" for="inlineRadio3">班級需補考學生</label>
            </div>
            <div>
                <input type="hidden" name="school_num" id="school_num" value="<?= $_POST['school_num'] ?>">
                <input type="submit"  class="btn btn-success mt-2" value="查詢">
            </div>
        </form>
        <!-- <form action="./api/select_scores.php" method="post">
            <div>
                <label for="scores"></label>
                <select name="scores" id="scores">
                    <option value="max">最高分</option>
                    <option value="min">最低分</option>
                    <option value="pass">及格</option>
                    <option value="flunk">低於60分</option>
                </select>
            </div>
            <div>
                <input type="hidden" name="school_num" id="school_num" value="<?= $_POST['school_num'] ?>">
                <input type="submit" value="送出">
            </div>
        </form> -->
    </body>
</body>

</html>