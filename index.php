<?php

require 'db.php';
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration and Login System</title>
</head>
<body style="background-image: url(w1.jpg);">
	<div id="Mainwrapper">
		<form method="post" enctype="multipart/form-data">
			<table align="center" style="color: white; width: 365px; height: 200px; position: relative; top: 200px; background-image: url(w2.jpg);" border = "1">
				<tr>
					<td style="position: relative; left: 50px; bottom: 5px; background-color: red;">
						<center><h3>Login Form</h3></center>
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
					<td><center>
						<input type="submit" name="SignIn" value="Login" style="background-color: #42729B; color: white; width: 100px; height: 40px; position: relative; top: 5px;">
					</center></td>
					<td><center>
						<a href="register.php">
						<input type="button" name="Register" value="Register" style="background-color: #EDE613; color: white; width: 150px; height: 40px; position: relative; top: 5px;"></a>
					</center></td>
				</tr>
			</table>
		</form>
	</div>

</body>
</html>

<?php

if(isset($_POST['SignIn'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$query1 = "select * from admin where username = '$username' AND password = '$password'";
	$runquery1 = mysqli_query($con, $query1);

	if(mysqli_num_rows($runquery1) > 0){
		header('location: Mainpage.php');
		$_SESSION['username'] = $username;
	}else{
		echo '<script>alert("Invalid username and password")</script>';
}
}

?>