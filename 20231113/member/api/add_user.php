<?php
include_once "../include/connect.php";

$acc = htmlspecialchars(trim($_POST['acc']));
// 資料清洗指令 htmlspecialchars
$sql = "insert into `users`(`acc`,`pw`,`name`,`email`,`phone`)
                     values('{$acc}','{$_POST['pw']}','{$_POST['name']}','{$_POST['email']}','{$_POST['phone']}')";

$pdo->exec($sql);

header("Location:../index.php");