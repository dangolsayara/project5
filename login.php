<?php
	include 'model/login.php';

	$login=new login();
	if($login->userlogindetail($_POST))
	{
		
	}

	

	?>

<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
	<table>
		<form method="POST">
			<tr>
				<td>User Name</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" name="password"></td>
			</tr>
		</form>
	</table>
</body>
</html>
