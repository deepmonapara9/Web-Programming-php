<!-- Develop a PHP script that takes a positive integer as input and checks whether it is a prime number. -->

<?php

$number = 20;
$prime = true;

for ($i = 2; $i < $number; $i++) {
    if ($number % $i == 0) {
        $prime = false;
        break;
    }
}

if ($prime) {
    echo "Number is prime";
} else {
    echo "Number is not prime";
}


?>