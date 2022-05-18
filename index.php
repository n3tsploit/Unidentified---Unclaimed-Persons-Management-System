<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<title>Home</title>
</head>
<body>
	<div class="banner">
		<div class="navbar">
			<img src="images/logos/8.png" class="logo">
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="./unidentified.php">Unidentified</a></li>
				<li><a href="./unclaimed.php">Unclaimed</a></li>
				<li><a href="./login.php">Log In</a></li>
			</ul>
			
		</div>
		<?php
			include_once './errorhandler.php';

		?>
		<div class="content">
			<h1>LOOKING FOR A MISSING PERSON?</h1>
			<p>Check to see if your missing person is in our records by going to either the unidentified or unclaimed section</p>
			<div>
				<a href="unidentified.php"><button type="button" href='unclaimed.php'>UNIDENTIFIED</button><a/>
				<a href="unclaimed.php"><button type="button">UNCLAIMED</button></a>
			</div>
		</div>
	</div>

</body>
</html>