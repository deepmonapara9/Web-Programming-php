<!-- Develop a PHP script to merge two associative arrays using the array_merge() function and display the combined result. -->

<?php

$age = array("Amit"=>"35", "Raj"=>"37", "Priya"=>"43");
$age2 = array("Rahul"=>"40", "Rohan"=>"38");

print_r(array_merge($age, $age2));

?>