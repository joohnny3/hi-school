<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login.css">
    <title>login</title>
    <style>
    </style>
</head>

<body>
    <?php
    if (isset($_GET['error'])) {
        echo "<span style='color:red'>";
        echo "帳號或密碼錯誤";
        echo "</span>";
    }
    ?>
    <form action="./api/login.php" method="post">
        <div>
            <label for="user"></label>
            <input type="text" name="user" id="user" value="username" onfocus="this.value=''">
        </div>
        <div>
            <label for="password"></label>
            <input type="text" name="password" id="password" value="password" onfocus="this.type='password'; this.value=''">
        </div>
        <div>
            <input type="submit" value="login">
        </div>
    </form>
</body>

</html>