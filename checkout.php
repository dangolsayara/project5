<?php

	include 'model/checkout.php';

	$id=$_GET['id'];
	if(!isset($id))
	{
		header('location:index.php');
	}
	if (isset($_POST['sbmtbtn']))
	{
		$checkout=new checkout();
		if($checkout->insert($_POST))
		{
			header('location:index.php');
		}
	}

	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Checkout</title>
</head>
<body>
	<form method="POST">
		<table border="2">
		<tr>
			<td><h1>Checkout</h1></td>
		</tr>
		<tr>
			<td><label>Id</label></td>
			<td>
				<input type="text" name="" value="<?php echo "$id"; ?>" disabled>
			</td>
		</tr>
		<tr>
			<td><label>Vehicle_id</label></td>
			<td><input type="text" name="vehicle_id"></td>
		</tr>
		<tr>
			<td><label>Listing Id</label></td>
			<td><input type="text" name="listing_id"></td>
		</tr>
		<tr>
			<td><label>Checkout From</label></td>
			<td><input type="date" name="checkout_from"></td>
		</tr>
		<tr>
			<td><label>Checkout Until</label></td>
			<td><input type="date" name="checkout_until"></td>
		</tr>
		<tr>
			<td><label>User Id</label></td>
			<td><input type="text" name="user_id"></td>
		</tr>
		<tr>
			<td><input type="submit" name="sbmtbtn"></td>
		</tr>
		</table>
	</form>
</body>
</html>