<!-- Write a PHP script that generates a random number between 1 and 10 and lets the user guess it. -->

<?php

$randomNumber = rand(1, 10);

if (isset($_POST['submit'])) {
    $guess = $_POST['guess'];

    if ($guess == $randomNumber) {
        echo "Congratulations! You guessed the correct number.";
    } else {
        echo "Sorry, the correct number was: " . $randomNumber;
    }
}

?>