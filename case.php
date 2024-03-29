<?php
	include_once './include/database.inc.php';

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/search.css">
	<title>Case</title>
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
		<?php
			include_once './errorhandler.php';

		?>
		<div class="unidentified-content">
			<div class="top-text">
				<h1>MORE DETAILS</h1>
				<p>Below are more details about the case.</p>
			</div>
			<hr>
			<div class="cases-container">
				<?php
				$id = mysqli_real_escape_string($conn, $_GET['id']);
				$sql = "SELECT * FROM cases WHERE caseId='$id'";
				$stmt = mysqli_stmt_init($conn);
				if (!mysqli_stmt_prepare($stmt,$sql)) {
					echo "Error in SQL statement";
					// code...
				}else{
					mysqli_stmt_execute($stmt);
					$result=mysqli_stmt_get_result($stmt);


					while ($row = mysqli_fetch_assoc($result)) {
						$number=$row["obNumber"];
						$userId=$row["usersId"];
						echo '<a>
							<div style="background-image: url(images/cases/'.$row["photo"].')"></div>
			</div>
							<div class="details"><br>
								<p><b>Name :</b>'.$row["name"].'</p>
								<p><b>State :</b>'.$row["state"].'</p>
								<p><b>Gender:</b>'.$row["gender"].'</p>
								<p><b>Race:</b>'.$row["race"].'</p>
								<p><b>Age Range:</b>'.$row["age"].'</p>
								<p><b>Date Found:</b>'.$row["dateFound"].'</p>
								<p><b>County: </b>'.$row["county"].'</p>
								<p><b>Constituency:</b>'.$row["constituency"].'</p>
							</div>
							<div class="description"><br>
								<hr style="border-top: 3px dashed darkgray;"><br>
								<h3>Physical Description:</h3>
								<p>'.$row["description"].'</p>
							</div>
							<div class="narrative"><br>
								<hr style="border-top: 3px dashed darkgray;"><br>
								<h3>Details :</h3>
								<p>'.$row["narrative"].'</p>
							</div><br><hr style="border-top: 3px dashed darkgray;"><br>
						</a>';
					}
				}
				
				?>
				<div class="feedback">
					<form action="include/feedback.inc.php" method="post">
						<h3>Feedback</h3><br>					
						<input type="text" name="name" placeholder="Enter your name here....">
						<input type="email" name="email" placeholder="Enter your email here....">
						<textarea name="message" rows="10" cols="50" placeholder="Enter your message here...."></textarea><br>
						<input type="tel" name="contact" placeholder="Enter your Phone number here.... 0700-000-000"  pattern="[0-9]{4}-[0-9]{3}-[0-9]{3}" required>
						<?php 
						echo '<input type="caseId" name="caseId" hidden value="'.$id.'">';
						echo '<input type="caseId" name="obNumber" hidden value="'.$number.'">';
						echo '<input type="caseId" name="userId" hidden value="'.$userId.'">';

						 ?>
						<button type="submit" name="submit" class="feedback-button">Submit</button>
					</form>
				</div>
		</div>
	</div>
</body>
</html>