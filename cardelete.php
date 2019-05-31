<?php

include 'config/Call.php';

if (isset($_GET['vehicle_id'])) 
	{
		$vehicle_id=$_GET['vehicle_id'];
		$car->delete($vehicle_id);
		header('location:userprofile.php');
	}
	else
	{
		header('location:userprofile.php');
	}

	?>