<?php
function emptyRegisterFields($police_station, $county, $passwd, $confirm_password){
	$result;
	if (empty($police_station)||empty($county) || empty($passwd) || empty($confirm_password)){
		$result = true;
	}
	else{
		$result = false;
	}

	return $result;
}

function invalidUser($conn, $police_station){
	$sql = "SELECT * FROM users WHERE username = ?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../user/register.php?error=preparedstatementfailed");
		exit();
	}

	mysqli_stmt_bind_param($stmt, "s", $police_station);
	mysqli_stmt_execute($stmt);

	$getresult = mysqli_stmt_get_result($stmt);

	if ($row = mysqli_fetch_assoc($getresult)){
		return $row;

	}
	else{
		$result = false;
		return $result;
	}

	mysqli_stmt_close($stmt);

}

function createUser($conn, $police_station, $county, $passwd){
	$sql = "INSERT INTO users (username, usersCounty, usersPwd) VALUES (?, ?, ?);";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../user/register.php?error=stmtfailed");
		exit();
	}

	$hashedPwd = password_hash($passwd, PASSWORD_DEFAULT);

	mysqli_stmt_bind_param($stmt, "sss", $police_station, $county, $hashedPwd);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);

	header("location: ../user/register.php?error=none");
		exit();

}

function wrongPassword( $passwd, $confirm_password){
	$result;
	if($passwd !== $confirm_password){
		$result = true;
	}
	else{
		$result = false;
	}
	return $result;

}

function login($conn, $police_station, $passwd){
	$invalidUser = invalidUser($conn, $police_station);

	if ($invalidUser === false){
		header("location: ../login.php?error=wrongcredential");
		exit();
	}

	$hashedPasswd = $invalidUser['usersPwd'];
	$checkPasswd = password_verify($passwd, $hashedPasswd);

	if ($checkPasswd === false) {
		header('location: ../login.php?error=wrongcredential');
		exit();
	}
	elseif ($checkPasswd === true) {
		session_start();
		$_SESSION['userId'] = $invalidUser['usersId'];
		$_SESSION['username'] = $invalidUser['username'];
		header('location: ../user/dashboard.php');
		exit();
	}

}

function emptyLoginFields($police_station,  $passwd){
	$result;
	if (empty($police_station) || empty($passwd)){
		$result = true;
	}
	else{
		$result = false;
	}

	return $result;
}