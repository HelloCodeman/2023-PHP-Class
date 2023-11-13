<?php
$dsn = "mysql:host=localhost;
charset=utf8;dbname=member";
$pdo = new PDO($dsn, 'root', '');
$acc=htmlspecialchars(trim($_POST['acc']));
// 資料清洗指令 htmlspecialchars
$sql = "insert into `users`(`acc`,`pw`,`name`,`email`,`phone`)
                     values('{$acc}','{$_POST['pw']}','{$_POST['name']}','{$_POST['email']}','{$_POST['phone']}')";

$pdo->exec($sql);

header("Location:index.php");