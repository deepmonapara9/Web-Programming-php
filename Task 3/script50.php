<!-- Write a PHP script to filter the elements of an array based on a specified condition using the array_filter() function. -->

<?php

function test_odd($var)
{
  return($var & 1);
}

$a=array(1,2,3,4,5,6,7,8,9);

print_r(array_filter($a,"test_odd"));

?>