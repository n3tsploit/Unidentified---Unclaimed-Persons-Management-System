<?php
	include_once 'header.php';
?>
		<section class="cases">
			<h3>Your Cases are shown here</h3>
			<div class="table-container">
				<table>
				    <tr>
				      <th>Photo</th>
				      <th>Case Id</th>
				      <th>OB number</th>
				      <th>Name</th>
				      <th>Gender</th>
				      <th>state</th>
				      <th>Date Found</th>
				      <th>County</th>
				      <th>Contituency</th>
				      <th>Info</th>
				      <th>action</th>
				    </tr>
				    
				    	<?php

						include_once '../include/database.inc.php';

						$sql = 'SELECT * FROM cases ORDER BY caseId DESC;';
						$stmt = mysqli_stmt_init($conn);
						if (!mysqli_stmt_prepare($stmt,$sql)) {
							echo "SQL error";
						}else{
							mysqli_stmt_execute($stmt);
							$result = mysqli_stmt_get_result($stmt);

							while ($row = mysqli_fetch_assoc($result)) {
								echo "<tr>";
								echo "<td><img src='../images/cases/".$row['photo'] ."' class='table-images'></td>";
								echo '<td>'.$row['caseId'].'</td>';
								echo '<td>'.$row['obNumber'].'</td>';
								echo '<td>'.$row['name'].'</td>';
								echo '<td>'.$row['gender'].'</td>';
								echo '<td>'.$row['state'].'</td>';
								echo '<td>'.$row['dateFound'].'</td>';
								echo '<td>'.$row['county'].'</td>';
								echo '<td>'.$row['constituency'].'</td>';
								echo '<td>More info</td>';
								echo '<td>Delete Record</td>';
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