<!DOCTYPE html>
<html>
<head><meta charset="UTF-8">
    <title>Document</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<title></title>
</head>
<body>
 <div class="col-sm-6">
<br>
<?php 

$con=mysqli_connect('localhost', 'root', 'jen009qm', 'test');
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$table_result = mysqli_query($con,"SELECT * FROM newtest");


echo "<table border='3' width = 150%>
<tr>
<th>First Name</th>
<th>Surname</th>
<th>OS</th>
<th>Laptop (brand)</th>
<th>RAM</th>
<th>Processor</th>
<th>Monitor (size)</th>
<th>Purchase Date</th>
<th></th>
</tr>";


while($row = mysqli_fetch_array($table_result))
{
echo "<tr>";
echo "<td>" . $row['firstname'] . "</td>";
echo "<td>" . $row['surname'] . "</td>";
echo "<td>" . $row['os'] . "</td>";
echo "<td>" . $row['laptop'] . "</td>";
echo "<td>" . $row['RAM'] . "</td>";
echo "<td>" . $row['processor'] . "</td>";
echo "<td>" . $row['monitor'] . " inch </td>";
echo "<td>" . $row['purchase_date'] . "</td>";
echo "<td><a href='/delete.php?id=".$row['id']."'>DELETE</a></td>"; 
echo "</tr>";
}
echo "</table>";
?>
<br>

 <a href="/login.php" class="btn btn-default">Return</a>
 <a href="/display.php" class="btn btn-default">Refresh</a>
            <!-- <input class="btn btn-primary" type="submit" name="submit" 
</body></html> -->
</div>