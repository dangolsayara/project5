<?php
	$country=$_GET['country'];
	$from=$_GET['from'];
	$until=$_GET['until'];


	require 'classes/searchmanager.php';
	
	$search=new search($country,$from,$until);
	$result=$search->generateresult();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Find what you like</title>
</head>
<body>
 	<?php echo $result; ?>
</body>
</html>