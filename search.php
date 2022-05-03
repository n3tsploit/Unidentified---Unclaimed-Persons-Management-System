<?php
	include_once './include/database.inc.php';

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/search.css">
	<title>Search page</title>
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
			<div class="cases-container">
				<?php
				if (isset($_POST['submit-search'])) {
					$search = mysqli_real_escape_string($conn, $_POST['gender']);
					$sql = "SELECT * FROM cases WHERE gender='$search'";
					$result = mysqli_query($conn, $sql);
					$query_result = mysqli_num_rows($result);
					if ($query_result > 0) {
						while ($row = mysqli_fetch_assoc($result)) {
							echo '<a href="case.php?id='.$row["caseId"].'">
							<div style="background-image: url(images/cases/'.$row["photo"].')"></div>
							<h3>'.strtoupper($row["state"]).'</h3>
							<p>'.$row["name"].' - '.ucfirst($row["constituency"]).','.$row["county"].'</p>
							</a>';
						}
					}else{
						echo "No Data Found";
					}
				}
				
				?>
			</div>
		</div>
	</div>
</body>
</html>