<?php 

$animal = $_POST["animal"];

if (isset($animal)){
<<<<<<< HEAD
	$animal = stripslashes($animal);
=======
	// $animal = stripslashes($animal);
>>>>>>> upstream/master
	$animal = str_replace(' ', '', $animal);
	echo "Received <strong>" . $animal . "</strong> from the form.";
} else {
	echo "Nothing was received...";
}

?>