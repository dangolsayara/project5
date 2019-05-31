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
	                                            <img src="uploads/<?php echo $data['user_image'];?>" alt="User Avatar" class="rounded-circle user-avatar-xxl">
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
	                                                        <span class="d-xl-inline-block d-block mb-2"><i class="fa fa-map-marker-alt mr-2 text-primary "></i><?php echo $data['location']; ?></span>
	                                                        <span class="mb-2 ml-xl-4 d-xl-inline-block d-block">Joined date: 23 June, 2018  </span>
	                                                        <span class=" mb-2 d-xl-inline-block d-block ml-xl-4">Male 
	                                                                </span>
	                                                        <span class=" mb-2 d-xl-inline-block d-block ml-xl-4">29 Year Old </span>
	                                                    </p>
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
	                    <!-- Vehicle owned   -->
	                    <!-- ============================================================== -->
	                    <div class="row">
	                    	<a id="VehicleOwned"></a>
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
	                                            <p class="mb-1">Milege:<span class="text-dark font-medium ml-2"><?php echo $owned['milege'];?> km/l</span></p>
	                                            <p>Payout: <span class="text-dark font-medium ml-2">$<?php echo $owned['price'];?></span></p>
	                                            <a href="editcar.php?vehicle_id=<?php echo $owned['id'];?>">Edit </a>|<a href="cardelete.php?vehicle_id=<?php echo $owned['id'];?>">Delete</a>|
	                                            <a href="carlisting.php?vehicle_id=<?php echo $owned['id'];?>">Listing</a>
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
	                                                <th class="border-0">Available_from</th>
	                                                <th class="border-0">Available_until</th>
	                                                
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
	                                                <td> <?php echo $list['available_from'];?></td>
	                                             
	                                                <td><?php echo $list['available_until'];?></td>
	                                       
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