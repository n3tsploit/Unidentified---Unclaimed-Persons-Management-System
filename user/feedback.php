<?php
	include_once 'header.php';
?>
		<section class="cases">
			<h3>Here are the feedbacks from your cases</h3>
			<div class="table-container">
				<table>
				    <tr>
				      <th>Case Id</th>
				      <th>OB Number</th>
				      <th>Name</th>
				      <th>Email</th>
				      <th>Message</th>
				      <th>Contact</th>
				      <th>Action</th>
				    </tr>
				    
				    	<?php

						include_once '../include/database.inc.php';
						if ($role==='admin') {
							$sql = "SELECT * FROM feedback ORDER BY ticket DESC";
						}else{
							$sql = "SELECT * FROM feedback WHERE userId='$userId' ORDER BY ticket DESC";
							}
						$stmt = mysqli_stmt_init($conn);
						if (!mysqli_stmt_prepare($stmt,$sql)) {
							echo "SQL error";
						}else{
							mysqli_stmt_execute($stmt);
							$result = mysqli_stmt_get_result($stmt);

							while ($row = mysqli_fetch_assoc($result)) {
								echo "<tr>";
								echo '<td>'.$row['caseId'].'</td>';
								echo '<td>'.$row['obNumber'].'</td>';
								echo '<td>'.$row['name'].'</td>';
								echo '<td>'.$row['email'].'</td>';
								echo '<td>'.$row['message'].'</td>';
								echo '<td>'.$row['contact'].'</td>';
								echo '<td><form action="../include/deletefeedback.inc.php" method="post" ><form><button class="delete-button" type="submit" name="submit" value="'.$row['ticket'].'" />Delete</button></td>';
								echo "</tr>";
							}
						}


						?>
				    
			  </table>
			 
			

			</div>
		</section>
		
<?php
	include_once 'footer.php';
?>