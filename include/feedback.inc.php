<?php

if (isset($_POST['submit'])) {
	$name=$_POST['name'];
	$caseId=$_POST['caseId'];
	$email=$_POST['email'];
	$message=$_POST['message'];

	require_once 'database.inc.php';

	$sql = "INSERT INTO feedback (caseId, name, email, message) VALUES (?, ?, ?, ?);";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../unidentified.php?error=sqlerror");
		exit();
	}
	mysqli_stmt_bind_param($stmt, "isss", $caseId, $name, $email, $message);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);

	header("location: ../unidentified.php?message=success");
		exit();
}
 ?>