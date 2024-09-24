<!-- Write a PHP script to use the array_shift() function to remove an element from the beginning of an array and the array_unshift() function to add elements at the beginning. -->

<?php

$numbers = array(1, 2, 3, 4, 5);

echo "Initial array: ";

for ($i = 0; $i < count($numbers); $i++) {
    echo $numbers[$i] . " ";
}

echo "\n";

array_unshift($numbers, -2, -1, 0);

echo "Array after adding elements at the beginning: ";

for ($i = 0; $i < count($numbers); $i++) {
    echo $numbers[$i] . " ";
}

echo "\n";

array_shift($numbers);

echo "Array after removing the first element: ";

for ($i = 0; $i < count($numbers); $i++) {
    echo $numbers[$i] . " ";
}

?>