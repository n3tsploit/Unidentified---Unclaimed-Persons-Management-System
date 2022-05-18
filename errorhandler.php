	<?php
		if(isset($_GET['message'])){
			$errormessage=$_GET['message'];

			echo "<p class='success'><strong>".$errormessage."sucessfully</strong></P>";	
		
		}elseif (isset($_GET['error'])) {
			$errormessage=$_GET['error'];

			echo "<p class='error'><strong>".$errormessage."</strong></p>";
		}
	?>