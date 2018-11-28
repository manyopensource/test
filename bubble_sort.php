<?php

//bubble sort

$a = [6, 5, 4, 3, 2, 1];
//$a = [6, -5, 14, 3, 5, -1];
$n = count($a);
$b = false;

for ($i = 0; $i < $n; $i++) {
    echo $a[$i], ', ';
}

echo '<br><br>';

for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n - 1; $j++) {
        if ($a[$j] > $a[$j + 1]) {
            $c = $a[$j];
            $a[$j] = $a[$j + 1];
            $a[$j + 1] = $c;
        }
        for ($k = 0; $k < $n; $k++) {
            echo $a[$k], ', ';
        }
        echo '<br>';
    }
    echo '<br>';
}

for ($i = 0; $i < $n; $i++) {
    echo $a[$i], ', ';
}