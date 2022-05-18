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
				<li><a href="./unclaimed.php">Unclaimed</a></li>
				<li><a href="./login.php">Log In</a></li>
			</ul>
			
		</div>
		<?php
			include_once './errorhandler.php';

		?>
		<div class="unidentified-content">
			<div class="top-text">
				<h1>UNIDENTIFIED PERSONS</h1>
				<p>The following are individuals listed as unidentified.</p>
			</div>
			<hr><br>
			<form action="search.php" method="POST">
				<label>Filter by:</label>
				<select name="gender" >
					<option value="">--Select Gender--</option>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
					<option value="Transgender">Transgender</option>
				</select>
				<label>&emsp; &emsp;Filter by: </label>
				<select name="county">
					<option selected>--Select County--</option>
					<option value="Mombasa County">Mombasa County</option>
					<option value="Kwale County">Kwale County</option>
					<option value="Kilifi County">Kilifi County</option>
					<option value="Tana River County">Tana River County</option>
					<option value="Lamu County">Lamu County</option>
					<option value="Taita-Taveta County">Taita-Taveta County</option>
					<option value="Garissa County">Garissa County</option>
					<option value="Wajir County">Wajir County</option>
					<option value="Mandera County">Mandera County</option>
					<option value="Marsabit County">Marsabit County</option>
					<option value="Isiolo County">Isiolo County</option>
					<option value="Meru County">Meru County</option>
					<option value="Tharaka-Nithi County">Tharaka-Nithi County</option>
					<option value="Embu County">Embu County</option>
					<option value="Kitui County">Kitui County</option>
					<option value="Machakos County">Machakos County</option>
					<option value="Makueni County">Makueni County</option>
					<option value="Nyandarua County">Nyandarua County</option>
					<option value="Nyeri County">Nyeri County</option>
					<option value="Kirinyaga County">Kirinyaga County</option>
					<option value="Murang’a County">Murang’a County</option>
					<option value="Kiambu County">Kiambu County</option>
					<option value="Turkana County">Turkana County</option>
					<option value="West Pokot County">West Pokot County</option>
					<option value="Samburu County">Samburu County</option>
					<option value="Trans Nzoia County">Trans Nzoia County</option>
					<option value="Uasin Gishu County">Uasin Gishu County</option>
					<option value="Elgeyo-Marakwet County">Elgeyo-Marakwet County</option>
					<option value="Nandi County">Nandi County</option>
					<option value="Baringo County">Baringo County</option>
					<option value="Laikipia County">Laikipia County</option>
					<option value="Nakuru County">Nakuru County</option>
					<option value="Narok County">Narok County</option>
					<option value="Kajiado County">Kajiado County</option>
					<option value="Kericho County">Kericho County</option>
					<option value="Bomet County">Bomet County</option>
					<option value="Kakamega County">Kakamega County</option>
					<option value="Vihiga County">Vihiga County</option>
					<option value="Bungoma County">Bungoma County</option>
					<option value="Busia County">Busia County</option>
					<option value="Siaya County">Siaya County</option>
					<option value="Kisumu County">Kisumu County</option>
					<option value="Homa Bay County">Homa Bay County</option>
					<option value="Migori County">Migori County</option>
					<option value="Kisii County">Kisii County</option>
					<option value="Nyamira County">Nyamira County</option>
					<option value="Nairobi County">Nairobi County</option>
				</select>
				<label> &emsp; &emsp;Filter by: &nbsp</label>
				<select  name="year">
    				<option>--Select Year--</option>  
    				<option value="2011">2011</option>
   					<option value="2012">2012</option>
   					<option value="2013">2013</option>
   					<option value="2014">2014</option>
   					<option value="2015">2015</option>
   					<option value="2016">2016</option>
   					<option value="2017">2017</option>
   					<option value="2018">2018</option>
    				<option value="2019">2019</option>
    				<option value="2020">2020</option>
    				<option value="2021">2021</option>
    				<option value="2022">2022</option>
    				<option value="2022">2023</option>
    				<option value="2022">2024</option>
    				<option value="2022">2025</option>
    				<option value="2022">2026</option>
    				<option value="2022">2027</option>
    				<option value="2022">2028</option>
				</select>&nbsp
				<input type="text" name="name" hidden value="none">
				<input type="text" name="state"hidden value="unidentified">
				<button type="reset">Reset</button>
				<button type="submit" name="submit-search">Filter</button>
			</form><br>
			<div class="cases-container">
				<?php
				$sql = "SELECT * FROM cases WHERE state='unidentified' ORDER BY caseId DESC";
				$stmt = mysqli_stmt_init($conn);
				if (!mysqli_stmt_prepare($stmt,$sql)) {
					echo "Error in SQL statement";
					// code...
				}else{
					mysqli_stmt_execute($stmt);
					$result=mysqli_stmt_get_result($stmt);

					while ($row = mysqli_fetch_assoc($result)) {
						echo '<a href="case.php?id='.$row["caseId"].'">
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