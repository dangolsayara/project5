<?php
	include 'model/car.php';


	$id=$_GET['id'];
	if(!isset($id))
	{
		$id=1;
	}

	$car=new car();


	if(!$car->findbyid($id))
	{
		//redirect "not found";
		echo "not found";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>drivers car model</title>
</head>
<body>
	<table border="1">
		<tr>
			<td><img src="https://images.unsplash.com/photo-1503736334956-4c8f8e92946d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" width="300px"></td>
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
			<td>Milege</td>
			<td><?php echo $car->milege; ?></td>
		</tr>
		<tr>
			<td>Price</td>
			<td><?php echo $car->price; ?></td>
		</tr>
	</table>

	<h2>Available </h2>
	<table>
		<tr>
			<td></td>
		</tr>
	</table>
	<?php echo $car->id; ?>
	<a href="checkout.php?id=<?php echo $car->id;?>">Checkout</a>
</body>
</html>