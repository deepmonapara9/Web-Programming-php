<!-- Develop a PHP script to fill an array with a specific value using the array_fill() function. -->

<?php

$keys = array("a", "b", "c", "d", "e");

$a = array_fill_keys($keys, "blue");

print_r($a);

?>