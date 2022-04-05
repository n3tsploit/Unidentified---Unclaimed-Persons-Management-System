<?php
if (isset($_POST['submit'])){
	$police_station = $_POST['police_station'];
	$county = $_POST['county'];
	$password = $_POST['password'];
	$confirm_password = $_POST['confirm_password'];
	echo $password ;
	echo $confirm_password ;
	echo $county ;
	echo $police_station;
}

?>