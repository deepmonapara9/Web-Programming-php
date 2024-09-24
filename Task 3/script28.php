<!-- Develop a PHP script that sorts an array of integers in ascending order using the sort() function. -->

<?php

$numbers = array(5, 3, 7, 1, 9, 2, 8, 4, 6, 10);

sort($numbers);

echo "Sorted array in ascending order: ";

for ($i = 0; $i < count($numbers); $i++) {
    echo $numbers[$i] . " ";
}

?>