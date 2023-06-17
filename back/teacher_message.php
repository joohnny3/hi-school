<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .back>a {
            color: white;
            position: absolute;
            top: 90%;
            left: 2%;
            text-decoration: none;
            font-size: 18px;
        }

        .title>h1 {
            display: none;
        }

        .container {
            width: 55vw;
            height: 75vh;
            background-color: #ffffff90;
            border-radius: 5px;
            overflow-y: auto;
        }

        #boxTitle {
            font-size: 24px;
            margin-bottom: 10px;
            padding-top: 10px;
        }

        hr {
            border-top: 2px solid #084298;
            margin: 1rem 12%;
        }

        #boxBody>div {
            padding: 0 40px;
        }
    </style>
</head>

<body>
    <?php
    // dd($_SESSION);
    $sql = "SELECT * FROM `board` 
    WHERE '{$_SESSION['login']}' = `board`.`school_num`
    ORDER BY `board`.`time` DESC";
    $row = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <div class="container text-center">
        <div class="row" id="boxTitle">
            <div class="col-6" style="font-family: 'Tilt Prism', cursive;">
                Add
            </div>
            <div class="col-6" style="font-family: 'Tilt Prism', cursive;">
                History
            </div>
        </div>
        <div class="row" id="boxBody">
            <div class="col-6">
                <form action="./api/add_message.php" method="post">
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 300px; background-color: #0000005e;" name="content"></textarea>
                        <label for="floatingTextarea2">訊息內容</label>
                        <hr>
                    </div>
                    <button type="submit" class="btn btn-warning">留言</button>
                </form>
            </div>
            <div class="col-6">
                <?php foreach ($row as $key => $value) {  ?>
                    <hr>
                    <div style="padding-bottom: 10px; color:darkgray">
                        <?= $value['time']; ?>
                    </div>
                    <div style="text-align: start;">
                        <?= $value['content']; ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</body>

</html>