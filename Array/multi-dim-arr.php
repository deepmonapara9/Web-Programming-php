<!-- Multidimensional Indexed Array:
Create a multidimensional indexed array that contains the names of 3 students and their respective scores in 3 subjects. 
Display the score of each student. -->

<?php

$students = array(
    array("abc", 90, 80, 85),
    array("def", 85, 85, 90),
    array("ghi", 95, 90, 95)
);

for ($i = 0; $i < count($students); $i++) {
    echo "Name: " . $students[$i][0] . "<br>";
    echo "Subject 1: " . $students[$i][1] . "<br>";
    echo "Subject 2: " . $students[$i][2] . "<br>";
    echo "Subject 3: " . $students[$i][3] . "<br>";
    echo "<br>";
}

?>