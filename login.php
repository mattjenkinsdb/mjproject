<?php

include 'functions.php';

//var_dump($_POST);

get_credentials();

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