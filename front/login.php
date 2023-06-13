<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login.css">
    <title>login</title>
</head>

<body>
    <?php
    if (isset($_GET['error'])) {
        echo "<span style='color:red'>";
        echo "帳號或密碼錯誤";
        echo "</span>";
    }
    ?>
    <div class="class">
        <form action="./api/login.php" method="post">
            <div class="text-center"><span class="align-middle">
                    <h2>
                        Log in
                    </h2>
                </span></div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                    </svg></span>
                <label class="form-label" for="user"></label>
                <input type="text" name="user" id="user" value="username" onfocus="this.value=''" class="form-control">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
                        <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                    </svg></span>
                <label class="form-label" for="password"></label>
                <input type="text" name="password" id="password" value="password" onfocus="this.type='password'; this.value=''" class="form-control">
            </div>
            <div>
                <input type="submit" class="btn btn-primary form-control-plaintext" value="login" id="mybtn">
            </div>
        </form>
    </div>
</body>

</html>

