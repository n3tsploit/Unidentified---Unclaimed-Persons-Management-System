<?php

if (isset($_POST['submit'])) {
	$name=$_POST['name'];
	$caseId=$_POST['caseId'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	$userId=$_POST['userId'];
	$obNumber=$_POST['obNumber'];
	$contact=$_POST['contact'];

	if (empty($name)|| empty($caseId)|| empty($email)||empty($message)|| empty($userId)||empty('obNumber')||empty($contact)) {

		header("location: ../case.php?id=".$caseId."&error=Fill all fields!!");
		exit();
	}

	require_once 'database.inc.php';

	$sql = "INSERT INTO feedback (caseId, name, email, message, obNumber, userId, contact) VALUES (?, ?, ?, ?, ?, ?, ?);";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../unidentified.php?error=sqlerror, try again");
		exit();
	}
	mysqli_stmt_bind_param($stmt, "issssii", $caseId, $name, $email, $message, $obNumber, $userId, $contact);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);

	header("location: ../case.php?id=".$caseId."&message=sent feedback");
		exit();
}
 ?>