<?php 

$con = mysqli_connect('localhost', 'root', 'Digitalbox2018!', 'test');
    
    if(!$con) {
    
    die("Database connection failed");
    
    };

function get_credentials(){

if(isset($_POST['submit'])) {

$username = isset($_POST['username']) ? $_POST['username'] : $_SESSION['username'];
$password = isset($_POST['password']) ? $_POST['password'] : $_SESSION['password'];

$_SESSION['username'] = $username;
$_SESSION['password'] = $password;

global $con;

$query = "SELECT * FROM `user_login_details` WHERE username='$username' and password='$password'";
//header( 'Location: form.php' );

$result = mysqli_query($con,$query)or die(mysqli_error());
$num_row = mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
if( $num_row ==1 )
     {
 $_SESSION['id']=$row['id'];
 header("Location: form.php");
 echo 'OMG IT WORKED';
 exit;
  }
  else
     {
 echo 'FAIL';
  }
}};


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
$image = $_FILES['image']['name'];
    
    
    global $con;

    $query = "INSERT INTO newtest(firstname,surname,os,laptop,RAM,processor,monitor,purchase_date,image)";
    $query .= "VALUES ('$firstname', '$surname', '$os', '$laptop', '$RAM', '$processor', '$monitor', '$purchase_date', '$image')";

    $result = mysqli_query($con, $query);

    if (!$result) {

        die('Query FAILED');
    }
    
}};

function edit(){

if(isset($_POST['submit'])) {
   
$firstname = $_POST['firstname'];
$surname = $_POST['surname'];
$os = $_POST['os'];
$laptop = $_POST['laptop'];
$RAM = $_POST['RAM'];
$processor = $_POST['processor'];
$monitor = $_POST['monitor'];
$purchase_date = $_POST['purchase_date'];
$id = $_GET['id'];
    
    
    global $con;

    $query = "UPDATE newtest SET(firstname='$surname', surname='$surname', os='$os', laptop='$laptop', RAM='$RAM', processor='$processor', monitor='$monitor'. purchase_date='$purchase_date' WHERE id='$id')";

    $result = mysqli_query($con, $query);

    if (!$result) {

        die('Query FAILED');
    }
    
}};

function upload(){
if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }    
};
/*
function check_session(){
if(!isset($_SESSION['id'])){
    die(header("location: login.php"));
}};*/