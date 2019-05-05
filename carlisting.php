<?php

//not a car list page ,, listing make your car available for rent
include 'model/car.php';
	if (isset($_POST['sbmtbtn'])) 
	{
		$car=new car();
		$car->insert($_POST);
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST">
		<table border="4">
			<tr>
				<td>carbrand</td>
				<td><input type="text" name="carbrand"></td>
			</tr>
			<tr> 
				<td>carmodel</td>
				<td><input type="text" name="carmodel"></td>
			</tr>
			<tr>
				<td>cardate</td>
				<td><input type="text" name="cardate"></td>
			</tr>
			<tr>
				<td>price</td>
				<td><input type="text" name="price"></td>
			</tr>
			<tr>
				<td><input type="submit" name="sbmtbtn"></td>
			</tr>
		</table>
	</form>	
</body>
</html>