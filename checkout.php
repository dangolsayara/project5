<?php
    include 'config/Call.php';


	$id=$_GET['id'];
	if(empty($id))
	{
		header('location:index.php');
	}
    else
    {
        if($session->isloggedin())
        {
            $data=$car->findbyid($id);

            $availability=$listing->findbyvehicleid($id);
            if (isset($_POST['sbmtbtn']))
            {
                if($checkout->insert($_POST))
                {
                    header('location:index.php');
                }
            }
        }
        else
        {
            header('location:login.php');
        }
    }	
?>
<?php
	include 'layout/headerback.php';
	include 'layout/sidebarback.php';

?>
       <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Vehicle Checkout </h2>
                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">E-coommerce</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">E-Commerce Product Checkout</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="mb-0">Billing address</h4>
                                        </div>
                                        <div class="card-body">
                                            <form class="needs-validation" novalidate="" method="POST">
                                                <!--
                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <label for="firstName">First name</label>
                                                        <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                                                        <div class="invalid-feedback">
                                                            Valid first name is required.
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label for="lastName">Last name</label>
                                                        <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                                                        <div class="invalid-feedback">
                                                            Valid last name is required.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="email">Email <span class="text-muted">(Optional)</span></label>
                                                    <input type="email" class="form-control" id="email" placeholder="you@example.com">
                                                    <div class="invalid-feedback">
                                                        Please enter a valid email address for shipping updates.
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="address">Address</label>
                                                    <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
                                                    <div class="invalid-feedback">
                                                        Please enter your shipping address.
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                                                    <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5 mb-3">
                                                        <label for="country">Country</label>
                                                        <select class="custom-select d-block w-100" id="country" required="">
                                                            <option value="">Choose...</option>
                                                            <option>United States</option>
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            Please select a valid country.
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="state">State</label>
                                                        <select class="custom-select d-block w-100" id="state" required="">
                                                            <option value="">Choose...</option>
                                                            <option>California</option>
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            Please provide a valid state.
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 mb-3">
                                                        <label for="zip">Zip</label>
                                                        <input type="text" class="form-control" id="zip" placeholder="" required="">
                                                        <div class="invalid-feedback">
                                                            Zip code required.
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr class="mb-4">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="same-address">
                                                    <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="save-info">
                                                    <label class="custom-control-label" for="save-info">Save this information for next time</label>
                                                </div>
                                                <hr class="mb-4">
                       
                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <label for="cc-name">Name on card</label>
                                                        <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                                                        <small class="text-muted">Full name as displayed on card</small>
                                                        <div class="invalid-feedback">
                                                            Name on card is required
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label for="cc-number">Credit card number</label>
                                                        <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                                                        <div class="invalid-feedback">
                                                            Credit card number is required
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3 mb-3">
                                                        <label for="cc-expiration">Expiration</label>
                                                        <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
                                                        <div class="invalid-feedback">
                                                            Expiration date required
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 mb-3">
                                                        <label for="cc-cvv">CVV</label>
                                                        <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                                                        <div class="invalid-feedback">
                                                            Security code required
                                                        </div>
                                                    </div>
                                                </div>

                                            -->
                                                <input type="hidden" name="bookedby_id" value="<?php echo $session->getkey('id'); ?>">
                                                <input type="hidden" name="vehicle_id" value="<?php echo $id; ?>">
                                                <hr class="mb-4">
                                                <button class="btn btn-primary btn-lg btn-block" type="submit" name="sbmtbtn">Continue to checkout</button>
                                        <!--    </form> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="card-title"><?php echo $data['model'];?></h3>
                                        <h6 class="card-subtitle text-muted mb-3"><?php echo $data['brand'];?></h6>
                                        <img class="img-fluid mb-4" src="uploads/<?php echo $data['display_image'];?>" alt="Card image cap">
                                        <p class="card-text">Ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Integer quis ipsum.</p>
                                        <h4 class="mb-3">For Which date would you like to book this car</h4>
                                         <div class="d-block my-3">

                                        <?php
                              
                                            if(!$availability)
                                                {
                                                    echo "This Car is not available for now";
                                                }
                                            else
                                                {
                                                    foreach ($availability as $date) 
                                                        {  
                                        ?>       


                                                    <div class="custom-control custom-radio">
                                                        <input id="credit" name="listing_id" type="radio" class="custom-control-input" checked="" required="" value="<?php echo $date['id']?>">
                                                        <label class="custom-control-label" for="credit"><?php echo $date['available_from'];
                                                            echo "  to  ";
                                                            echo $date['available_until'] ?></label>
                                                    </div>                  
                                    
                                            <?php
                                                        }
                                                }
                                            ?>  
                                         </div>      

                                            
                                        <a href="#" class="card-link">Card link</a>
                                        <a href="#" class="card-link">Another link</a>
                                    </div>
                                </div>
                            </div>
                             </form>   
                            </div>
                        </div>
                    </div>
                </div>


                <?php
                	include 'layout/footerback.php';
                ?>