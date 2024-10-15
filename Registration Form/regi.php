<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection
include 'con.php';

// Check if form was submitted
if (isset($_POST['submit'])) {
    // Debug: print the submitted form data
    // print_r($_POST);

    // Collect form data and sanitize inputs
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $age = mysqli_real_escape_string($con, $_POST['age']);
    $course = mysqli_real_escape_string($con, $_POST['course']);

    // Prepare the SQL query
    $sql = "INSERT INTO `user_data`(`name`, `age`, `course`) VALUES ('$name', '$age', '$course')";

    // Debug: print the SQL query
    // echo "SQL Query: " . $sql . "<br>";

    // Execute the query
    if (mysqli_query($con, $sql)) {
        echo 'Data Inserted Successfully';
    } else {
        // Show detailed error message if insertion fails
        echo 'Data Insertion Failed: ' . mysqli_error($con);
    }
}

// Close the connection
mysqli_close($con);
?>
