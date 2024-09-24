<!-- Create a PHP script that removes duplicate values from an array using the array_unique() function. -->

<?php

$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 1, 2, 3, 4);

$uniqueNumbers = array_unique($numbers);

echo "Original array: ";

for ($i = 0; $i < count($numbers); $i++) {
    echo $numbers[$i] . " ";
}

echo "\n";
// echo "<br>";

echo "Array with duplicate values removed: ";

for ($i = 0; $i < count($uniqueNumbers); $i++) {
    echo $uniqueNumbers[$i] . " ";
}

?>