<h2>找出五百年內的閏年</h2>
<li>請依照閏年公式找出五百年內的閏年</li>
<li>使用陣列來儲存閏年</li>
<li>使用迴圈來印出閏年</li>

<?php

/*

閏年規則

if(($year%4==0 && $year%100 != 0) || $year %400 ==0){
    echo $year."是閏年";
}else{
    echo $year."是平年";
}

從2023~到2523
$years=[];
*/

echo "<br>";

$years=[];

for($i = 2023; $i <= 2523; $i++){
    if (($i%4 == 0 && $i%100 != 0) || $i% 400 == 0) {
        $years[]=$i;
    }
}

foreach ($years as $key => $year) {
    echo $year."<br>";
}

?>