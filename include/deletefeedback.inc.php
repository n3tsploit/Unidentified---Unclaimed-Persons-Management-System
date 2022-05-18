<?php
if (isset($_POST['submit'])) {
	$remove = $_POST["submit"];

	require_once 'database.inc.php';

	$sql = "DELETE FROM feedback WHERE ticket='$remove'";
	if (mysqli_query($conn,$sql)) {
		header("location: ../user/feedback.php?message=deleted");
		exit();
	}else{
		header("location: ../user/feedback.php?error=An error has occured, try again");
		exit();
	}
}

?>