a<?php
	include 'model/login.php';
	

	$login=new login();

	if(isset($_POST['sbmtbtn']))
	{
		if($login->userlogindetail($_POST))
		{
			header('location:userprofile.php');
		}
		else
		{
			echo "invalid username or password";
		}

	}
	
	

	?>


<!--
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
	<table border="1">
		<form method="POST">
			<tr>
				<td colspan="2"><h1>User Login</h1></td>
			</tr>
			<tr>
				<td>User Name</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" name="password"></td>
			</tr>
			<tr>
				<td><input type="submit"></td>
			</tr>
		</form>
	</table>
</body>
</html>
-->
<?php 
include 'layout/header.php';
include 'layout/navbar.php';
?>


<body>
<div class="container">

      <form class="login-form" method="POST" name="login">        
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" class="form-control" placeholder="email" name="email" autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
            </label>
            <button class="btn btn-primary btn-lg btn-block" type="submit" name="sbmtbtn">Login</button>
           </div>
      </form>
    <div class="text-right">
            <div class="credits">
                <!-- 
                    All the links in the footer should remain intact. 
                    You can delete the links only if you purchased the pro version.
                    Licensing information: https://bootstrapmade.com/license/
                    Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
                -->
                <a href="https://bootstrapmade.com/free-business-bootstrap-themes-website-templates/">Business Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </div>
</body>
</html>