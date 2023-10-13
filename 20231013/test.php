<?php
echo "<h3>增加外框並直接顯示結果且有標頭的99乘法表</h3>";

echo "<table border='1'>";
echo "<tr>";
echo "<th>x</th>";
for ($i = 1; $i <= 9; $i++) {
    echo "<th>" . $i . "</th>";
}
echo "</tr>";

for ($j = 1; $j <= 9; $j++) {
    echo "<tr>";
    echo "<th>" . $j . "</th>";
    for ($i = 1; $i <= 9; $i++) {
        echo "<td>" . ($i * $j) . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>