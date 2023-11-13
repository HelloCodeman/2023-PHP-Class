<?php
$dsn = "mysql:host=localhost;charset=utf8;dbname=php_school";
$pdo = new PDO($dsn, 'root', '');

/*
$sql="select * from students";
$rows=$pdo->query($sql)->fetchAll();
*/

/* 增加資料表內容
$sql = "insert into `dept`(`code`,`name`) values('801','會計科');";
$pdo->query($sql);
*/

/* 更改資料表內容
$sql = "update `dept` set `code`='901',`name`='表演藝術科' where `id`='9'";
$pdo->query($sql);
*/

/* 刪除資料表內容
$sql="delete from `dept` where `id`='8'";
$pdo->query($sql);
*/

/* 練習:刪除資料表內容
$sql="delete from `students` where `id`='479'";
$pdo->query($sql);
*/

/* 在localhost網頁上呈現出執行的結果筆數
$sql="delete from `dept` where `id`='8'";
echo $pdo->exec($sql);  
*/
