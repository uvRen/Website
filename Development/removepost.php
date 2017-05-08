<?php
	$target_directory = "/var/www/html/Development/";
	$target_file = $target_directory . $_POST["file"];
	require("connection.php");
	$query = "DELETE FROM flow WHERE id=".$_POST["id"];
	mysql_query($query);
	mysql_close();
	unlink($target_file);
	header("Location: remove.php");
?>