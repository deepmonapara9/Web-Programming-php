<!-- Create an Associative Array:
Write a PHP script to create an associative array with key-value pairs where the keys are the names of 5 countries, and the values are their capitals. Display the country-capital pairs. -->

<?php

$countries = array("India" => "New Delhi", "USA" => "Washington D.C.", "UK" => "London", "Australia" => "Canberra", "Japan" => "Tokyo");

foreach ($countries as $key => $value) {
    echo "The capital of " . $key . " is " . $value . "<br>";
}   

?>