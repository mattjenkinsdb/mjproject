<?php
$con = mysqli_connect('localhost', 'root', 'Digitalbox2018!', 'test');
    
    if($con) {
    
    echo "Connected";
    
    } else {
    
    die("Database connection failed");
    
    }
?>