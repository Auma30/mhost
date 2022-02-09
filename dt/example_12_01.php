<?php



    function cube($num) {
        return $num * $num * $num;
    }

    $num = mt_rand(1, 4);
    var_dump($num);
    echo '<br>';
    echo 'cub = ' . cube($num);

?>