<!-- index -->
<!-- del button -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 80%;
            margin: 0 auto;
            font-size: 28px;
        }

        table,
        tr,
        td,
        th {
            text-align: center;
            border: 1px solid black;
            border-collapse: collapse;
        }



        .text-center {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <h3 class="text-center"><span>User</span> List</h3>
        <table>
            <tr>
                <th width="15%">id</th>
                <th width="15%"> name</th>
                <th>oprate</th>
            </tr>
            <?php foreach ($variable as $key => $value) : ?>
                <tr>
                    <td>1</td>
                    <td>amy</td>
                    <td></td>
                </tr>
            <?php endforeach; ?>



        </table>
    </div>
</body>

</html>