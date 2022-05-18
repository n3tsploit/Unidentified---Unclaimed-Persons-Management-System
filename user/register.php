<?php
	include_once 'header.php';
?>
	<div class="container">
		<form  method="post" action="../include/register.inc.php">
			<h1>Register User</h1>
			<hr>
			<div class="register-form">
				<label class="register-label" for="police_station">Username</label>
				<input class="register-input" type="text" id="police_station" name="police_station" placeholder="Use police Station name ...">  
				<label class="register-label" for="county">County Located</label>
				<select class="register-select" id="county" name="county">
					<option selected>Select County</option>
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
				<label class="register-label" for="county">Role</label>
				<select class="register-select" id="role" name="role">
					<option selected>Select Role</option>
					<option value="user">User</option>
					<option value="admin">Admin</option>
				</select>
				<label class="register-label" for="password" >Password</label>
				<input class="register-input" type="password" name="password" placeholder="Enter password..."> 
				<label class="register-label" for="confirm_password">Confirm password</label>
				<input class="register-input" type="password" name="confirm_password" placeholder="Enter password again...">
				<button class="register-button"type="submit" name='submit'>Register</button>
				
			</div>		
		</form>
	</div>
	<?php
		if (isset($_GET['error'])) {
			if ($_GET['error'] == 'emptyinput') {
				echo "<p>Fill all fields <p>";
			}
			else if ($_GET['error'] == 'Userexists') {
				echo "<p>This police station exists <p>";
			}
			else if ($_GET['error'] == 'stmtfailed') {
				echo "<p>Oops Something went wrong try again! <p>";
			}
			else if ($_GET['error'] == 'none') {
				echo "<p>You have successfully registered a new user!!<p>";
			}
			else if ($_GET['error'] == 'password don\'t match') {
				echo "<p>password don't match<p>";
			}
		}

	?>

<?php
	include_once 'footer.php';
?>