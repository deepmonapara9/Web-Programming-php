<!-- Create a PHP script that adds elements to an associative array using the array_push() function. -->

<?php

$age = array("Amit"=>"35", "Raj"=>"37", "Priya"=>"43");

array_push($age, "Rahul", "40");

print_r($age);

?>