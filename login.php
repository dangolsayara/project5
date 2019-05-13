<?php
	include 'model/login.php';

	$login=new login();
	if($login->userlogindetail($_POST))
	{
		header('location:userprofile.php');
	}
	else
	{
		echo "invalid username or password";
	}

	

	?>

<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
	<table border="1">
		<form method="POST">
			<tr>
				<td colspan="2"><h1>User Login</h1></td>
			</tr>
			<tr>
				<td>User Name</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" name="password"></td>
			</tr>
			<tr>
				<td><input type="submit"></td>
			</tr>
		</form>
	</table>
</body>
</html>
