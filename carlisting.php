<?php

//not a car list page ,, listing make your car available for rent
include 'model/car.php';
include 'model/session.php';

$session=new session();

if ($session->status==true) 
{
	if (isset($_POST['sbmtbtn'])) 
	{
		$car=new car();
		$car->listing($_POST);
	}
}
else
{
	header('location:login.php');
}


	
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST">
		<table border="2">
			<tr>
				<td>Vehicle Id</td>
				<td><input type="text" name="vehicle_id"></td>
			</tr>
			<tr>
				<td>Available From</td>
				<td><input type="date" name="available_from"></td>
			</tr>
			<tr> 
				<td>Avaible Until</td>
				<td><input type="date " name="available_until"></td>
			</tr>
			<tr>
				<td>User Id</td>
				<td><input type="text" name="user_id"></td>
			</tr>
			<tr> 
				<td><input type="submit" name="sbmtbtn"></td>
			</tr>
		</table>
	</form>	
</body>
</html>