<?php
	include_once 'header.php';
?>
		<section class="cases">
			<h3>USERS OF THE SYSTEM ARE DISPLAYED HERE</h3>
			<div class="table-container">
				<table>
				    <tr>
				      <th>User ID</th>
				      <th>Username </th>
				      <th>County</th>
				      <th>Role</th>
				      <th>Action</th>
				    </tr>
				    
				    	<?php

						include_once '../include/database.inc.php';
						$sql = "SELECT * FROM users";
						$stmt = mysqli_stmt_init($conn);
						if (!mysqli_stmt_prepare($stmt,$sql)) {
							echo "SQL error";
						}else{
							mysqli_stmt_execute($stmt);
							$result = mysqli_stmt_get_result($stmt);

							while ($row = mysqli_fetch_assoc($result)) {
								echo "<tr>";
								echo '<td>'.$row['usersId'].'</td>';
								echo '<td>'.$row['username'].'</td>';
								echo '<td>'.$row['usersCounty'].'</td>';
								echo '<td>'.$row['role'].'</td>';
								echo '<td><form action="../include/deleteuser.inc.php" method="post" ><form><button class="delete-button" type="submit" name="submit" value="'.$row['usersId'].'" />Delete</button></td>';
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