<h2>建立一個學生成績陣列</h2>

<?php

/*
$subject=["國文","英文","數學","地理","歷史"];
$Helen=[85, 78, 70, 90, 84];
$Toyz=[92, 89, 54, 81, 71];
$Stanley=[78, 75, 68, 70, 62];
$Kano=[90, 84, 77, 54, 42];
$Bravo=[88, 91, 80, 62, 64];

*/

// 創建一個包含學生的數學和科學成績的表格
$student_grades = [
    // 表頭
    "學生" => ["國文", "英文","數學","地理","歷史"],
    
    // 學生1
    "Helen" => [85, 78, 70, 90, 84],
    
    // 學生2
    "Toyz" => [92, 89, 54, 81, 71],
    
    // 學生3
    "Stanley" => [78, 75, 68, 70, 62],
    
    // 學生4
    "Kano" => [90, 84, 77, 54, 42],
    
    // 學生5
    "Bravo" => [88, 91, 80, 62, 64],
    
];

// 訪問表格中的成績
echo "<table border='2'>";
foreach ($student_grades as $student => $grades) {
    echo "<tr>";
    echo "<td>$student</td>";
    foreach ($grades as $grade) {
        echo "<td>$grade</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>

<h2>利用程式來產生陣列</h2>

<?php

$nine=[];

for($j=1;$j<=9;$j++){

    for($i=1;$i<=9;$i++){
    $nine[]= " $j * $i = ".($j * $i) ;
    }
}
// print_r($nine);

echo "<table border='2'>";

foreach($nine as $idx => $value){
    if($idx%9==0){

    echo "<tr>";
    echo "<td>$value</td>";
    }else if($idx%9==8){
        echo "<td>$value</td>
        </td>";
    }else{
        echo "<td>$value</td>";
    }

}
echo "</table>";

?>

  
