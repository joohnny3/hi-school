<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./api/add_scores.php" method="post">
        <div>
            <label for="scores"></label>
            <input type="text" name="scores" id="scores" value="請輸入" onfocus="this.value=''">
        </div>
        <div>
            <input type="hidden" name="school_num" id="school_num" value="<?= $_POST['school_num'] ?>">
            <input type="submit" value="送出">
        </div>
    </form>
</body>

</html>