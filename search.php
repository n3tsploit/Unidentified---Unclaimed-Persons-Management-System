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
				<li><a href="./unclaimed.php">Unclaimed</a></li>
				<li><a href="./login.php">Log In</a></li>
			</ul>
			
		</div>
		<?php
			include_once './errorhandler.php';

		?>
		<div class="unidentified-content">
			<div class="top-text">
				<h1>RESULTS</h1>
				<p>Below are the results of the filter query.</p>
			</div>
			<hr>
			
				<?php
				if (isset($_POST['submit-search'])) {
					$gender = $_POST['gender'];
					$date = $_POST['year'];
					$name = $_POST['name'];
					$county = $_POST['county'];
					$state = $_POST['state'];
					if ($name !='' || $gender !='' || $date !='' || $county !='') {
						$sql = "SELECT * FROM cases WHERE (gender='$gender' OR county='$county' OR dateFound LIKE'%$date%' OR name='$name') AND state='$state'";
						$result = mysqli_query($conn, $sql);
						$query_result = mysqli_num_rows($result);
						if ($query_result > 0) {
								echo "<span style='color:#0a0d0a; font-weight:bolder;'>There are ".$query_result." results from the filter!</span>";
								echo '<div class="cases-container">';
								while ($row = mysqli_fetch_assoc($result)) {
								echo '<a href="case.php?id='.$row["caseId"].'">
								<div style="background-image: url(images/cases/'.$row["photo"].')"></div>
								<h3>'.strtoupper($row["state"]).'</h3>
								<p>'.$row["name"].' - '.ucfirst($row["constituency"]).','.$row["county"].'</p>
								</a>';
								}
						}else{
						echo "No Data Found!!";
						}
					}
				}	
				
				?>
			</div>
		</div>
	</div>
</body>
</html>