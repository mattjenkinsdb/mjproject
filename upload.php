<?php // Isolated upload form to get to grips with it

$target_dir = "/home/matt/Desktop/Project/Uploads/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);

?>

<img src="/Uploads/<?php echo basename($_FILES["image"]["name"]);?>">l
<br>
<?php




/*if ($_FILES["image"]["error"] > 0)
    echo "Error: " . $_FILES["image"]["error"] . "<br />";
else
{
    echo "Upload: " . $_FILES["image"]["name"] . "<br />";
    echo "Type: " . $_FILES["image"]["type"] . "<br />";
    echo "Size: " . ($_FILES["image"]["size"] / 1024) . " Kb<br />";
    echo "Stored in: " . $_FILES["image"]["tmp_name"];
}
*/
if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
