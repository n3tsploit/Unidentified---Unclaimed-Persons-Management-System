<?php
if (isset($_POST['submit'])) {
	$remove = $_POST["submit"];

	require_once 'database.inc.php';

	$sql = "DELETE FROM users WHERE usersId='$remove'";
	if (mysqli_query($conn,$sql)) {
		header("location: ../user/manageuser.php?message=success");
		exit();
	}else{
		header("location: ../user/manageuser.php?message=error");
		exit();
	}
}

?>