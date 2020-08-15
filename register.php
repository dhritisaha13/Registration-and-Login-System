<?php

require 'db.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration and Login System</title>
</head>
<body style="background-image: url(w3.jpg);">
	<div id="Mainwrapper">
		<form method="post" enctype="multipart/form-data">
			<table align="center" style="color: white; width: 365px; height: 200px; position: relative; top: 200px; background-image: url(w2.jpg);" border = "1">
				<tr>
					<td style="position: relative; left: 50px; bottom: 5px; background-color: red;">
						<center><h3>Registration Form</h3></center>
					</td>
				</tr>
				<tr>
					<td style="font-size: 20px;"><center>Username</center></td>
					<td><input type="text" name="username" placeholder="Type your Username"></td>
				</tr>
				<tr>
					<td style="font-size: 20px;"><center>Password</center></td>
					<td><input type="password" name="password" placeholder="Type your Password"></td>
				</tr>
				<tr>
					<td style="font-size: 20px;"><center>About Yourself</center></td>
					<td><input type="text" name="about" placeholder="Type your Details"></td>
				</tr>
				<tr>
					<td><center>
						<input type="submit" name="Register" value="Register" style="background-color: #EDE613; color: white; width: 150px; height: 40px; position: relative; top: 5px;">
					</center></td>
				</tr>
				<tr>
					<td align="center">Upload Image</td>
					<td><input type="file" name="img1"></td>
				</tr>
			</table>
		</form>
	</div>

</body>
</html>

<?php 

if(isset($_POST['Register'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$about = $_POST['about'];
	$img = $_FILES['img1']['name'];
	$temp_name = $_FILES['img1']['tmp_name'];
	$filepath = "admin/$img";
	move_uploaded_file($temp_name, $filepath);
	$query2 = "insert into admin (username, password, img, about) values ('$username', '$password', '$img', '$about')";
	$runquery2 = mysqli_query($con, $query2);

	if ($runquery2) {
		echo '<script>alert("Acount has been registered")</script>';
	}
}

 ?>