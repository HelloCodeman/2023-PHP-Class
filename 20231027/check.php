<?php

session_start();

// 使用POST所以用$_POST，POST取得的acc等於admin，以及(&&)取得的pw等於1234
if ($_POST['acc'] == 'admin' && $_POST['pw'] == '1234') {

    $_SESSION['login']=$_POST['acc'];

    header("location:member.php");

} else {
    $_SESSION['error']="帳號或密碼錯誤，請重新登入";
    header("location:login.php");
}

?>