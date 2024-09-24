<!-- Write a PHP script that finds the intersection of two arrays using the array_intersect() function. -->

<?php

$arr1 = array(1, 2, 3, 4, 5);

$arr2 = array(3, 4, 5, 6, 7);

$intersectedArray = array_intersect($arr1, $arr2);

$intersectedArray = array_values($intersectedArray);

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

echo "Intersected array: ";

for ($i = 0; $i < count($intersectedArray); $i++) {
    echo $intersectedArray[$i] . " ";
}

?>