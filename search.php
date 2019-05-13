<?php
	require 'model/car.php';

	if (isset($_GET['country'])) 
	{
		$place=$_GET['country'];
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
	$result=$car->search('Bhaktapur',$from,$until);
	//$result=$car->findbyid('1');
	if ($result==false)
	 {

		echo "No data found";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Find what you like</title>
</head>
<body>
 	<table border="2">
 		<tr>
 			<td>Car results</td>
 		</tr>
 		<?php

 		 foreach ($result as $car) : ?>
 			<tr>
 				<td><?php echo $car['brand']; ?></td>
 				<td><?php echo $car['model']; ?></td>
 				<td><?php echo $car['price']; ?></td>
 				<td><a href="carprofile.php?id=<?php echo $car['id'];?>">view</a></td>
 			</tr>
 			
 		<?php endforeach; ?>

 	</table>
</body>
</html>