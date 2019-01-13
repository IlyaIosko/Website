<?php 
	$connectionToDatabase = mysqli_connect("localhost", "root", "", "loginapp");
	if(!isset($connectionToDatabase)) {
	die("connection to the database failed");
}
?>
