<?php
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
