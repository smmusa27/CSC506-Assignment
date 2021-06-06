<?php include 'processForm.php'  ?>
<script src="script.js" ></script>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">

	<title>REGISTER</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" >
</head>
<body>
 
	<div class="container">
		<div class="row">
			<div class="col-4 offset-md-4 form-div">
				<form action="index.php" method="POST" enctype="multipart/form-data">
					<h4 style="margin-bottom: 8%;" class="text-center">User Registration</h4>
						<?php if(!empty($msg)):  ?>
							<div class="alert <?php echo $css_class; ?>">
								<?php echo $msg; ?>
							</div>
						<?php endif; ?>


							<div class="form-group text-center">
								<img src="images/placeholder.png" onclick="triggerClick()" id="profileDisplay">
								<label for="profileImage">Upload picture</label>
								<input type="file" name="profileImage" onchange="displayImage(this)" id="profileImage" style="display: none;">
							</div>

									<div class="form-group">
										<label for="username">Name</label>
										<!-- <textarea name="bio" id="bio" class="form-control"></textarea> -->
										<input id="username" name="username" class="form-control">
									</div>
									<div class="form-group">
										<label for="password">Password</label>
										<input type="" id="password" name="password" class="form-control">
									</div>
									<div class="form-group">
										<label for="email">Email</label>
										<input type="email" id="email" name="email" class="form-control">
									</div>
									<div class="form-group">
										<label for="phone">Phone</label>
										<input id="phone" name="phone" class="form-control">
									</div>
									<div class="form-group">
										<label for="address">Address</label>
										<input id="address" name="address" class="form-control">
									</div>



							<div>
								<button type="submit" name="save-user" class="btn btn-primary btn-block">Register</button>
							</div>
							<p style="margin-top: 3%;" class="text-center">Already have an account? <a href="login.php">Login Here</a>.</p>
				</form>
			</div>
		</div>
	</div>



</body>
</html>