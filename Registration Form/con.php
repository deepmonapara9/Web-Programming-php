<?php

$con = mysqli_connect('localhost', 'admin', 'admin123', 'user');
if (!$con) {
    die('Connection Error: ' . mysqli_connect_error());
} else {
    echo 'Connection Successful<br>';
}
