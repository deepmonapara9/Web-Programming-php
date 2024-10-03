<!-- Create a PHP script that extracts a specific column from a multidimensional array using the array_column() function. -->

<?php

$records = array(
    array(
        'id' => 2135,
        'first_name' => 'Amit',
        'last_name' => 'Sharma',
    ),
    array(
        'id' => 3245,
        'first_name' => 'Priya',
        'last_name' => 'Verma',
    ),
    array(
        'id' => 5342,
        'first_name' => 'Raj',
        'last_name' => 'Patel',
    ),
    array(
        'id' => 5623,
        'first_name' => 'Anita',
        'last_name' => 'Singh',
    )
);

$first_names = array_column($records, 'first_name');
print_r($first_names);

?>