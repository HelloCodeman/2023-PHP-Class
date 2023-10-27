<?php

// 使用POST所以用$_POST，POST取得的acc等於admin，以及(&&)取得的pw等於1234
if ($_POST['acc'] == 'admin' && $_POST['pw'] == '1234') {
    header("location:member.php?.login=1");

} else {
    header("location:login.php?m=帳號或密碼錯誤，請重新登入");
}

?>