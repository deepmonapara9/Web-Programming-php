<!-- Script to check if a given number is a palindrome or not and display the result. -->

<?php

$number = 121;
$originalNumber = $number;
$reverse = 0;

while ($number != 0) {
    $remainder = $number % 10;
    $reverse = $reverse * 10 + $remainder;
    $number = (int) $number / 10;
}

if ($originalNumber == $reverse) {
    echo "Number is a palindrome";
} else {
    echo "Number is not a palindrome";
}

?>