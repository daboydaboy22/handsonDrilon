<?php
$numA = 2;
$numB = 97;
$numC = 35;

function largestNumber($a, $b, $c) {
    if ($a >= $b && $a >= $c) {
        return $a;
    } elseif ($b >= $a && $b >= $c) {
        return $b;
    } else {
        return $c;
    }
}

echo "numA = $numA<br>";
echo "numB = $numB<br>";
echo "numC = $numC<br>";

$largest = largestNumber($numA, $numB, $numC);
echo "The largest number is $largest";
?>