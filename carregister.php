<?php
	include 'model/car.php';

	if (isset($_POST['sbmtbtn'])) 
	{
		$car=new car();
		if($car->insert($_POST))
		{
			header('location:index.php');
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Car register</title>
</head>
<body>
	<form method="POST">
		<table border="4">
			<tr>
				<td>Model</td>
				<td><input type="text" name="model"></td>
			</tr>
			<tr>
				<td>Brand</td>
				<td><input type="text" name="brand"></td>
			</tr>
			<tr>
				<td>No of Seats</td>
				<td><input type="text" name="noofseats"></td>
			</tr>
			<tr>
				<td>Milege</td>
				<td><input type="text" name="milege"></td>
			</tr>
			<tr>
				<td>Price</td>
				<td><input type="text" name="price"></td>
			</tr>
			<tr>
				<td>Location</td>
				<td><input type="text" name="place"></td>
			</tr>
			<tr>
				<td><input type="submit" name="sbmtbtn"></td>
			</tr>
		</table>
	</form>
</body>
</html>