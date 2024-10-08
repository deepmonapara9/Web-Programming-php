<?php

$con = mysqli_connect('localhost', 'admin', 'admin123', 'mca_32');

if(!$con){
    echo 'Connection Error: ' . mysqli_connect_error();
} 
// else {
//     echo 'Connection Successful';
// }

?>