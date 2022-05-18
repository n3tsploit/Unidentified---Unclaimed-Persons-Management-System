<?php
if (isset($_POST['submit'])) {
	$remove = $_POST["submit"];

	require_once 'database.inc.php';

	$sql = "DELETE FROM cases WHERE caseId='$remove'";
	if (mysqli_query($conn,$sql)) {
		header("location: ../user/dashboard.php?message=deleted");
		exit();
	}else{
		header("location: ../user/dashboard.php?error=An error has occured, try again!");
		exit();
	}
}

?>