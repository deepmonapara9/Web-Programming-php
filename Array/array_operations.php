<!-- Array Operations:
Write a PHP script to add two more fruits to the array from Exercise 1 and remove the first fruit. Display the modified array using print_r(). -->

<?php

$fruits = array("Apple", "Banana", "Orange", "Mango", "Grapes");

array_push($fruits, "Pineapple", "Strawberry");

array_shift($fruits);

print_r($fruits);

?>