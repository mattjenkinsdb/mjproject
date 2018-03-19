<?php

include 'functions.php';

$id = $_GET['id'];
//Connect to DB
global $con;

$del = "DELETE FROM newtest WHERE id = $id";

if (mysqli_query($con, $del)) {
    mysqli_close($con);
    header('Location: /display.php'); 
    exit;
} else {
    echo "Error deleting record";
}

?>