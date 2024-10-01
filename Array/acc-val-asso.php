<!-- Access Values in Associative Array:
Write a PHP script to access and display the capital of a specific country from the associative array created in Exercise 6. -->

<?php

$countries = array("India" => "New Delhi", "USA" => "Washington D.C.", "UK" => "London", "Australia" => "Canberra", "Japan" => "Tokyo");

echo "The capital of India is " . $countries["India"];

?>