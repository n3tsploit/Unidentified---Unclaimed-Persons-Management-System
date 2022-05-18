<?php

if (isset($_POST['submit'])){
	$police_station = $_POST['police_station'];
	$county = $_POST['county'];
	$role = $_POST['role'];
	$passwd = $_POST['password'];
	$confirm_password = $_POST['confirm_password'];

	require_once 'database.inc.php';
	require_once 'functions.inc.php';

	if (emptyRegisterFields($police_station, $county, $passwd, $confirm_password, $role)!== false) {
		header("location: ../user/register.php?error=Fill all fields");
		exit();
	}
	if (!preg_match("/^[a-zA-Z ]*$/",$police_station)) {
        header("location: ../user/register.php?error=Only letters,numbers and whitespace are allowed!");
		exit(); 
        }
	if (invalidPass($passwd)) {
		
	}
	if (wrongPassword( $passwd, $confirm_password)!== false) {
		header("location: ../user/register.php?error=password don't match");
		exit();
	}
	if (invalidUser($conn, $police_station)!== false) {
		header("location: ../user/register.php?error=This User exists");
		exit();
	}

	createUser($conn, $police_station, $county, $passwd, $role);

}
else{
	header("location: ../user/register.php?message=regitered");
	exit();
}
