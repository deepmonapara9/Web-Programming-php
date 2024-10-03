<!-- Write a PHP script that removes duplicate values from an associative array using the array_unique() function. -->

<?php

$age = array("Amit"=>"35", "Raj"=>"37", "Priya"=>"43", "Raj"=>"37");

print_r(array_unique($age));

?>