<?php
//自訂函式
$c = 20;
function sum($a, $b, $c)
{
    global $c;
    // global=全域參數
    $sum = $a + $b + $c;
    echo "輸入:" . $a . "、" . $b . "、" . $c;
    echo "<br>";
    return $sum;
}

$sum = sum(10, 20, 30);
echo "總和是：" . $sum;
echo "<hr>";
$sum = sum(17, 32, 44);
echo "總和是：" . $sum;
echo "<hr>";

echo "總和是:" . sum(56, 77, 4);
?>

<h2>不定參數的用法</h2>
<?php
function sum2(...$arg)
// {
//     print_r($arg);
// }
{
    $total = array_sum($arg);
    return $total;
}

echo sum2(10, 20); // 輸出:30
echo "<hr>";
echo sum2(10, 20, 77); // 輸出:107
echo "<hr>";
echo sum2(10, 27, 4, 7, 1, 543); // 輸出:633
echo "<hr>";

?>

<h4>遇到數值非為數字時會error 改善方法如下:</h4>

<?php
function sum3(...$arg)
{
    $sum = 0;
    foreach ($arg as $num) {
        if (is_numeric($num)) {
            $sum += $num;
        }
    }
    return $sum;
}

// 通過 foreach 迴圈跑過 $arg 陣列中的每個元素
// 在迴圈中，使用 is_numeric() 函式來檢查每個元素是否為數值(數字)型態
// 如果是數字的話，就將該數字加到 $sum 變數中。

echo sum3(1, 2);
echo "<hr>";
echo sum3(23, 45, 89);
echo "<hr>";
echo sum3(23, 98, 34, 89, 22, 3, 4);
echo "<hr>";


?>