<?php

if (!empty($_GET)) {

    if ($_GET['weight'] != "" && $_GET['height'] != "") {

        $height = $_GET['height'];
        $weight = $_GET['weight'];

        $bmi = round($weight / ($height * $height), 2);
        /*  echo "身高:" . $height;
          echo "<br>";
          echo "體重:" . $weight;
          echo "<br>";
          echo "BMI:" . $bmi; */

        header("location:bmi.php?w=$weight&h=$height&bmi=$bmi");
    } else {
        header("location:bmi.php?m=請輸入身高或體重資訊");
    }
} else {
    header("location:bmi.php?m=請輸入必要資訊");
}

?>