<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2024月曆</title>
    <style>
        body {
            text-align: center;
            background-color: #f7f7f7;
            /* 背景色 */
            font-family: Arial, sans-serif;
            /* 字體 */
            margin: 0;
            padding: 0;
        }

        table {
            border-collapse: collapse;
            border: 3px double #999;
            margin: 20px auto;
            /* 調整邊距 */
            background-color: #fff;
            /* 表格背景色 */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            /* 表格陰影效果 */
        }

        td {
            border: 1px solid #999;
            padding: 10px 20px;
            text-align: center;
            font-size: 18px;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 20px;
        }

        ul li {
            display: inline-block;
            font-size: 18px;
            margin-right: 20px;
        }

        h3 {
            background-color: #3498db;
            /* 標題背景色 */
            color: #fff;
            /* 標題文字顏色 */
            padding: 10px;
            font-size: 24px;
        }
    </style>
</head>

<body>
    <ul>
        <li><a href="01.php">一月</a></li>
        <li><a href="02.php">二月</a></li>
        <li><a href="03.php">三月</a></li>
        <li><a href="04.php">四月</a></li>
        <li><a href="05.php">五月</a></li>
        <li><a href="06.php">六月</a></li>
        <li><a href="07.php">七月</a></li>
        <li><a href="08.php">八月</a></li>
        <li><a href="09.php">九月</a></li>
        <li><a href="10.php">十月</a></li>
        <li><a href="11.php">十一月</a></li>
        <li><a href="12.php">十二月</a></li>
    </ul>
    <?php
    echo "<h3>";
    echo date("西元Y年m月");
    echo "</h3>";
    $thisMonth = date("Y");
    $thisFirstDay = date("Y-m-1");
    $thisFirstDate = date('w', strtotime($thisFirstDay));
    $thisMonthDays = date("t");
    $thisLastDay = date("Y-m-$thisMonthDays");
    $weeks = ceil(($thisMonthDays + $thisFirstDate) / 7);
    $firstCell = date("Y-m-d", strtotime("-$thisFirstDate days", strtotime($thisFirstDay)));
    echo "<table>";
    echo "<tr>";
    echo "<td style='background-color: #3498db; color: #fff;'>日</td>";
    echo "<td style='background-color: #3498db; color: #fff;'>一</td>";
    echo "<td style='background-color: #3498db; color: #fff;'>二</td>";
    echo "<td style='background-color: #3498db; color: #fff;'>三</td>";
    echo "<td style='background-color: #3498db; color: #fff;'>四</td>";
    echo "<td style='background-color: #3498db; color: #fff;'>五</td>";
    echo "<td style='background-color: #3498db; color: #fff;'>六</td>";
    echo "</tr>";
    for ($i = 0; $i < $weeks; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 7; $j++) {
            $addDays = 7 * $i + $j;
            $thisCellDate = strtotime("+$addDays days", strtotime($firstCell));
            if (date('w', $thisCellDate) == 0 || date('w', $thisCellDate) == 6) {
                echo "<td style='background: pink;'>";

            } else {
                echo "<td>";
            }
            if (date("m", $thisCellDate) == date("m", strtotime($thisFirstDay))) {
                echo date("j", $thisCellDate);
            }
            echo "</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
    ?>

</body>

</html>