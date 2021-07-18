



<?php include 'database.php'  ?>
<?php include 'processForm.php'  ?>
<?php $result = mysqli_query($conn,"SELECT * FROM users"); ?>

<?php
$connn = mysqli_connect('localhost', 'root', '', 'comment');


if (isset($_POST['submit'])){
$name = $_POST['name'];
$comment = $_POST['comment'];


$sql = "INSERT INTO comment (name, comment)
		VALUES ('$name', '$comment')";
		$resulti = mysqli_query($connn, $sql);
		if($resulti){
			echo "<script>alert('comment added.')</script>";
		}else{
			echo "<script>alert('comment not added.')</script>";
		}

}


?>




<!DOCTYPE html>
<html>
 <head>


<title> Profiles </title>
<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="commentstyle.css">



 </head>
<body>


	<div class="probox"><h2>PROFILE PAGE</h2></div>
 	
	<div class="tablestyle">
		<div class="row ">
			<div class="">


				<div class="logout">
				<a style="align-self: center;" href="logout.php"><button class="btn btn-primary btn-block">Log Out</button></a>
				</div>


<?php
if (mysqli_num_rows($result) > 0) {
?>
<table class="table table-bordered ">
	  <thead>
	  			<th>S/No.</th>
	    		<th>Picture</th>
				<th>Name</th>
				<th>Password</th>
				<th>Email</th>
				<th>Phone No</th>
				<th>Address</th>
				<th>Action</th>
	  </thead>


	  <tbody>

			<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
	  <tr>
		    <td>
		    	<?php echo $row["id"]; ?>
		    </td>

			<td>
				<img src="images/<?php echo $row ['profile_image']; ?> " width= "50px"/>
			</td>

			<td>
				<?php echo $row["username"]; ?>
			</td>

			<td>
				<?php echo $row["password"]; ?>	
			</td>

			<td>
				<?php echo $row["email"]; ?>
			</td>

			<td>
				<?php echo $row["phone"]; ?>	
			</td>

			<td>
				<?php echo $row["address"]; ?>
			</td>

			<td>
				<a style="align-self: center;" href="update-process.php?id=<?php echo $row["id"]; ?>"><button class="btn btn-primary btn-block">Edit</button></a>
			</td>

      </tr>
			<?php
			$i++;
			}
			?>

		</tbody>


</table>
 <?php
}
else
{
    echo "No result found";
}
?>


	</div>

                <!-- comment section. -->



				<form action="" method="POST" class="form">

					
						<div  style="margin-top: 30px;" class="cbox">

								<div class="div1">
									<label class="label1">Comment Section</label>
								</div>

							
							
							<br>
							<input type="text" placeholder="Name" id="name" name="name" style="width: 150%; ">
							
							<br>
							<br>
							<textarea name="comment" id="comment" style="width: 250%;" class="co" placeholder="Enter your Comment" required ></textarea>
							<br>
							<br>
							<button name="submit" class="btn btn-primary btn-block">POST COMMENT</button>

						</div>




						
						<br>
						<div class="prev-comments">
								<?php 
								
								$sql = "SELECT * FROM comment";
								$resulti = mysqli_query($connn, $sql);
								if (mysqli_num_rows($resulti) > 0) {
									while ($row = mysqli_fetch_assoc($resulti)) {

								?>
								<div class="single-item">
									<h4 style="color: #007bff"><?php echo $row['name']; ?></h4>
									<p style="font-style: italic;"><?php echo $row['comment']; ?></p>
								</div>
								<?php
									}
								}
								
								?>
							</div>
				

				
				</form>
		


								



	</div> 
	</div>



 </body>
</html>
