<!-- Write a PHP script to shuffle the elements of an array using the shuffle() function. -->

<?php

$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

shuffle($numbers);

echo "Shuffled array: ";

for ($i = 0; $i < count($numbers); $i++) {
    echo $numbers[$i] . " ";
}

?>