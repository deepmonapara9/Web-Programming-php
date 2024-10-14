<?php

// Include the connection file
include 'con.php';

if (isset($_POST['submit'])) {
    // Collect form data
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $mobno = $_POST['mobno'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Create the SQL query
    $sql = "INSERT INTO `user_details` (`fname`, `mname`, `lname`, `email`, `mobno`, `address`, `city`, `state`, `country`, `password`) 
            VALUES ('$fname','$mname','$lname','$email','$mobno','$address','$city','$state','$country','$password')";

    // Execute the query
    $exc = mysqli_query($con, $sql);

    if ($exc) {
        echo 'Data Inserted Successfully';
    } else {
        // Show detailed error message if insertion fails
        echo 'Data Insertion Failed: ' . mysqli_error($con);
    }
}

mysqli_close($con);
?>
