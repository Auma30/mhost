<?php

$n1 = mt_rand(0, 100);
$n2 = mt_rand(0, 100);

function sum ($n1, $n2) {
    return $n1 + $n2;
}

echo "n1 = $n1 <br> n2 = $n2";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task_12_02</title>
</head>
<body>
    <p>
        Сделайте функцию, которая возвращает сумму двух чисел.<br> 
        Числа передаются параметрами функции.
    </p>
    <?='sum = ' . sum($n1, $n2);?>
</body>
</html>