<?php

if (isset($_POST['submit'])){
	$police_station = $_POST['police_station'];
	$county = $_POST['county'];
	$passwd = $_POST['password'];
	$confirm_password = $_POST['confirm_password'];

	require_once 'database.inc.php';
	require_once 'functions.inc.php';

	if (emptyRegisterFields($police_station, $county, $passwd, $confirm_password)!== false) {
		header("location: ../user/register.php?error=fieldsareempty");
		exit();
	}
	if (wrongPassword( $passwd, $confirm_password)!== false) {
		header("location: ../user/register.php?error=password don't match");
		exit();
	}
	if (invalidUser($conn, $police_station)!== false) {
		header("location: ../user/register.php?error=Userexists");
		exit();
	}

	createUser($conn, $police_station, $county, $passwd);

}
else{
	header("location: ../user/register.php");
	exit();
}