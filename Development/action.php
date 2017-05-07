<?php
	// = = = = UPLOAD FILE = = = = 
	// Must be absolute path
	$target_directory = "/Library/WebServer/Documents/joel/uploads/"; 
	$filename = $_POST['fileLocation'];
	$target_file = $target_directory . $filename;
	$temp_filename = $_FILES["file"]["tmp_name"];
	$size = $_FILES["file"]["size"];
	$local_path = "uploads/" . $filename;

	// Make sure the webserver process owner owns the destination folder
	// run exec('whoami'), Mac could be _www
	if(!move_uploaded_file($temp_filename, $target_file))
		header("Location: index.php");

	// = = = = Add to database = = = =
	// Establish connection to database
	$conn = mysql_connect("localhost", "root", "bugocheat") or die(mysql_error());
	//Select database
	$db = mysql_select_db("joel");

	// Collect data from form
	$title = $_POST["title"];
	$content = $_POST["content"];

	$query = "INSERT INTO flow (title, content, image) VALUES ('$title', '$content', '$local_path')";
	mysql_query($query);
	mysql_close();

	header("Location: index.php");


?>