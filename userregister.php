<?php
  include 'config/Call.php';

  include 'layout/header.php';
  include 'layout/navbar.php';


  if ($session->isloggedin()) 
  {
    header("location:userprofile.php");
  }
  else
  {
    if (isset($_POST['sbmtbtn'])) 
    {
      if($user->insert($_POST))
        header("location:userprofile.php");
    }
  }

	
?>

<div class="container">
   <section id="main-content" class="booking-details_wrap">

          <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-files-o"></i>User Register</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
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
                              Please Fill all the info
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
                                              <button class="btn btn-default" type="reset">Cancel</button>
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
</div>

 