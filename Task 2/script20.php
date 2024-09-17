<!-- Script to find the factorial of a given number and display the result. -->

<?php

$number = 3;
$factorial = 1;

for ($i = 1; $i <= $number; $i++) {
    $factorial *= $i;
}

echo "Factorial of $number is: " . $factorial;

?>