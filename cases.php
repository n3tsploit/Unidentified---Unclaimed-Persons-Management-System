<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cases</title>
</head>
<body>
	<h3>Your Cases are shown here</h3>

	<?php

	include_once 'include/database.inc.php';

	$sql = 'SELECT * FROM cases ORDER BY caseId DESC;';
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt,$sql)) {
		echo "SQL error";
	}else{
		mysqli_stmt_execute($stmt);
		$result = mysqli_stmt_get_result($stmt);

		while ($row = mysqli_fetch_assoc($result)) {
			echo '<p>'.$row['name'].'</p>';
			echo "<img src='images/cases/".$row['photo'] ."'>";
		}
	}


	?>

</body>
</html>