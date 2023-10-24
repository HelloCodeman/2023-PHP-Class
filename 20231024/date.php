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

<h2>利用date()函式的格式化參數，完成以下的日期格式呈現</h2>

<li>2021/10/05</li>
<li>10月5日 Tuesday</li>
<li>2021-10-5 12:9:5</li>
<li>2021-10-5 12:09:05</li>
<li>今天是西元2021年10月5日 上班日(或假日)</li>
<br>

<?php

$today = date("2021/10/05");  
echo $today;
echo "<br>";
echo date("10月5日 1");
echo "<br>";
echo date("Y-m-d H:i:s");
echo "<br>";
echo date("Y-n-j G:i:s");
echo "<br>";

echo date("今天是西元Y年m月d日");

if(date("N")<=5){
    echo "上班日";
}else{
    echo "假日";
}
?>

<h2>利用迴圈來計算連續五個周一的日期</h2>

<li>2021-10-04 星期一</li>
<li>2021-10-11 星期一</li>
<li>2021-10-18 星期一</li>
<li>2021-10-25 星期一</li>
<li>2021-11-01 星期一</li>

<?php

/*
$date=strtotime('today');
$mondays=array();
*/

echo "<br>";

$todayWeek=date("N");
$diff=1-$todayWeek;
$lastMonday=strtotime("$diff days");
$nextMonday=date("Y-m-d",strtotime("+1 week",$lastMonday));

for($i=0;$i<5;$i++){
    $nextMonday=date("Y-m-d l",strtotime("+1 week",strtotime($nextMonday)));
    echo $nextMonday;
    echo "<br>";
}

?>
