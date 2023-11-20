<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員登入</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <style>
        input[type='text'],
        input[type='password'] {
            outline: none;
        }

        .display-6-custom {
            font-size: 40px;
            font-weight: bold;
            margin-top: -25px;
            /* Adjust this value to move the text up or down */
        }

        .btn-custom {
            margin-bottom: -15px;
            /* Adjust this value to move the text up or down */
        }
    </style>

</head>

<body>
    <form action="./api/login.php" method="post">
        <?php

        if (isset($_GET['error'])) {
            echo "<span style='color:red'>";
            echo $_GET['error'];
            echo "</span>";
        }

        ?>
        <section class="vh-100" style="background-color: #508bfc;">
            <div class="container h-50">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card shadow-2-strong" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center">
                                <p class="display-6-custom mb-3">登入 Sign in</p>
                                <div class="form-outline mb-3">
                                    <label for="" class="form-label">帳號 Account</label>
                                    <input type="text" name="acc" id="acc" class="form-control">
                                </div>
                                <div class="form-outline mb-4">
                                    <label for="" class="form-label">密碼 Password</label>
                                    <input type="text" name="pw" id="pw" class="form-control">
                                </div>

                                <!-- Checkbox
                                <div class="form-check mb-4 text-center">
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-auto">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="form1Example5" />
                                        </div>
                                        <div class="col-auto">
                                            <label class="form-check-label" for="form1Example5">Remember
                                                password</label>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="btn-custom">
                                    <button class="btn btn-primary" type="submit">送出</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </form>
</body>

</html>