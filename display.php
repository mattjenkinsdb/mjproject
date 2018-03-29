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
/*

$upload_file = $_FILES['image']['name'];
$target = "/home/matt/Desktop/Project/Uploads/".basename($upload_file);
$target_file = "/Uploads/".basename($upload_file);

if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    } 
*/

include 'functions.php';

global $con;

$table_result = mysqli_query($con,"SELECT * FROM newtest ORDER BY firstname ASC");


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
<th>Image</th>
<th></th>
<th></th>
</tr>";

//$path = '/home/matt/Desktop/Project/Uploads';


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
//echo "<td>" . '<img src=/Uploads/"', $imgname .'" >'."</td>";
//echo "<td>" . '<img src="'. $target .'" >'."</td>";
//echo "<td>" . '<img src="'. $row['image'] .'" >'."</td>";
echo "<td><a href='/delete.php?id=".$row['id']."'>DELETE</a></td>"; 
echo "<td><a href='/edit.php?id=".$row['id']."'>EDIT</a></td>";
echo "</tr>";
}
echo "</table>";
?>
<br>

 <a href="/form.php" class="btn btn-default">Return</a>
    

            <!-- <input class="btn btn-primary" type="submit" name="submit" 
</body></html> -->
</div>

