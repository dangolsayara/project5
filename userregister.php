<?php
	include 'model/user.php';
	$user=new user();
	if($user->insert($_POST))
	{

	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
	<form>
	<table border="2">
		<tr>
			<td><label>Name</label></td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td><label>Email</label></td>
			<td><input type="text" name="email"></td>
		</tr>
		<tr>
			<td><label>Password</label></td>
			<td><input type="text" name="password"></td>
		</tr>
		<tr>
			<td><label>location</label></td>
			<td><input type="text" name="place"></td>
		</tr>
		<tr>
			<td><label>mobile</label></td>
			<td><input type="text" name="mobile"></td>
		</tr>
		<tr>
			<td><input type="submit"> </td>
		</tr>
	</table>
	</form>
</body>
</html>