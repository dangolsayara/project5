<?php
	include 'model/user.php';

	session_start();
	$id=$_SESSION['id'];


	$user=new user();


	if(!$user->findbyid($id))
	{
		//redirect "not found";
		echo "not found";
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>User Profile</title>
</head>
<body>
	<table border="1">
		<tr>
			<td><label>Name</label></td>
			<td><?php echo $user->name;?></td>
		</tr>
		<tr>
			<td><label>Email</label></td>
			<td><?php echo $user->email;?></td>
		</tr>
		
		<tr>
			<td><label>location id</label></td>
			<td><?php echo $user->location_id;?></td>
		</tr>
		<tr>
			<td><label>mobile</label></td>
			<td><?php echo $user->mobile;?></td>
		</tr>
		<tr>
			<td><a href="edit.php">edit</a> </td>
		</tr>
	</table>
</body>
</html>
