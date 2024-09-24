<!-- Write a PHP script to reverse the elements of an array using the array_reverse() function. -->

<?php

$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

$reversedNumbers = array_reverse($numbers);

echo "Original array: ";

for ($i = 0; $i < count($numbers); $i++) {
    echo $numbers[$i] . " ";
}

echo "\n";
// echo "<br>";

echo "Reversed array: ";

for ($i = 0; $i < count($reversedNumbers); $i++) {
    echo $reversedNumbers[$i] . " ";
}

?>