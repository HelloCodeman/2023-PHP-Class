<?php


// 使用POST所以用$_POST，POST取得的acc等於admin，以及(&&)取得的pw等於1234
if ($_POST['acc'] == 'admin' && $_POST['pw'] == '1234') {

    setcookie("login", "he11owor1d", time() + 60);

    header("location:member.php");

} else {
    setcookie("error", "帳號或密碼錯誤，請重新登入", time() + 5);
    header("location:login.php");

}

?>