<?php
	// = = = = UPLOAD FILE = = = = 
	// Must be absolute path
	$target_directory = "/var/www/html/Development/uploads/";
	$filename = $_POST['fileLocation'];
	$temp_filename = $_FILES["file"]["tmp_name"];
	$size = $_FILES["file"]["size"];
	
	// Produce a uniq filename
	$randomNumber = time();
	$filetype = substr($filename, strrpos($filename, '.'));
	$target_file = $target_directory . $randomNumber . $filetype;
	$local_path = "uploads/" . $randomNumber . $filetype;

	// Make sure the webserver process owner owns the destination folder
	// run exec('whoami'), Mac could be _www
	if(!move_uploaded_file($temp_filename, $target_file))
		header("Location: index.php");

	// = = = = Add to database = = = =
	// Establish connection to database
	require("connection.php");

	// Collect data from form
	$title = $_POST["title"];
	$content = $_POST["content"];

	$query = "INSERT INTO flow (title, content, image) VALUES ('$title', '$content', '$local_path')";
	mysql_query($query);
	mysql_close();

	header("Location: index.php");


?>