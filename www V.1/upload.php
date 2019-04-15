<?php
session_start();
	if(!isset($_SESSION['zalogowany']))
	{
		header('Location:pliki.php');
		exit();
	}
$diruser = $_SESSION['user'];
$target_dir = "katalog/$diruser/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo basename( $_FILES["fileToUpload"]);
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

       
	
	 header('Location:wykaz.php');
		exit();
?>