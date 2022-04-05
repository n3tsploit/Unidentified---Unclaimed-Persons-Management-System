<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="./css/register.css">
</head>
<body>
	<div class="container">
		<div class="header">
			<h2>Register User</h2>
			
		</div>
		<form class="form" method="post" action="./include/register.inc.php">
			<div class="form-control">
				<label for="police_station">Username</label>
				<input type="text" id="police_station" name="police_station" placeholder="Police Station name">  
				<label for="county">County</label>
				<input type="text" id="county" name="county" placeholder="county">
				<label for="password">Password</label>
				<input type="password" name="password" placeholder="password"> 
				<label for="confirm_password">Confirm password</label>
				<input type="password" name="confirm_password" placeholder="confirm password">
				<button type="submit" name='submit'>Register</button>
				
			</div>		
		</form>
	</div>
	<?php
		if (isset($_GET['error'])) {
			if ($_GET['error'] == 'emptyinput') {
				echo "<p>Fill all fields <p>";
			}
			else if ($_GET['error'] == 'Userexists') {
				echo "<p>This police station exists <p>";
			}
			else if ($_GET['error'] == 'stmtfailed') {
				echo "<p>Oops Something went wrong try again! <p>";
			}
			else if ($_GET['error'] == 'none') {
				echo "<p>You have successfully registered a new user!!<p>";
			}
			else if ($_GET['error'] == 'password don\'t match') {
				echo "<p>password don't match<p>";
			}
		}

	?>

</body>
</html>