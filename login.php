<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Log In</title>
	<link rel="stylesheet" type="text/css" href="./css/login.css">
</head>
<body>
	<div class="loginbox" class="avatar">
		<img src="images/8.png" class="avatar">
		<h1>Login</h1>
		<form method="post" action="./include/login.inc.php">
			<label for="police_station">Username</label><br>
			<input type="text" placeholder="Enter police station" name="police_station"><br>
			<label for="password">Password</label><br>
			<input type="password" placeholder="Enter password" name="passwd"><br>
			<button type="submit" name='submit'>Login</button>
		
		</form>

		
	</div>

	<?php
		if (isset($_GET['error'])) {
			if ($_GET['error'] == 'emptyinput') {
				echo "<p>Fill all fields <p>";
			}
			else if ($_GET['error'] == 'wrongcredential') {
				echo "<p> Wrong Credentials <p>";
			}
		}

	?>

</body>
</html>