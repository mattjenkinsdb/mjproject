<?php require 'functions.php'; connect();?>

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
            <input type="text" name="firstname" class="form-control" autocomplete="off">
            </div>
            
             <div class="form-group">
                <label for="surname">Surname</label>
            <input type="text" name="surname" class="form-control" autocomplete="off">
            </div>

        <div class="form-group">

            <label for="os">Operating System</label>

            <input list="OS" name ="os" type="text" class="form-control" autocomplete="off">
 
            <datalist id="OS">
                <option value="Windows"/>
                <option value="OSX"/>
                <option value="Linux"/>
            </datalist>
        </div>

                  
        <div class="form-group">
            <label for="laptop">Laptop</label>
            <input type="text" name="laptop" class="form-control" autocomplete="off">
        </div>

                <div class="form-group">

            <label for="RAM">RAM</label>

            <input list="RAM" name ="RAM" type="text" class="form-control" autocomplete="off">
 
            <datalist id="RAM">
                <option value="4GB"/>
                <option value="8GB"/>
                <option value="12GB"/>
                <option value="16GB"/>
            </datalist>
        </div>

        <div class="form-group">
            <label for="processor">Processor</label>
            <input type="text" name="processor" class="form-control" autocomplete="off">
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
            <!-- <input class="btn btn-primary" type="submit" name="submit" value="Show Entries">-->
        </form>
    </div>
</div>
</body>
</html>
