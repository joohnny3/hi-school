<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<body>
    <form action="./api/select_scores.php" method="post">
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
    </form>
</body>
</body>
</html>