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
	<?php 

	if(!isset($_SESSION['username'])){
		echo "Welcome Admin!";
	}else{
		$username = $_SESSION['username'];
		$query3 = "select * from admin where username = '$username'";
		$runquery3 = mysqli_query($con, $query3);
		$rowdata = mysqli_fetch_array($runquery3);
		$username = $rowdata['username'];
		$img = $rowdata['img'];
		$about = $rowdata['about'];
		echo "<table align='center'>
		<tr>
		  <td>Username==></td>  
		  <td>$username</td>
		</tr>
		<tr>
		  <td>About Myself==></td>  
		  <td>$about</td>
		</tr>
		<tr>
		  <td>Image==></td>
		  <td><img src='admin/$img' height=500px width=500px></td>
		</tr>
		</table>";
	}

	 ?>
</body>
</html>