<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>檔案上傳</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-image:none;
        }

        .title>h1 {
            color: black;
            font-size: 76px;
        }

        img {
            border: thick double #32a1ce;
        }

        #formContainer {
            display: flex;
            justify-content: center;
        }

        .card-body>h4 {
            display: flex;
            justify-content: center;
        }

        .back>a {
            color: black;
            position: absolute;
            top: 90%;
            left: 2%;
            text-decoration: none;
            font-size: 18px;
            
        }
        .singOut{
            display: none;
        }
    </style>
</head>

<body>
    <?php
    $sql = "SELECT * from `images` where `school_num` = {$_SESSION['school_num']}";
    $imgs = q($sql);
    ?>
    <?php
    foreach ($imgs as $idx => $img) {
        switch ($img['type']) {
            case 'image/jpeg':
                // echo "<img src='./image/{$img['img']}'";
                break;
            case 'image/png':
                // echo "<img src='./image/{$img['img']}'";
                break;
            case 'image/bmp':
                // echo "<img src='./image/{$img['img']}'>";
                break;
            case 'image/gif':
                // echo "<img src='./image/{$img['img']}'>";
                break;
            case 'image/heic':
                // echo "<img src='./image/{$img['img']}'>";
                break;
            case 'image/avif':
                // echo "<img src='./image/{$img['img']}'>";
                break;
        }
    ?>
        <div id="formContainer">
            <form action="./api/photo_upload.php" method="post" enctype="multipart/form-data">
                <div class="card" style="width: 16rem; margin: 0 0 100px 0">
                    <img class="card-img-top" src="./image/<?= $img['img']; ?>" alt="image" style="width: 100%" />
                    <div class="card-body">
                        <h4 class="card-title">
                            <button type="button" class="btn btn-light position-relative" disabled>
                                <?= $_SESSION['name']; ?>&emsp;<?= $_SESSION['en_name']; ?>
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning">
                                    <?= $_SESSION['dept']; ?>
                                </span>
                            </button>
                        </h4>
                        <br>
                        <div class="input-group">
                            <input type="file" class="form-control" name="img" id="img" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                            <input class="btn btn-info" type="submit" id="inputGroupFileAddon04" value="更換">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    <?php
    }
    ?>
    <div class="back">
        <a href="index.php?do=student"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
</svg>back</a>
    </div>
</body>

</html>