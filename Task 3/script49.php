<!-- Develop a PHP script to split an array into chunks of a specified size using the array_chunk() function. -->

<?php

$age = array("Amit"=>"35", "Raj"=>"37", "Priya"=>"43");

print_r(array_chunk($age, 1, true));

?>