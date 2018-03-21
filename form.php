<?php require 'functions.php'; connect(); session_start(); check_session(); ?>

<!DOCTYPE html>
<html lang="en">
<head><br>
    <meta charset="UTF-8">
    <title>Document</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    
    <div class="col-sm-6">
        <form action="login.php" method="post">
            <div class="form-group">
            <label for="firstname">First Name</label>
            <input type="text" name="firstname" class="form-control" autocomplete="off" required="yes">
            </div>
            
             <div class="form-group">
                <label for="surname">Surname</label>
            <input type="text" name="surname" class="form-control" autocomplete="off" required="yes">
            </div>

        <div class="form-group">

            <label for="os">Operating System</label>

           <select name ="os" class="form-control">
                <option value="Windows">Windows</option>
                <option value="OSX">OSX</option>
                <option value="Linux">Linux</option>
            </select>
        </div>

                  
        <div class="form-group">
            <label for="laptop">Laptop</label>
            <input type="text" name="laptop" class="form-control" autocomplete="off" required="yes">
        </div>

                <div class="form-group">

            <label for="RAM" name="RAM">RAM</label>

            <select name="RAM" class="form-control">
                <option value="4GB">4GB</option>
                <option value="8GB">8GB</option>
                <option value="12GB">12GB</option>
                <option value="16GB">16GB</option>
            </select>
        </div>

        <div class="form-group">
            <label for="processor">Processor</label>
            <input type="text" name="processor" class="form-control" autocomplete="off" required="yes">
        </div>

        <div class="form-group">
            <label for="monitor">Monitor (Size)</label>
            <input type="text" name="monitor" class="form-control" autocomplete="off">
        </div>

        <div class="form-group">
            <label for="purchase_date">Date of Purchase</label>
            <input type="Date" name="purchase_date" class="form-control" autocomplete="off">
        </div>

             <input class="btn btn-primary" type="submit" name="submit" value="Submit">
             <a href="/display.php" class="btn btn-default">Show Entries</a> 
             <a href="/logout.php" class="btn btn-default">Logout</a>
            <!-- <input class="btn btn-primary" type="submit" name="submit" value="Show Entries">-->
        </form>
    </div>
</div>
</body>
</html>
