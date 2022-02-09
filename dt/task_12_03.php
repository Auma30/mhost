<?php

$n1 = mt_rand(0, 10);
$n2 = mt_rand(0, 10);
$n3 = mt_rand(1, 10);

function diff ($n1, $n2, $n3) {
    return ($n1 - $n2) / $n3;
}

echo "n1 = $n1 <br> n2 = $n2 <br> n3 = $n3";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task_12_03</title>
</head>
<body>
    <p>
        Сделайте функцию, которая отнимает от первого числа второе и делит на третье.
    </p>
    <?php
        echo "($n1 - $n2) / $n3 =" . diff($n1, $n2, $n3);
    ?>
</body>
</html>