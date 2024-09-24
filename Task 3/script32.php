<!-- Write a PHP script to merge two arrays using the array_merge() function and display the combined result. -->

<?php

$arr1 = array(1, 2, 3, 4, 5);
$arr2 = array(6, 7, 8, 9, 10);

$mergedArray = array_merge($arr1, $arr2);

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

echo "Merged array: ";

for ($i = 0; $i < count($mergedArray); $i++) {
    echo $mergedArray[$i] . " ";
}

?>