<!-- Create a PHP script to check if a given year is a leap year and display the result. -->

<html>

<head>
    <title>Find the Leap Year</title>
</head>

<body>

    <h2>Enter Year</h2>
    <form method="post">
        Enter Here: <input type="text" name="year" required><br><br>
        <input type="submit" value="Submit">
    </form>


</body>

</html>

<?php

$year = $_POST['year'];

if ($year % 4 == 0) {
    if ($year % 100 == 0) {
        if ($year % 400 == 0) {
            echo "Year is a leap year";
        } else {
            echo "Year is not a leap year";
        }
    } else {
        echo "Year is a leap year";
    }
} else {
    echo "Year is not a leap year";
}

?>