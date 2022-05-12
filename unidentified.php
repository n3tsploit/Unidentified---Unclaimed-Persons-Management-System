<?php
	include_once './include/database.inc.php';

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/search.css">
	<title>UNIDENTIFIED PERSONS</title>
</head>
<body>
	<div class="unidentified-banner">
		<div class="navbar">
			<img src="images/logos/8.png" class="logo">
			<ul>
				<li><a href="./index.php">Home</a></li>
				<li><a href="./unidentified.php">Unidentified</a></li>
				<li><a href="#">Unclaimed</a></li>
				<li><a href="#">Feedback</a></li>
				<li><a href="./login.php">Log In</a></li>
			</ul>
			
		</div>
		<div class="unidentified-content">
			<div class="top-text">
				<h1>UNIDENTIFIED PERSONS</h1>
				<p>The following are individuals listed as unidentified.</p>
			</div>
			<hr>
			<form action="search.php" method="POST">
				<select name="gender">
					<option value="Male">Male</option>
					<option value="Female">Female</option>
					<option value="Transgender">Transgender</option>
				</select>
				<button type="submit" name="submit-search">Search</button>
			</form>
			<div class="cases-container">
				<?php
				$sql = "SELECT * FROM cases ORDER BY caseId DESC";
				$stmt = mysqli_stmt_init($conn);
				if (!mysqli_stmt_prepare($stmt,$sql)) {
					echo "Error in SQL statement";
					// code...
				}else{
					mysqli_stmt_execute($stmt);
					$result=mysqli_stmt_get_result($stmt);

					while ($row = mysqli_fetch_assoc($result)) {
						echo '<a>
							<div style="background-image: url(images/cases/'.$row["photo"].')"></div>
							<h3>'.strtoupper($row["state"]).'</h3>
							<p>'.$row["name"].' - '.ucfirst($row["constituency"]).','.$row["county"].'</p>
						</a>';
					}
				}
				
				?>
			</div>
		</div>
	</div>
</body>
</html>