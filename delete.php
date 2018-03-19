
<?php

$id = $_GET['id'];
//Connect to DB
$con=mysqli_connect('localhost', 'root', 'jen009qm', 'test');
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$del = "DELETE FROM newtest WHERE id = $id";

if (mysqli_query($con, $del)) {
    mysqli_close($con);
    header('Location: /display.php'); //If book.php is your main page where you list your all records
    exit;
} else {
    echo "Error deleting record";
}

?>