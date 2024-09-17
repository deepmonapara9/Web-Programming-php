<!-- Develop a PHP script that takes a sentence as input and counts the number of vowels in it. -->

<?php

$sentence = $_POST['sentence'];

$vowels = 0;

for ($i = 0; $i < strlen($sentence); $i++) {
    if ($sentence[$i] == 'a' || $sentence[$i] == 'e' || $sentence[$i] == 'i' || $sentence[$i] == 'o' || $sentence[$i] == 'u') {
        $vowels++;
    }
}

?>

<html>

<head>
    <title>Find the Voewel</title>
</head>

<body>

    <h2>Enter Sentence</h2>
    <form method="post">
        Enter Here: <input type="text" name="sentence" required><br><br>
        <input type="submit" value="Submit">
    </form>

    <?php echo "Number of vowels in the sentence are: " . $vowels; ?>

</body>

</html>