<h2>時間與日期</h2>

<?php

date_default_timezone_set('Asia/Taipei');

echo date("Y-m-d H:i:s");

echo "<br>";
$date = date_create('2000-01-01');
echo date_format($date, 'Y-m-d H:i:s');

?>

<h1>strtotime</h1>
<?php

echo strtotime("now");
$time=strtotime("now");
echo "<br>";
echo date("Y-m-d H:i:s",$time);

?>

<h2>給定兩個日期，計算中間間隔天數</h2>

<?php

$date1='2023-10-24';
$date2='2023-11-15';
$days=(strtotime($date2)-strtotime($date1))/(60*60*24);
echo "<br>";
echo $date1. '到' .$date2. "有" . $days ."天";

?>

<h2>計算距離自己下一次生日還有幾天</h2>

<?php

// 設置生日日期（以月、日和年份的格式）
$birthday = "1992-09-10"; // 用你的生日替換這裡

// 獲取當前日期
$currentDate = date("Y-m-d");

// 使用strtotime函數將日期字符串轉換为時間，然後計算秒數差
$birthdayTimestamp = strtotime($birthday);
$currentDateTimestamp = time(); //如果只需要算距離下一次生日有多少天
                                //不然可用 strtotime($currentDate);

// 計算距離下一次生日還有多少秒
$timeDiff = $birthdayTimestamp - $currentDateTimestamp;

// 將秒數轉換為天數
$days = floor($timeDiff / (60 * 60 * 24) / 365);

$absdays = abs($days);

if($days>0){
    echo $days;
}else{
        echo $days+365 ."天";
    }

?>
