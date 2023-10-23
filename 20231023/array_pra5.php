<h2>請設計一支程式，在不產生新陣列的狀況下，將一個陣列的元素順序反轉(利用迴圈)</h2>

<li>例：$a=[2,4,6,1,8] 反轉後 $a=[8,1,6,4,2]</li>

<?php
$a=[2,4,6,1,8];

echo "<pre>";
print_r($a);
echo "</pre>";

?>

<?php

for($i=0;$i<floor(count($a)/2);$i++){
    $tmp=$a[$i];
    $a[$i]=$a[count($a)-1-$i];
    $a[count($a)-1-$i]=$tmp;
}

echo "<pre>";
print_r($a);
echo "</pre>";


?>