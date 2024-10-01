<!-- Array Sorting:
Write a PHP script to sort the array of fruits in ascending and descending order, and display both sorted arrays. -->

<?php

$fruits = array("Banana", "Apple", "Orange", "Grapes", "Mango");

sort($fruits);

echo "Ascending Order: <br>";
foreach ($fruits as $value) {
    echo $value . "<br>";
}

echo "<br>";

rsort($fruits);

echo "Descending Order: <br>";
foreach ($fruits as $value) {
    echo $value . "<br>";
}

?>