<?php
$numArr = array(10, 32, 11, 22, 44, 23, 7, 0, 4, 5, 3);
for ($i = 0; $i < count($numArr); $i++) {
    if ($numArr[$i] % 2 == 0) {
        @$even = $even + $numArr[$i];
    } else {
        @$odd = $odd + $numArr[$i];
    }
}
echo "Sum of Odd Numbers : " . $odd . "\n";
echo "Sum of Even Numbers : " . $even;
