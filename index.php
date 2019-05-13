<?php
include 'model/session.php';
$session=new session();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Carso-Online Car rental</title>
</head>
<body>
	<table border="4" width="900px">
		<tr>
			<td colspan="3"><h1>Online Car rental</h1></td>
		</tr>
		<tr>
			<td><a href="carlisting.php">List your car</a></td>
			<?php
			if ($session->status==true) 
			{
				?>
				<h1>You are logged in</h1>
			<?php
			}
			else
			{
			?>
			<td><a href="login.php">Login</a></td>
			<td><a href="userregister.php">Register</a></td>
			<?php
			}
			?>
		</tr>
		<tr>
			<form method="get" action="search.php">
				<td colspan="3"><input type="text" name="country"> <input type="date" name="from"> <input type="date" name="until">
				<input type="submit" name="search" value="search"></td>
			</form>
		</tr>
		<tr>
			<td >You might like</td>

		</tr>
		<tr>
			<td><?php
					require 'layout/youmightlike.php';
					?>
			</td>
		</tr>
		<tr>
			<td>Top destinations</td>
		</tr>
		<tr>
			<td><?php
					require 'layout/topdestination.php'
					?>
						
					</td>
		</tr>
	</table>
</body>
</html>