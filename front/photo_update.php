<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$img=$pdo->query("select * from `images` where `id`='{$_GET['id']}'")->fetch(PDO::FETCH_ASSOC);


?>
 <h1 class="header">重新上傳</h1>
 <!----建立你的表單及設定編碼----->
<form action="./api/update.php" method="post" enctype="multipart/form-data">
<div>
    上傳檔案: <input type="file" name="img" id="img">
</div>
<div>
    描述: <input type="text" name="desc" id="desc" value="<?=$img['desc'];?>">
</div>
<div>

    <input type="hidden" name="id" value="<?=$img['id'];?>">
    <input type="submit" value="上傳">
</div>

</form>
<img src="../img/<?=$img['img'];?>" alt="">
</body>
</html>