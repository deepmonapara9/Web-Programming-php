<!-- Update Associative Array:
Add a new country-capital pair to the array from Exercise 6 and update the capital of one existing country. Display the updated array using foreach. -->

<?php

$countries = array("India" => "New Delhi", "USA" => "Washington D.C.", "UK" => "London", "Australia" => "Canberra", "Japan" => "Tokyo");

$countries["France"] = "Paris";

$countries["India"] = "Gandhinagar";

foreach ($countries as $key => $value) {
    echo "The capital of " . $key . " is " . $value . "<br>";
}

?>