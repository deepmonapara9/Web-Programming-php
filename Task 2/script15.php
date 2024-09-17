<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $number3 = $_POST['number3'];


    if ($number1 >= $number2 && $number1 >= $number3) {
        $largest = $number1;
    } elseif ($number2 >= $number1 && $number2 >= $number3) {
        $largest = $number2;
    } else {
        $largest = $number3;
    }
}

?>

<html>

<head>
    <title>Find the Largest Number</title>
</head>

<body>

    <h2>Enter Three Numbers</h2>
    <form method="post">
        Number 1: <input type="text" name="number1" required><br><br>
        Number 2: <input type="text" name="number2" required><br><br>
        Number 3: <input type="text" name="number3" required><br><br>
        <input type="submit" value="Find Largest">
    </form>

    <?php echo "<h3>The largest number is: " . $largest . "</h3>"; ?>

</body>

</html>