<?php
	include 'model/user.php';
	$user=new user();
	if ($_POST['sbmtbtn']) 
	{
		$user->insert($_POST);
	}
	
?>

<!--
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
	<form>
	<table border="2">
		<tr>
			<td><label>Name</label></td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td><label>Email</label></td>
			<td><input type="text" name="email"></td>
		</tr>
		<tr>
			<td><label>Password</label></td>
			<td><input type="text" name="password"></td>
		</tr>
		<tr>
			<td><label>location</label></td>
			<td><input type="text" name="place"></td>
		</tr>
		<tr>
			<td><label>mobile</label></td>
			<td><input type="text" name="mobile"></td>
		</tr>
		<tr>
			<td><input type="submit"> </td>
		</tr>
	</table>
	</form>
</body>
</html>-->
<?php
include 'layout/header.php';
include 'layout/navbar.php';
?>

 <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-files-o"></i>User Info</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<!--<li><i class="icon_document_alt"></i>Forms</li>
						<li><i class="fa fa-files-o"></i>User</li>-->
					</ol>
				</div>
			</div>
              <!-- Form validations -->              
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Form validations
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form class="form-validate form-horizontal" id="feedback_form" method="get" action="">
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Full Name <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="cname" name="name" type="text" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="cemail" class="control-label col-lg-2">E-Mail <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="cemail" type="email" name="email" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="curl" class="control-label col-lg-2">Password</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="password" type="password" name="password" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Location</label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="location" name="location" type="text" required />
                                          </div>
                                      </div>                                      
                                      <div class="form-group ">
                                          <label for="ccomment" class="control-label col-lg-2">Mobile</label>
                                          <div class="col-lg-10">
                                          	<input class="form-control" id="mobile" name="mobile" type="text" required />
	
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button class="btn btn-primary" type="submit" name="sbmtbtn">Save</button>
                                              <button class="btn btn-default" type="button">Cancel</button>
                                          </div>
                                      </div>
                                  </form>
                              </div>

                          </div>
                      </section>
                  </div>
              </div>
             
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
 