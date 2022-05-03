<?php
	include_once 'header.php';
?>
		<div class="upload">
			<form action="../include/newcase.inc.php" method="post" enctype="multipart/form-data">
				<h1>Enter New Case</h1>
				<hr>
				<div class="form">
					<div class="left">
						<label>Name</label>
						<input type="text" name="name">
						<label>Gender</label>
						<select name="gender">
							<option selected>Choose Gender</option>
							<option value="Male">Male</option>
							<option value="Female">Asian</option>
							<option value="Transgender">Transgender</option>							
						</select>
						<label>Race</label>
						<select name="race">
							<option selected>Choose Race</option>
							<option value="American Indian">American Indian or Alaska Native</option>
							<option value="Asian">Asian</option>
							<option value=" Black">Black or African American</option>
							<option value="Native Hawaiian">Native Hawaiian or Other Pacific Islander</option>
							<option value="White">White</option>							
						</select>
						<label>County</label>
						<select id="county" name="county">
							<option selected>Choose County</option>
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
						<label>Constituency</label>
						<input type="text" name="constituency">
						<label>Description</label>
						<textarea name="description" rows="10" cols="50" placeholder="Enter description of the person..."></textarea><br>
					</div>
					<div class="right">
						<label>OB Number</label>
						<input type="text" name="obNumber"><br>
						<label>Estimate Age</label>
						<select name="age">
							<option selected>Choose Age Range</option>
							<option value="0-10">0-10</option>
							<option value="11-15">11-15</option>
							<option value="15-18">15-18</option>
							<option value="19-25">19-25</option>
							<option value="above 25">above 25</option>
							
						</select> <br>
						<label>State</label>
						<select id="state" name="state">
							<option selected>Choose Gender</option>
							<option value="unidentified">Unidentified</option>
							<option value="unclaimed">Unclaimed</option>
						</select>
						<br>
						<label>Date Found</label>
						<input type="date" name="dateFound" id="date"><br>
						<label>Photo</label>
						<input type="file" name="photo" id="photo"><br>
						<label>Narrative</label>
						<textarea name="narrative" rows="10" cols="50" placeholder="Enter details of the case.."></textarea><br>
					</div>
					
				</div>
				<button type="submit" name="upload">UPLOAD</button>
			</form>
		</section>
		
<?php
	include_once 'footer.php';
?>