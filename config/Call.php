<?php
	include 'session/Session.php';
	$session=new session();

	include 'database/Database.php';
	$database=new database();

	include 'model/login.php';
	$login=new login();

	include 'model/car.php';
	$car=new car();

	include 'model/user.php';
	$user=new user();


    include 'model/listing.php';
    $listing=new listing();

    include 'model/checkout.php';
    $checkout=new checkout();

    include 'model/image.php';
    $carImage=new image();

?>

