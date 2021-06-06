<?php 


$conn = mysqli_connect('localhost', 'root', '', 'image-upload');

if (isset($_POST['login'])) {
	$email1 = $_POST['email1'];
	$password1 = $_POST['password1'];

	$sql = "SELECT * FROM users WHERE email='$email1' AND password='$password1'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: profiles.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">

	<title>LOGIN</title>
</head>
<body>
 
	<div class="container">
		<div class="row">
			<div class="col-4 offset-md-4 form-div">
				<form action="" method="POST" >
					<h4 style="margin-bottom: 8%;" class="text-center"></h4>
						<?php if(!empty($msg)):  ?>
							<div class="alert <?php echo $css_class; ?>">
								<?php echo $msg; ?>
							</div>
						<?php endif; ?>
									<div class="form-group text-center">
								<img style="max-height: 100px;" src="images/placeholder.png" >
									</div>
							
									<div class="form-group">
										<label>Email</label>
										<input type="email" name="email1" class="form-control">
									</div>
									<div class="form-group">
										<label for="password">Password</label>
										<input type="" name="password1" class="form-control" >
									</div>
							<div>
								<button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
							</div>
							<p style="margin-top: 3%;" class="text-center">Don't have an account? <a href="index.php">Register Here</a>.</p>
				</form>
			</div>
		</div>
	</div>



</body>
</html>