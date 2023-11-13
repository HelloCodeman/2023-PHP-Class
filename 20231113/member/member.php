<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <title>會員中心</title>
    <style>
        .maintext {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <br>
        <h1 class="maintext">使用者資料</h1>

        <header class="nav">
            <div class="nav-item col-4"></div>
            <div class="nav-item col-4">
                <ul class="d-flex justify-content-evenly">
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                </ul>
            </div>
            <div class="nav-item col-4">
                <?php
                if (isset($_SESSION['user'])) {
                    echo "歡迎光臨 " . $_SESSION['user'];
                    echo "<a href='logout.php' class='btn btn-info mx-2'>登出</a>";
                } else {
                    ?>
                    <a href="reg.php" class="btn btn-primary mx-2">註冊</a>
                    <a href="login_form.php" class="btn btn-success mx-2">登入</a>
                    <?php
                }
                ?>
            </div>
        </header>
        <form action="./update.php" method="post" class="col-4 m-auto">
            <div class="input-group my-1">
                <label class="col-4  input-group-text">帳號:</label>
                <input class="form-control" type="text" name="acc" id="acc">
            </div>
            <div class="input-group my-1">
                <label class="col-4  input-group-text">密碼:</label>
                <input class="form-control" type="password" name="pw" id="pw">
            </div>
            <div class="input-group my-1">
                <label class="col-4  input-group-text">姓名:</label>
                <input class="form-control" type="text" name="name" id="name">
            </div>
            <div class="input-group my-1">
                <label class="col-4  input-group-text">電子郵件:</label>
                <input class="form-control" type="text" name="email" id="email">
            </div>
            <div class="input-group my-1">
                <label class="col-4  input-group-text">連絡電話:</label>
                <input class="form-control" type="text" name="address" id="address">
            </div>
            <br>
            <div class="position-absolute bottom-30 start-50 translate-middle-x">
                <input class="btn-primary mx-2" type="submit" value="更新">
                <input class="btn-warning mx-2" type="reset" value="重置">
            </div>

        </form>
    </div>
</body>

</html>