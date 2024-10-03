<!-- Develop a PHP script that uses the array_key_first() and array_key_last() functions to retrieve the first and last keys of an array. -->

<?php

$age = array("Amit"=>"35", "Raj"=>"37", "Priya"=>"43");

echo array_key_first($age)."\n";

echo array_key_last($age)."\n";

?>