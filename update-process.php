<?php include 'processForm.php'  ?>
<script src="script.js" ></script>
<?php
include_once 'database.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE users set id='" . $_POST['id'] . "', profile_image='" . $_POST['profile_image'] . "', username='" . $_POST['username'] . "', password='" . $_POST['password'] . "' ,email='" . $_POST['email'] . "' ,phone='" . $_POST['phone'] . "' ,address='" . $_POST['address'] . "' WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM users WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update profile</title>
</head>
<body>
<form name="" method="post" action="" >
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="profiles.php">profile page</a>
</div>

id: <br>
<input type="id" name="id" class="" value="<?php echo $row['id']; ?>">
<br>

profile image: <br>
<input type="file" name="profile_image" class="" value="<?php echo $row['profile_image']; ?>">
<br>

username :<br>
<input type="id" name="username" class="txtField" value="<?php echo $row['username']; ?>">
<br>

password:<br>
<input type="text" name="password" class="txtField" value="<?php echo $row['password']; ?>">
<br>

Email:<br>
<input type="text" name="email" class="txtField" value="<?php echo $row['email']; ?>">
<br>

phone:<br>
<input type="text" name="phone" class="txtField" value="<?php echo $row['phone']; ?>">
<br>

address:<br>
<input type="text" name="address" class="txtField" value="<?php echo $row['address']; ?>">
<br>

<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>