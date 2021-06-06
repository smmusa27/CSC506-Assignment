<?php 

$msg= "";
$css_class= "";
$sql = "";

//database connection
			$conn = mysqli_connect('localhost', 'root', '', 'image-upload');



if(isset($_POST['save-user'])){
	echo "<pre>", print_r($_FILES['profileImage']['name']), "</pre>";

	
	$profileImageName = time() . '_' . $_FILES['profileImage']['name'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];


	$target = 'images/' . $profileImageName;

	if(move_uploaded_file($_FILES['profileImage']['tmp_name'], $target)){

		//db image insertion query

				$sql = "INSERT INTO users (profile_image, username, password, email, phone, address) VALUES ('$profileImageName', '$username', '$password', '$email', '$phone', '$address')";
				if (mysqli_query($conn, $sql)){
					$msg = "image uploaded and saved to database";
					$css_class = "alert-success";
					header("Location: profiles.php");

				}else{
					$msg = "Database Error: Failed to save user";
					$css_class = "alert-danger";

				}

	}

	}else{
		$msg = "Fill the form and upload a picture";
		$css_class = "alert-danger";

	}





 ?>