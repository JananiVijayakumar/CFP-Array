<?php
$arr = array(array(1, 2, 3), array(4, 5, 6), array(7, 8, 9));
$sum = 0;
for ($i = 0; $i < 2; $i++) {
    for ($j = 0; $j < 2; $j++) {
        echo $arr[$i][$j] . " ";
        $sum = $sum + $arr[$i][$j];
    }
    echo "\n";
}
echo "sum of array:" . $sum;
