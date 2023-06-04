<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>檔案上傳</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img {
            width: 150px;
            border: 10px solid black;
            margin: 3px;
        }

        table {
            border-collapse: collapse;
        }

        table td {
            padding: 10px 20px;
            border: 1px solid #ccc;
        }
    </style>
</head>

<body>
    <h1 class="header">照片更換</h1>
    <form action="./api/photo_upload.php" method="post" enctype="multipart/form-data">
        <div>
            上傳檔案: <input type="file" name="img" id="img">
        </div>
        <div>
            <input type="submit" value="上傳">
        </div>

    </form>
    <?php
    $sql = "SELECT * from `images` where `school_num` = {$_SESSION['school_num']}";
    $imgs = q($sql);
    ?>
    <table>
        <tr>
            <td>木前</td>
        </tr>
        <?php
        foreach ($imgs as $idx => $img) {
        ?>
            <tr>
                <td>
                    <?php
                    switch ($img['type']) {
                        case 'image/jpeg':
                            echo "<img src='./image/{$img['img']}'";
                            break;
                        case 'image/png':
                            echo "<img src='./image/{$img['img']}'";
                            break;
                        case 'image/bmp':
                            echo "<img src='./image/{$img['img']}'>";
                            break;
                        case 'image/gif':
                            echo "<img src='./image/{$img['img']}'>";
                            break;
                        case 'image/heic':
                            echo "<img src='./image/{$img['img']}'>";
                            break;
                        case 'image/avif':
                            echo "<img src='./image/{$img['img']}'>";
                            break;
                    }
                    ?>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>