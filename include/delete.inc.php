<?php
if (isset($_POST['submit'])) {
	$remove = $_POST["submit"];

	require_once 'database.inc.php';

	$sql = "DELETE FROM cases WHERE caseId='$remove'";
	if (mysqli_query($conn,$sql)) {
		header("location: ../user/dashboard.php?message=success");
		exit();
	}else{
		header("location: ../user/dashboard.php?message=error");
		exit();
	}
}

?>