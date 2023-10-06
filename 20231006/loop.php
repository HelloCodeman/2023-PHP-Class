<?php

// for(起始值;條件式;增減值){程式碼} //

$sum=0;

    for($i=1;$i<=10000;$i=$i+1){
        $sum=$sum+$i;
}

echo "1加到10000為" . $sum;

?>


<h1>迴圈練習<h1>
    <h3>使用for迴圈來產生以下的數列</h3>
    <u1>
        <li>1,3,5,7,9……n</li>
        <li>10,20,30,40,50,60……n</li>
        <li>3,5,7,11,13,17……97</li>
</u1>

<?php

$n=30;

for($i=1;$i<=$n;$i=$i+2){
echo $i;
echo ",";
}
echo "<hr>";
for($i=1;$i<=$n;$i++){
    echo $i*10;
    echo ",";
}
echo "<hr>";

$a=82;
$flag=true;

for($i = 2; $i <= $a ; $i++){
    echo "$a 除以 $i 餘數 ". ($a % $i);
    if(($a % $i) == 0){
$flag=false;
echo "<br>";
break;
}
echo "<br>";
}

if($flag==true){
    echo $a . "是質數";
}else{
    echo $a . "不是質數";

}      