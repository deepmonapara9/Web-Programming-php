<!-- Create a PHP script to check if a specific key exists in an associative array using the array_key_exists() function. -->

<?php

$student = array("name" => "abc", "age" => 18, "course" => "PHP");

$key = "age";
// $key = "class";

if (array_key_exists($key, $student)) {
    echo "Key " . $key . " exists in the associative array";
} else {
    echo "Key " . $key . " does not exist in the associative array";
}

?>