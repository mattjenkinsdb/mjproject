<?php 

$con = mysqli_connect('localhost', 'root', 'Digitalbox2018!', 'test');
    
    if(!$con) {
    
    die("Database connection failed");
    
    };

function connect(){

if(isset($_POST['submit'])) {
   
$firstname = $_POST['firstname'];
$surname = $_POST['surname'];
$os = $_POST['os'];
$laptop = $_POST['laptop'];
$RAM = $_POST['RAM'];
$processor = $_POST['processor'];
$monitor = $_POST['monitor'];
$purchase_date = $_POST['purchase_date'];
    
    
    global $con;

    $query = "INSERT INTO newtest(firstname,surname,os,laptop,RAM,processor,monitor,purchase_date)";
    $query .= "VALUES ('$firstname', '$surname', '$os', '$laptop', '$RAM', '$processor', '$monitor', '$purchase_date')";

    $result = mysqli_query($con, $query);

    if (!$result) {

        die('Query FAILED');
    }
    


}};?>