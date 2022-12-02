<?php
session_start();

// In case of error.
print_r($_FILES);
echo "<br/>";
echo "<br/>";
echo "Upload file name: " . $_FILES["file_name"]["name"] . "<br>";
echo "Type: " . $_FILES["file_name"]["type"] . "<br>";
echo "Size: " . ($_FILES["file_name"]["size"] / 1024) . " kB<br>";
echo "Stored in: " . $_FILES["file_name"]["tmp_name"];

if (file_exists("./upload/" . $_FILES["file_name"]["name"])) 
{
    echo $_FILES["file_name"]["name"] . " already exists. ";
    header("Location: index.php");
}
else 
{
    move_uploaded_file($_FILES["file_name"]["tmp_name"], "upload/" . $_FILES["file_name"]["name"]);
	$directory = "upload/" . $_FILES["file_name"]["name"];
    echo "Stored in: " . $directory;
	$_SESSION['upload']=true;
	$_SESSION['name']=$directory;
    header("Location: index.php");
}
?>