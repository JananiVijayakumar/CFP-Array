<?php
$number1 = readline('Enter the value 1 :');
$number2 = readline('Enter the value 2 :');
$number3 = readline('Enter the values 3 :');
$numArray = array($number1, $number2, $number3);
$sum = 0;
for ($i = 0; $i < count($numArray); $i++) {
    $sum = $sum + $numArray[$i];
}
echo "Sum of given array = " . $sum;
