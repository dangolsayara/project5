<?php
	require 'model/car.php';

	if (isset($_GET['country'])) 
	{
		$country=$_GET['country'];
	}
	else
	{
		$country="nepal";
	}
	if (isset($_GET['from'])) 
	{
		$from=$_GET['from'];
	}
	else
	{
		$from='2019/05/03';
	}
	if (!isset($_GET['until']))
	{
		$until=$_GET['until'];
	}
	else
	{
		$until='2019/06/03';
	}

	$car=new car();
	$result=$car->search($country,$from,$until);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Find what you like</title>
</head>
<body>
 	<table>
 		<tr>
 			<td rowspan="3">Car result</td>
 		</tr>
 		<?php foreach ($result as $key => $car) : ?>
 			<tr>
 				<td><?php echo $car['carbrand'] ?></td>
 				<td><?php echo $car['carmodel'] ?></td>
 				<td><?php echo $car['price'] ?></td>
 				<td><a href="carprofile/<?php echo $car['id'];?>"></a></td>
 			</tr>
 			
 		<?php endforeach; ?>

 	</table>
</body>
</html>