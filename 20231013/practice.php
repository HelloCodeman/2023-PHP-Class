<h2>九九乘法表</h2>
<?php

/*

echo "1 x 1 = 1 , ";
echo "1 x 2 = 2 , ";
echo "1 x 3 = 3 , ";
.
.
.
echo "2 x 1 = 2 , ";
echo "2 x 2 = 4 , ";
echo "2 x 3 = 6 , ";
.
.
.
echo "9 x 1 = 2 , ";
echo "9 x 2 = 18 , ";
echo "9 x 3 = 27 , ";

*/

echo "<h3> 原型99乘法迴圈 </h3>";

echo "<br>";
for ($i=1;$i<=9;$i++){
    echo '2 * '.$i.' = '.(2*$i). "&nbsp&nbsp&nbsp&nbsp";
}
echo "<br>";
for ($i=1;$i<=9;$i++){
    echo '3 * '.$i.' = '.(3*$i). "&nbsp&nbsp&nbsp&nbsp";
}
echo "<br>";
for ($i=1;$i<=9;$i++){
    echo '4 * '.$i.' = '.(4*$i). "&nbsp&nbsp&nbsp&nbsp";
}
echo "<br>";
for ($i=1;$i<=9;$i++){
    echo '5 * '.$i.' = '.(5*$i). "&nbsp&nbsp&nbsp&nbsp";
}
echo "<br>";
for ($i=1;$i<=9;$i++){
    echo '6 * '.$i.' = '.(6*$i). "&nbsp&nbsp&nbsp&nbsp";
}
echo "<br>";
for ($i=1;$i<=9;$i++){
    echo '7 * '.$i.' = '.(7*$i). "&nbsp&nbsp&nbsp&nbsp";
}
echo "<br>";
for ($i=1;$i<=9;$i++){
    echo '8 * '.$i.' = '.(8*$i). "&nbsp&nbsp&nbsp&nbsp";
}
echo "<br>";
for ($i=1;$i<=9;$i++){
    echo '9 * '.$i.' = '.(9*$i). "&nbsp&nbsp&nbsp&nbsp";
}

echo "<h3> 巢狀迴圈 </h3>";

for($j=1;$j<=9;$j++){

    for ($i=1;$i<=9;$i++){

    echo $j . ' * '.$i.' = '.($j*$i). "&nbsp&nbsp&nbsp&nbsp";
    }

    echo "<br>";

}

echo "<h3> 增加外框的99乘法表 </h3>";

echo "<table border='1'>";
for($j=1;$j<=9;$j++){
    echo "<tr>";
    for ($i=1;$i<=9;$i++){
        echo "<td>" . $i . " x " . $j . " = " . ($i * $j) . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

echo "<h3> 增加外框並直接顯示結果的99乘法表 </h3>";

echo "<table border='1'>";
for($j=1;$j<=9;$j++){
    echo "<tr>";
    for ($i=1;$i<=9;$i++){
        echo "<td>" . ($i * $j) . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

echo "<h3> 增加外框並直接顯示結果且有標頭的99乘法表 </h3>";

echo "<table border='1'>";
for($j=0;$j<10;$j++){
    echo "<tr>";

    for ($i=0;$i<10;$i++){
         echo "<td>";
    
        if($i==0 && $j==0){
            echo "";
        }else if($j==0){
            echo $i ;
        }else if($i==0){
            echo $j ;
        }else{
            echo $j*$i ;
        }
        echo "</td>";
    }
    echo "</tr>";
}   
echo "</table>";


?>