<!-- Multidimensional Associative Array:
Write a PHP script to create a multidimensional associative array where each key is a city name and the value is an associative array of information (population, area, and country). Display the information for each city. -->

<?php

$cities = array(
    "Mumbai" => array("Population" => "12,442,373", "Area" => "603.4 km²", "Country" => "India"),
    "Delhi" => array("Population" => "11,034,555", "Area" => "1,484 km²", "Country" => "India"),
    "Bangalore" => array("Population" => "8,443,675", "Area" => "709 km²", "Country" => "India"),
    "Hyderabad" => array("Population" => "6,809,970", "Area" => "650 km²", "Country" => "India"),
    "Ahmedabad" => array("Population" => "5,570,585", "Area" => "464 km²", "Country" => "India"),
    "Chennai" => array("Population" => "7,088,000", "Area" => "426 km²", "Country" => "India")
);

foreach ($cities as $city => $info) {
    echo "City: " . $city . "<br>";
    echo "Population: " . $info["Population"] . "<br>";
    echo "Area: " . $info["Area"] . "<br>";
    echo "Country: " . $info["Country"] . "<br><br>";
}

?>