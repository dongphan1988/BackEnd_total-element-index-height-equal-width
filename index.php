<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    input your array length
    <input type="text" name="length"/>
    <input type="submit" value="CHECK TOTAL"/>
</form>
<?php
// Hàm tính tổng các giá trị tại phần tử có vị trí cao và rộng bằng nhau;
function totalValueDiagonal($array)
{
    echo "<h3>Total height equal width</h3><br>";
    $total = 0;
        for ($index = 0; $index < count($array); $index++) {
            for ($index1 = 0; $index1 < count($array); $index1++) {
                if ($index == $index1) {
                    $total += $array[$index][$index1];
                }
            }
        }
    echo $total;
}
// Hàm in ra các vị trí trong mảng
function showArray($array)
{
    echo "<h1>Your Array : </h1>";
    for ($index = 0; $index < count($array); $index++) {
        for ($index1 = 0; $index1 < count($array); $index1++) {
            echo "($index , $index1)"." = ".$array[$index][$index1]."<br>";
        }
    }
}
// Hàm in ra các vị trí có chiều cao và chiều rộng bằng nhau
function IndexEqual($array)
{
    echo "<h2>positions height equal width</h2>";
    for ($index = 0; $index < count($array); $index++) {
        for ($index1 = 0; $index1 < count($array); $index1++) {
            if ($index == $index1) {
                echo "($index , $index1) = ".$array[$index][$index1]."<br>";
            }
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $arrLength = $_POST["length"];
    $array = [];
    for ($index = 0; $index < $arrLength; $index++) {
        $array[] = [];
        for ($index2 = 0; $index2 < $arrLength; $index2++) {
            $array[$index][] = mt_rand(0, 1000);
        }
    }
    showArray($array);
    indexEqual($array);
    totalValueDiagonal($array);
}
?>
</body>
</html>
