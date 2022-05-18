<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Log In</title>
	<link rel="stylesheet" type="text/css" href="./css/login.css">
</head>
<body>
	<div class="navbar">
		<img src="images/logos/8.png" class="logo">
		<ul>
			<li><a href="./index.php">Home</a></li>
			<li><a href="./unidentified.php">Unidentified</a></li>
			<li><a href="#">Unclaimed</a></li>
			<li><a href="#">Feedback</a></li>
			<li><a href="./login.php">LOG IN</a></li>
		</ul>
			
	</div>
	
	<div class="loginbox" class="avatar">
		<img src="images/8.png" class="avatar">
		<h1>Login</h1>
		<form method="post" action="./include/login.inc.php">
			<label for="police_station">Username</label><br>
			<input type="text" placeholder="Enter username...." name="police_station"><br>
			<label for="password">Password</label><br>
			<input type="password" placeholder="Enter password..." name="passwd"><br>
			<button type="submit" name='submit'>Login</button>
		
		</form>

		
	</div>

	<?php
			include_once './errorhandler.php';

		?>

</body>
</html>