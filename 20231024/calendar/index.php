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
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #333;
            /* 背景颜色 */
            color: #fff;
            /* 文字颜色 */
            padding: 10px;
            /* 内边距 */
            display: flex;
            justify-content: space-between;
            /* 将链接放在导航栏两侧 */
            align-items: center;
            /* 垂直居中 */
        }

        .navbar a {
            text-decoration: none;
            /* 去掉链接下划线 */
            color: #fff;
            /* 链接颜色 */
            margin: 0 10px;
            /* 链接之间的间距 */
        }

        .navbar a:hover {
            text-decoration: underline;
            /* 鼠标悬停时显示下划线 */
        }

        table {
            border-collapse: collapse;
            border: 3px double #999;
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        td {
            border: 1px solid #999;
            padding: 35px 75px;
            text-align: center;
            font-size: 38px;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 5px;

        }

        ul li {
            display: inline-block;
            font-size: 14px;
        }
    </style>
</head>

<body>

    <div class="navbar">
        <a href="index.php?year=2024&month=10">上一個月</a>
        <h3>
            <?php
            $currentYear = date("Y");
            $currentMonth = date("m");
            echo "西元" . $currentYear . "年" . $currentMonth . "月";
            ?>
        </h3>
        <a href="index.php?year=2024&month=12">下一個月</a>
    </div>

    <?php
    $thisMonth = date("Y");
    $thisFirstDay = date("Y-m-1");
    $thisFirstDate = date('w', strtotime($thisFirstDay));
    $thisMonthDays = date("t");
    $thisLastDay = date("Y-m-$thisMonthDays");
    $weeks = ceil(($thisMonthDays + $thisFirstDate) / 7);
    $firstCell = date("Y-m-d", strtotime("-$thisFirstDate days", strtotime($thisFirstDay)));
    echo "<table>";
    echo "<tr>";
    echo "<td>日</td>";
    echo "<td>一</td>";
    echo "<td>二</td>";
    echo "<td>三</td>";
    echo "<td>四</td>";
    echo "<td>五</td>";
    echo "<td>六</td>";
    echo "</tr>";
    for ($i = 0; $i < $weeks; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 7; $j++) {
            $addDays = 7 * $i + $j;
            $thisCellDate = strtotime("+$addDays days", strtotime($firstCell));
            if (
                date('w', $thisCellDate) == 0 ||
                date('w', $thisCellDate) == 6
            ) {
                echo "<td style='background:pink'>";
            } else {
                echo "<td>";
            }
            if (
                date(
                    "m",
                    $thisCellDate
                ) == date("m", strtotime($thisFirstDay))
            ) {
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