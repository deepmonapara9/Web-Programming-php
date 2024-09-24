<!-- Develop a PHP script to check if a specific value exists in an array using the in_array() function. -->

<?php

$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

$searchElement = 5;
// $searchElement = 11;

if (in_array($searchElement, $numbers)) {
    echo "Element " . $searchElement . " exists in the array";
} else {
    echo "Element " . $searchElement . " does not exist in the array";
}

?>