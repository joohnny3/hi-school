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

        .message,
        .title>h1 {
            display: none;
        }

        .container {
            width: 55vw;
            height: 90vh;
            background-color: #ffffff90;
        }

        #mesTitle {
            font-size: 40px;
            margin-bottom: 15px;
        }

        #box {
            border-radius: 3px;
            overflow-y: auto;
        }

        #content {
            text-align: start;
            margin-bottom: 20px;
        }

        #who {
            text-align: end;
        }

        #who>img {
            border-radius: 3px;
        }

        #time {
            text-align: end;
            color: gray;
        }

        hr {
            border-top: 2px solid #084298;
            margin: 1rem 12%;
        }
    </style>
</head>

<body>
    <?php
    $sql = "SELECT * FROM `board`, `students`, `images` 
    WHERE `students`.`school_num` = `board`.`school_num` AND `board`.`school_num` = `images`.`school_num`
    ORDER BY `board`.`time` DESC";
    $row = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <div class="container text-center" id="box">
        <div class="row">
            <div id="mesTitle" class="col" style="font-family: 'Tilt Prism', cursive;">
                Message
            </div>
        </div>
        <?php foreach ($row as $key => $value) { ?>
            <div class="row">
                <div class="col-2" id="who">
                    <img class="card-img-top" src="./image/<?= $value['img']; ?>" alt="image" style="width: 40%" /><br>
                    <?= $value['en_name']; ?>
                </div>
                <div class="col-10">
                    <!-- <div class="row">
                        <div class="col">
                            message
                        </div>
                    </div> -->
                    <div class="row" id="content">
                        <div class="col">
                            <?= $value['content']; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col" id="time">
                            <?= $value['time']; ?>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        <?php } ?>
    </div>
    <div class="back">
        <a href="./index.php"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z" />
            </svg>back</a>
    </div>
</body>

</html>