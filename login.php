<?php

include 'functions.php';

session_start();

//var_dump($_POST);

if(isset($_POST['submit'])) {
  
global $con; 

$username = $_POST['username'];
$password = $_POST['password'];

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

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
<br>
<div class="container">
    
    <div class="col-sm-6">
        <form action="login.php" method="post">
            <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control" required="yes">
            </div>
            
             <div class="form-group">
                <label                                                                  for="password">Password</label>
            <input type="password" name="password" class="form-control">
            </div>
            
             <input class="btn btn-primary" type="submit" name="submit" value="Submit">
        </form>
    </div>

</div>
</body>
</html>