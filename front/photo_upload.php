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
    <!----建立你的表單及設定編碼----->
    <form action="./api/photo_upload.php" method="post" enctype="multipart/form-data">
        <div>
            上傳檔案: <input type="file" name="img" id="img">
        </div>
        <div>
            <input type="submit" value="上傳">
        </div>

    </form>




    <!----建立一個連結來查看上傳後的圖檔---->

    <?php
    // print "<pre>";
    // print_r($_POST);
    // print "</pre>";
    // print "<pre>";
    // print_r($_SESSION);
    // print "</pre>";
    $sql = "SELECT * from `images` where `school_num` = {$_SESSION['school_num']}";
    $imgs = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

    ?>
    <table>
        <tr>

            <td>木前</td>


        </tr>
        <?php
        foreach ($imgs as $idx => $img) {
            // print "<pre>";
            // print_r($idx);
            // print "</pre>";
            // print "<pre>";
            // print_r($img);
            // print "</pre>";

        ?>
            <tr>
                <td>
                    <?php
                    // print"<pre>";
                    // print_r($img);
                    // print"</pre>";
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



<!-- 
                <td>
                    <button onclick="location.href='./front/photo_update.php?id=<?= $img['img']; ?>'">編輯</button>
                    <button onclick="location.href='./api/photo_delete.php?id=<?= $img['img']; ?>'">刪除</button>
                </td> -->
            </tr>
        <?php
        }
        ?>
    </table>


</body>

</html>