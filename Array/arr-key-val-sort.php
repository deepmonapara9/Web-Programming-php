<!-- Array Key and Value Sorting:
Write a PHP script to sort the associative array by keys (countries) in ascending order and then by values (capitals) in descending order. Display both sorted arrays. -->

<?php

$countries = array("India" => "New Delhi", "USA" => "Washington D.C.", "UK" => "London", "Australia" => "Canberra", "Japan" => "Tokyo");

ksort($countries);

echo "Ascending Order: <br>";
foreach ($countries as $key => $value) {
    echo "The capital of " . $key . " is " . $value . "<br>";
}

echo "<br>";

arsort($countries);

echo "Descending Order: <br>";
foreach ($countries as $key => $value) {
    echo "The capital of " . $key . " is " . $value . "<br>";
}

?>