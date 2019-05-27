<?php
	include 'config/Call.php';


	$id=$session->getkey("id");

	$data=$user->findbyid($id);
	$cars=$car->findbyuserid($id);
	$mylisting=$listing->findbyuserid($id);

	if(empty($data))
	{
		//redirect "not found";
		echo "not found";
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
	        <div class="dashboard-influence">
	            <div class="container-fluid dashboard-content">
	                <!-- ============================================================== -->
	                <!-- pageheader  -->
	                <!-- ============================================================== -->
	                <div class="row">
	                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
	                        <div class="page-header">
	                            <h3 class="mb-2">Dashboard</h3>
	                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
	                            <div class="page-breadcrumb">
	                                <nav aria-label="breadcrumb">
	                                    <ol class="breadcrumb">
	                                        <li class="breadcrumb-item"><a href="userprofile.php" class="breadcrumb-link">Dashboard</a></li>
	                                        <li class="breadcrumb-item active" aria-current="page">Home</li>
	                                    </ol>
	                                </nav>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <!-- ============================================================== -->
	                <!-- end pageheader  -->
	                <!-- ============================================================== -->
	                <!-- ============================================================== -->
	                <!-- content  -->
	                <!-- ============================================================== -->
	                <!-- ============================================================== -->
	                <!-- influencer profile  -->
	                <!-- ============================================================== -->
	                <div class="row">
	                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
	                        <div class="card influencer-profile-data">
	                            <div class="card-body">
	                                <div class="row">
	                                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-12">
	                                        <div class="text-center">
	                                            <img src="assets/images/avatar-1.jpg" alt="User Avatar" class="rounded-circle user-avatar-xxl">
	                                            </div>
	                                        </div>
	                                        <div class="col-xl-10 col-lg-8 col-md-8 col-sm-8 col-12">
	                                            <div class="user-avatar-info">
	                                                <div class="m-b-20">
	                                                    <div class="user-avatar-name">
	                                                        <h2 class="mb-1"><?php echo $data['name']; ?></h2>
	                                                    </div>
	                                                    <div class="rating-star  d-inline-block">
	                                                        <i class="fa fa-fw fa-star"></i>
	                                                        <i class="fa fa-fw fa-star"></i>
	                                                        <i class="fa fa-fw fa-star"></i>
	                                                        <i class="fa fa-fw fa-star"></i>
	                                                        <i class="fa fa-fw fa-star"></i>
	                                                        <p class="d-inline-block text-dark">14 Reviews </p>
	                                                    </div>
	                                                </div>
	                                                <!--  <div class="float-right"><a href="#" class="user-avatar-email text-secondary">www.henrybarbara.com</a></div> -->
	                                                <div class="user-avatar-address">
	                                                    <p class="border-bottom pb-3">
	                                                        <span class="d-xl-inline-block d-block mb-2"><i class="fa fa-map-marker-alt mr-2 text-primary "></i>4045 <?php echo $data['location']; ?>, CA 90017</span>
	                                                        <span class="mb-2 ml-xl-4 d-xl-inline-block d-block">Joined date: 23 June, 2018  </span>
	                                                        <span class=" mb-2 d-xl-inline-block d-block ml-xl-4">Male 
	                                                                </span>
	                                                        <span class=" mb-2 d-xl-inline-block d-block ml-xl-4">29 Year Old </span>
	                                                    </p>
	                                                    <div class="mt-3">
	                                                        <a href="#" class="badge badge-light mr-1">Fitness</a> <a href="#" class="badge badge-light mr-1">Life Style</a> <a href="#" class="badge badge-light">Gym</a>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="border-top user-social-box">
	                                    <div class="user-social-media d-xl-inline-block"><span class="mr-2 twitter-color"> <i class="fab fa-twitter-square"></i></span><span>13,291</span></div>
	                                    <div class="user-social-media d-xl-inline-block"><span class="mr-2  pinterest-color"> <i class="fab fa-pinterest-square"></i></span><span>84,019</span></div>
	                                    <div class="user-social-media d-xl-inline-block"><span class="mr-2 instagram-color"> <i class="fab fa-instagram"></i></span><span>12,300</span></div>
	                                    <div class="user-social-media d-xl-inline-block"><span class="mr-2  facebook-color"> <i class="fab fa-facebook-square "></i></span><span>92,920</span></div>
	                                    <div class="user-social-media d-xl-inline-block "><span class="mr-2 medium-color"> <i class="fab fa-medium"></i></span><span>291</span></div>
	                                    <div class="user-social-media d-xl-inline-block"><span class="mr-2 youtube-color"> <i class="fab fa-youtube"></i></span><span>1291</span></div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- ============================================================== -->
	                    <!-- end influencer profile  -->
	                    <!-- ============================================================== -->
	                    <!-- ============================================================== -->
	                    <!-- widgets   -->
	                    <!-- ============================================================== -->
	                    <div class="row">
	                        <!-- ============================================================== -->
	                        <!-- four widgets   -->
	                        <!-- ============================================================== -->
	                        <!-- ============================================================== -->
	                        <!-- total views   -->
	                        <!-- ============================================================== -->
	                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
	                            <div class="card">
	                                <div class="card-body">
	                                    <div class="d-inline-block">
	                                        <h5 class="text-muted">Total Views</h5>
	                                        <h2 class="mb-0"> 10,28,056</h2>
	                                    </div>
	                                    <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
	                                        <i class="fa fa-eye fa-fw fa-sm text-info"></i>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <!-- ============================================================== -->
	                        <!-- end total views   -->
	                        <!-- ============================================================== -->
	                        <!-- ============================================================== -->
	                        <!-- total followers   -->
	                        <!-- ============================================================== -->
	                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
	                            <div class="card">
	                                <div class="card-body">
	                                    <div class="d-inline-block">
	                                        <h5 class="text-muted">Total Followers</h5>
	                                        <h2 class="mb-0"> 24,763</h2>
	                                    </div>
	                                    <div class="float-right icon-circle-medium  icon-box-lg  bg-primary-light mt-1">
	                                        <i class="fa fa-user fa-fw fa-sm text-primary"></i>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <!-- ============================================================== -->
	                        <!-- end total followers   -->
	                        <!-- ============================================================== -->
	                        <!-- ============================================================== -->
	                        <!-- partnerships   -->
	                        <!-- ============================================================== -->
	                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
	                            <div class="card">
	                                <div class="card-body">
	                                    <div class="d-inline-block">
	                                        <h5 class="text-muted">Partnerships</h5>
	                                        <h2 class="mb-0">14</h2>
	                                    </div>
	                                    <div class="float-right icon-circle-medium  icon-box-lg  bg-secondary-light mt-1">
	                                        <i class="fa fa-handshake fa-fw fa-sm text-secondary"></i>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <!-- ============================================================== -->
	                        <!-- end partnerships   -->
	                        <!-- ============================================================== -->
	                        <!-- ============================================================== -->
	                        <!-- total earned   -->
	                        <!-- ============================================================== -->
	                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
	                            <div class="card">
	                                <div class="card-body">
	                                    <div class="d-inline-block">
	                                        <h5 class="text-muted">Total Earned</h5>
	                                        <h2 class="mb-0"> $149.00</h2>
	                                    </div>
	                                    <div class="float-right icon-circle-medium  icon-box-lg  bg-brand-light mt-1">
	                                        <i class="fa fa-money-bill-alt fa-fw fa-sm text-brand"></i>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <!-- ============================================================== -->
	                        <!-- end total earned   -->
	                        <!-- ============================================================== -->
	                    </div>
	                    <!-- ============================================================== -->
	                    <!-- end widgets   -->
	                    <!-- ============================================================== -->
	                    <div class="row">
	                        <!-- ============================================================== -->
	                        <!-- followers by gender   -->
	                        <!-- ============================================================== -->
	                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
	                            <div class="card">
	                                <h5 class="card-header">Followers by Gender</h5>
	                                <div class="card-body">
	                                    <div id="gender_donut" style="height: 230px;"></div>
	                                </div>
	                                <div class="card-footer p-0 bg-white d-flex">
	                                    <div class="card-footer-item card-footer-item-bordered w-50">
	                                        <h2 class="mb-0"> 60% </h2>
	                                        <p>Female </p>
	                                    </div>
	                                    <div class="card-footer-item card-footer-item-bordered">
	                                        <h2 class="mb-0">40% </h2>
	                                        <p>Male </p>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <!-- ============================================================== -->
	                        <!-- end followers by gender  -->
	                        <!-- ============================================================== -->
	                        <!-- ============================================================== -->
	                        <!-- followers by age   -->
	                        <!-- ============================================================== -->
	                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
	                            <div class="card">
	                                <h5 class="card-header">Followers by Age</h5>
	                                <div class="card-body">
	                                    <div class="mb-3">
	                                        <div class="d-inline-block">
	                                            <h4 class="mb-0">15 - 20</h4>
	                                        </div>
	                                        <div class="progress mt-2 float-right progress-md">
	                                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 45%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
	                                        </div>
	                                    </div>
	                                    <div class="mb-3">
	                                        <div class="d-inline-block">
	                                            <h4 class="mb-0">20 - 25</h4>
	                                        </div>
	                                        <div class="progress mt-2 float-right progress-md">
	                                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 55%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
	                                        </div>
	                                    </div>
	                                    <div class="mb-3">
	                                        <div class="d-inline-block">
	                                            <h4 class="mb-0">25 - 30</h4>
	                                        </div>
	                                        <div class="progress mt-2 float-right progress-md">
	                                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
	                                        </div>
	                                    </div>
	                                    <div class="mb-3">
	                                        <div class="d-inline-block">
	                                            <h4 class="mb-0">30 - 35</h4>
	                                        </div>
	                                        <div class="progress mt-2 float-right progress-md">
	                                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 35%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
	                                        </div>
	                                    </div>
	                                    <div class="mb-3">
	                                        <div class="d-inline-block">
	                                            <h4 class="mb-0">35 - 40</h4>
	                                        </div>
	                                        <div class="progress mt-2 float-right progress-md">
	                                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 21%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
	                                        </div>
	                                    </div>
	                                    <div class="mb-3">
	                                        <div class="d-inline-block">
	                                            <h4 class="mb-0">45 - 50</h4>
	                                        </div>
	                                        <div class="progress mt-2 float-right progress-md">
	                                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 85%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
	                                        </div>
	                                    </div>
	                                    <div class="mb-3">
	                                        <div class="d-inline-block">
	                                            <h4 class="mb-0">50 - 55</h4>
	                                        </div>
	                                        <div class="progress mt-2 float-right progress-md">
	                                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 25%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <!-- ============================================================== -->
	                        <!-- end followers by age   -->
	                        <!-- ============================================================== -->
	                        <!-- ============================================================== -->
	                        <!-- followers by locations   -->
	                        <!-- ============================================================== -->
	                        <div class="col-xl-5 col-lg-12 col-md-6 col-sm-12 col-12">
	                            <div class="card">
	                                <h5 class="card-header">Top Folllowes by Locations </h5>
	                                <div class="card-body">
	                                    <canvas id="chartjs_bar_horizontal"></canvas>
	                                </div>
	                            </div>
	                        </div>
	                        <!-- ============================================================== -->
	                        <!-- end followers by locations  -->
	                        <!-- ============================================================== -->
	                    </div>
	                    	                    <!-- ============================================================== -->
	                    <!-- Vehicle owned   -->
	                    <!-- ============================================================== -->
	                    <div class="row">
	                        <div class="col-lg-12">
	                            <div class="section-block">
	                                <h3 class="section-title">Vehicles Owned</h3>
	                            </div>
	                        </div>
	                        <?php foreach ($cars as $owned) : ?>
	                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">              	
	                            <div class="card campaign-card text-center">
	                                <div class="card-body">
	                                    <div><img src="uploads/<?php echo $owned['display_image'];?>" alt="user" class="img-fluid"></div>
	                                        <div class="campaign-info">
	                                            <h3 class="mb-1"><?php echo $owned['model']; ?></h3>
	                                            <p class="mb-1">Min, Views:<span class="text-dark font-medium ml-2">2,50,000</span></p>
	                                            <p>Payout: <span class="text-dark font-medium ml-2">$<?php echo $owned['price'];?></span></p>
	                                            <a href="#"><i class="fab fa-twitter-square fa-sm twitter-color"></i> </a><a href="#"><i class="fab fa-snapchat-square fa-sm snapchat-color"></i></a>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>

	                        <?php endforeach ; ?>

	                           
	                        </div>
	                                    <!-- ============================================================== -->
	                                    <!-- end recommended campaigns   -->
	                                    <!-- ============================================================== -->
	                    <div class="row">
	                        <!-- ============================================================== -->
	                        <!-- My Active Listing   -->
	                        <!-- ============================================================== -->
	                        <div class="col-lg-12">
	                            <div class="section-block">
	                                <h3 class="section-title">My Active Listing</h3>
	                            </div>
	                            <div class="card">
	                                <div class="campaign-table table-responsive">
	                                    <table class="table">
	                                        <thead>
	                                            <tr class="border-0">
	                                                <th class="border-0">Vehicle</th>
	                                                <th class="border-0">Campaign Name</th>
	                                                <th class="border-0">Social Platform</th>
	                                                <th class="border-0">Min / Max Views</th>
	                                                <th class="border-0">Status</th>
	                                                <th class="border-0">Start Date</th>
	                                                <th class="border-0">Action</th>
	                                            </tr>
	                                        </thead>
	                                        <tbody>
	                                        	<?php

	                                        		foreach ($mylisting as $list) 
	                                        		{
	                                        	?>
	                                        			<tr>
	                                                <td>
	                                                    <?php echo $list['vehicle_id'];?>
	                                                </td>
	                                                <td>Fashion E Commerce </td>
	                                                <td>
	                                                    <div class="avatar-group">
	                                                        <span><a href="#"><i class="fab fa-fw fa-facebook-square facebook-color"></i></a></span>
	                                                        <span><a href="#"><i class="fab fa-fw fa-twitter-square twitter-color"></i></a></span>
	                                                        <span><a href="#"><i class="fab fa-fw fa-instagram instagram-color"></i></a></span>
	                                                        <span><a href="#"><i class="fab fa-fw fa-pinterest-square pinterest-color"></i></a></span>
	                                                    </div>
	                                                </td>
	                                                <td>1,00,000 / 1,50,000</td>
	                                                <td>70%</td>
	                                                <td>7 Aug,2018</td>
	                                                <td>
	                                                    <div class="dropdown float-right">
	                                                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="true">
	                                                                <i class="mdi mdi-dots-vertical"></i>
	                                                                     </a>
	                                                        <div class="dropdown-menu dropdown-menu-right">
	                                                            <!-- item-->
	                                                            <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
	                                                            <!-- item-->
	                                                            <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
	                                                            <!-- item-->
	                                                            <a href="javascript:void(0);" class="dropdown-item">Profit</a>
	                                                            <!-- item-->
	                                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
	                                                        </div>
	                                                    </div>
	                                                </td>
	                                            </tr>
	                                        	<?php		
	                                        		}
	                                        	?>
	                                
	                                        </tbody>
	                                    </table>
	                                </div>
	                            </div>
	                        </div>
	                        <!-- ============================================================== -->
	                        <!-- end campaign activities   -->
	                        <!-- ============================================================== -->
	                    </div>

	                                    <!-- ============================================================== -->
	                                    <!-- end content  -->
	                                    <!-- ============================================================== -->
	                    </div>

	                </div>


	<?php
		include 'layout/footerback.php';
	?>	                            
</body>
</html>