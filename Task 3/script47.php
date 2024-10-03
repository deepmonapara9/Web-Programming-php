<!-- Write a PHP script that applies a user-defined function to all elements of an array using the array_map() function. -->

<?php

function myfunction($v)
{
  return($v*$v);
}

$a=array(1,2,3,4,5);

print_r(array_map("myfunction",$a));

?>