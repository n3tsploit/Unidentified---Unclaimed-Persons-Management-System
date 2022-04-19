<?php
	session_start();
	$username = $_SESSION['username'];

	if (!isset($_SESSION['username'])) {
		header('location: login.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" type="text/css" href="./css/header.css">
	<title>UUPMS</title>
</head>
<body>
	<section class="sidemenu">
		<nav>
			<a href="dashboard.php"><i class="material-icons">dashboard</i>Dashboard</a>
			<a href="newcase.php"><i class="material-icons">add_circle_outline</i>New Case</a>
			<a href="register.php"><i class="material-icons">person_add</i>Register User</a>
			<a href="include/logout.inc.php"><i class="material-icons">exit_to_app</i>Log Out</a>
		</nav>
	</section>

	<header>
		<div class="usernames">
			<?php
				echo "<p>".ucfirst($username)." Police Station</p>";

			?>
		</div>
		<div class="welcome">
			<i class="material-icons" style="font-size:30px;color:black;">person_pin</i>
		</div>
	</header>

	<section class="body">