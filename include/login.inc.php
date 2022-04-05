<?php 
if (isset($_POST['submit'])) {

	$police_station = $_POST['police_station'];
	$passwd = $_POST['passwd'];

	require_once 'database.inc.php';
	require_once 'functions.inc.php';

	if (emptyLoginFields($police_station, $passwd)!== false) {
		header("location: ../login.php?error=emptyinput");
		exit();
	}
	
	login($conn, $police_station, $passwd);
}

else{
	header("location: ../login.php");
}