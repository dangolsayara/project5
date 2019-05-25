<?php
include 'config/Call.php';
include 'layout/headerback.php';

	if($session->isloggedin())
	{
		header("location:userprofile.php");
	}
	else
	{
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
	}
?>
<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><a href="index.php"><img class="logo-img" src="styleback/images/logo.png" alt="logo"></a><span class="splash-description">Please enter your user information.</span></div>
            <div class="card-body">
                <form method="POST">
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="username" type="text" placeholder="Username" autocomplete="off" name="email">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="password" type="password" placeholder="Password" name="password">
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Remember Me</span>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block" name="sbmtbtn">Sign in</button>
                </form>
            </div>
            <div class="card-footer bg-white p-0  ">
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="#" class="footer-link">Forgot Password</a>
                </div>
            </div>
        </div>
    </div>
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="styleback/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="styleback/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>
 
</html>