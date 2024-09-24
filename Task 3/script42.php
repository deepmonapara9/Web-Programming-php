<!-- Create a PHP script that finds the difference between two arrays using the array_diff() function. -->

<?php

$arr1 = array(1, 2, 3, 4, 5);

$arr2 = array(3, 4, 5, 6, 7);

$differenceArray = array_diff($arr1, $arr2);

echo "Array 1: ";

for ($i = 0; $i < count($arr1); $i++) {
    echo $arr1[$i] . " ";
}

echo "\n";

echo "Array 2: ";

for ($i = 0; $i < count($arr2); $i++) {
    echo $arr2[$i] . " ";
}

echo "\n";

echo "Difference array: ";

for ($i = 0; $i < count($differenceArray); $i++) {
    echo $differenceArray[$i] . " ";
}

?>