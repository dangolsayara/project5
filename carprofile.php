<?php
	include 'model/car.php';

	$car=new car();
	$car->findbyid(1);
?>
<!DOCTYPE html>
<html>
<head>
	<title>drivers car model</title>
</head>
<body>
	<table border="1">
		<tr>
			<td colspan=2><img src="https://images.unsplash.com/photo-1503736334956-4c8f8e92946d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80"></td>
		</tr>
		<tr>
			<td>model</td>
			<td><?php echo $car->model;?></td>
		</tr>
		<tr>
			<td>Brand</td>
			<td><?php echo $car->brand; ?></td>
		</tr>
		<tr>
			<td>Release Date</td>
			<td><?php echo $car->milege; ?></td>
		</tr>
		<tr>
			<td>Price</td>
			<td><?php echo $car->price; ?></td>
		</tr>
	</table>
</body>
</html>