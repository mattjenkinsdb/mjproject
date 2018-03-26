<?php // accesscontrol.php
include 'functions.php';

session_start();

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
?>
