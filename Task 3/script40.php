<!-- Develop a PHP script to remove and replace elements from an array using the array_splice() function. -->

<?php

$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

echo "Original array: ";

for ($i = 0; $i < count($numbers); $i++) {
    echo $numbers[$i] . " ";
}

echo "\n";

// Remove elements from the array
array_splice($numbers, 3, 2);

echo "Array after removing elements: ";

for ($i = 0; $i < count($numbers); $i++) {
    echo $numbers[$i] . " ";
}

echo "\n";

// Replace elements in the array
array_splice($numbers, 3, 2, array(11, 12, 13));

echo "Array after replacing elements: ";

for ($i = 0; $i < count($numbers); $i++) {
    echo $numbers[$i] . " ";
}

?>