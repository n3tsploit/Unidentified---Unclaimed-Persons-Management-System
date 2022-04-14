<?php
	include_once 'header.php';
?>
		<div class="upload">
			<form action="include/newcase.inc.php" method="post" enctype="multipart/form-data">
				<h1>Enter New Case</h1>
				<hr>
				<label>name</label><br>
				<input type="text" name="name"><br>
				<label>gender</label><br>
				<input type="text" name="gender"><br>
				<label>race</label><br>
				<input type="text" name="race"><br>
				<label>age</label><br>
				<input type="number" name="age"><br>
				<label>OB Number</label><br>
				<input type="text" name="obNumber"><br>
				<label>state</label><br>
				<input type="text" name="state"><br>
				<label>Date Found</label><br>
				<input type="date" name="dateFound"><br>
				<label>county</label><br>
				<input type="text" name="county"><br>
				<label>constituency</label><br>
				<input type="text" name="constituency"><br>
				<label>description</label><br>
				<textarea name="description" rows="4" cols="50" placeholder="Enter description of the person..."></textarea><br>
				<label>narrative</label><br>
				<textarea name="narrative" rows="9" cols="50" placeholder="Enter details of the case.."></textarea><br>
				<label>photo</label><br>
				<input type="file" name="photo"><br>
				<button type="submit" name="upload">Upload</button>
			</form>
		</section>
		
<?php
	include_once 'footer.php';
?>