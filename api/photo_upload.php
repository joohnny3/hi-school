<?php 
require_once "../db.php";
// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";

if ($_FILES['img']['error'] == 0) {

    $photoName = pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION);
//     $_FILES['img']['name'] 是 PHP 在檔案上傳時自動生成的全域變數，其中的 'name' 元素包含了上傳檔案的原始檔名，包括副檔名。

// pathinfo() 是一個 PHP 的內建函式，它可以解析檔案路徑的信息。當使用 PATHINFO_EXTENSION 作為第二個參數時，pathinfo() 會回傳檔案的副檔名。

// 所以，$extension = pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION); 這行程式碼的作用就是取得上傳檔案的副檔名並存入 $extension 變數。

// 例如，如果你上傳了一個名為 "example.jpg" 的檔案，$_FILES['img']['name'] 的值將會是 "example.jpg"，而 $extension 的值將會是 "jpg"。

    $name = $_SESSION['school_num'].'.'.$photoName;
    // $name = $_FILES['img']['name'];

   
    // print "<pre>";
    // print_r($_FILES);
    // print "</pre>";
    // print "<pre>";
    // print_r($_SESSION);
    // print "</pre>";
    // print "<pre>";
    // print_r($_POST);
    // print "</pre>";

    move_uploaded_file($_FILES['img']['tmp_name'], "../image/" . $name);

    $sql = "UPDATE `images` set
    `img`='$name',`story`='{$_POST['story']}',`type`='{$_FILES['img']['type']}' where `school_num`='{$_SESSION['school_num']}'";

    $pdo->exec($sql);

    header("location:../index.php?do=student");
}
