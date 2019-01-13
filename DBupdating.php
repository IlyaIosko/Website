<?php include "DBconnetion.php";
function readIdFromDB() {
	global $connectionToDatabase;
	$query = "SELECT * FROM users";
	$result = mysqli_query($connectionToDatabase, $query); 
	if(!isset($result)) {
		die('Query failed' . mysqli_error());
}
	while($row = mysqli_fetch_assoc($result)) {
		$id = $row["id"];	
		echo "<option  value='$id'>$id</option>";	
}
}

function updateDBTable() {
	if (isset($_POST["submit"])) {
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		$id = $_POST['id'];

		$query = "UPDATE users SET ";
		$query .= "username = '$username' ";
		$query .= "password = '$password' ";
		$query .= "WHERE id = $id ";
		$result = mysqli_query($connectionToDatabase, $query);

	if(!isset($result)) {
		die("Query FAILED" . mysqli_error($connectionToDatabase));
}
}
}

function createRowInDB() {

if(isset($_POST["submit"])) { 
	$username = test_user_input($_POST["username"]);
	$password = test_user_input($_POST["password"]);
	$connectionToDatabase = mysqli_connect("localhost", "root", "", "loginapp");



	$username = mysqli_real_escape_string($connectionToDatabase, $username);

	$hashedPassword = password_hash("$password", PASSWORD_DEFAULT);
	$verifyingHashingPasswird = password_verify("$password", "$hashedPassword");

	$query = "INSERT INTO users(username, password) ";
	$query .= "VALUES ('$username', '$hashedPassword')";

	$result = mysqli_query($connectionToDatabase, $query); 

	if(isset($result)) {
	header("location: redirectAfterRegistration.php");		
} else {
	die('Query failed' . mysqli_error());
}

}
}

function greet() {

	if(isset($_POST["username"])) {
		$_SESSION["username"] = test_user_input($_POST["username"]);
}
}
?>
