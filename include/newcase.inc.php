<?php
session_start();
$userId = $_SESSION['userId'];
$username = $_SESSION['username'];

if (isset($_POST['upload'])) {
	$name=$_POST['name'];
	$gender=$_POST['gender'];
	$race=$_POST['race'];
	$age=$_POST['age'];
	$obNumber=$_POST['obNumber'];
	$state=$_POST['state'];
	$dateFound=$_POST['dateFound'];
	$county=$_POST['county'];
	$constituency=$_POST['constituency'];
	$description=$_POST['description'];
	$narrative=$_POST['narrative'];
	$file=$_FILES['photo'];

	$fileType = $file['type'];
	$fileName = $file['name'];
	$fileSize = $file['size'];
	$fileTempName = $file['tmp_name'];
	$fileError = $file['error'];

	$fileExt = explode('.', $fileName);
	$fileRealExt = strtolower(end($fileExt));

	$allow = array('jpg','jpeg','png');

	if (in_array($fileRealExt, $allow)) {
		if ($fileError === 0) {
			$photoName = $username .'.' . uniqid('',true) . '.' . $fileRealExt;
			$photoPath = '../images/cases/' . $photoName;

			include_once 'database.inc.php';

			if (empty($name) || empty($gender) || empty($race) || empty($obNumber) || empty($age) || empty($state) || empty($dateFound) || empty($county) || empty($constituency) || empty($description) || empty($narrative) || empty($file)) {
				header('Location: ../user/newcase.php?upload=empty');
				exit();
			}else{
				$sql = 'INSERT INTO cases (name, gender, race, age, obNumber, state, dateFound, county, constituency, description, narrative, photo, usersId) VALUES (?, ?, ?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?);';

				$stmt = mysqli_stmt_init($conn);
				if (!mysqli_stmt_prepare($stmt, $sql)) {
					echo "SQL failed";
				}else{
					mysqli_stmt_bind_param($stmt,'ssssssssssssi',$name, $gender, $race, $age, $obNumber, $state, $dateFound, $county, $constituency, $description, $narrative, $photoName, $userId);
					mysqli_stmt_execute($stmt);

					move_uploaded_file($fileTempName, $photoPath);

					header('Location: ../user/dashboard.php');

				}

			}
		}else{
			echo "An error occured";
			exit();
		}
	}else{
		echo "check file type";
		exit();
	}
}