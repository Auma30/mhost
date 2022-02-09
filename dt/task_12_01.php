<?php

function squareNumber($a) {
    return $a * $a;
}

$a = mt_rand(1, 10);
//var_dump($a);
echo 'number = ' . $a . '<br>';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task_12_01</title>
</head>
<body>
    <p>
        1. Сделайте функцию, которая возвращает квадрат числа.<br>
        Число передается параметром.
    </p>

    <?php
        echo 'square = ' . squareNumber($a) . '<br>';
    ?>
</body>
</html>

