<?php 

$lang = $_POST["lang"];

if (isset($lang)){
	$server = "localhost";
	$username = "root";
	$password = "root";
	$db = "sakila";

	// Create connection
	$conn = mysqli_connect($server, $username, $password, $db);

	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	echo "Connected to " . $db . "<br><br>";

	$sql = "INSERT INTO language (name) VALUES ('" . $lang . "')";

	if (mysqli_query($conn, $sql)) {
		echo $lang . " has added into language table.<br>";
	}
} else {
	echo "Nothing was received...";
}

?>