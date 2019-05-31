<?php
	include 'config/Call.php';
	include 'layout/header.php';
	include 'layout/navbar.php';


	if (isset($_GET['place'])) 
	{
		$place=$_GET['place'];
	}
	else
	{
		$place="nepal";
	}

	$result=$car->search($place);
	//$result=$car->findbyid('1');

	
?>

   <!--============================= DETAIL =============================-->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7 responsive-wrap">
                    <div class="row detail-filter-wrap">
                        <div class="col-md-4 featured-responsive">
                            <div class="detail-filter-text">
                                <p><?php
                                if ($result==false)
                                    echo "0";
                                else
                                    echo count($result)." "; 
                                ?>
                                Results For <span><?php echo ucfirst($place); ?></span></p>
                            </div>
                        </div>
                        <div class="col-md-8 featured-responsive">
                            <div class="detail-filter">
                              
                                <div class="map-responsive-wrap">
                                    <a class="map-icon" href="#"><span class="icon-location-pin"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row light-bg detail-options-wrap">

                        
                        <?php

                            if($result!=false)
                            {
                            foreach ($result as $car) : 
                        ?>
                        <div class="col-sm-6 col-lg-12 col-xl-6 featured-responsive">
                            <div class="featured-place-wrap">
                                <a href="carprofile.php?id=<?php echo $car['id'];?>">
                                    <img src="uploads/<?php echo $car['display_image'];?>" class="img-fluid" alt="#">
                                    <span class="featured-rating-green"><?php echo $car['price']; ?></span>
                                    <div class="featured-title-box">
                                        <h6><?php echo ucfirst($car['name'])."'s "; echo ucfirst($car['model']); ?></h6>
                                        <p><?php echo ucfirst($car['brand']); ?> </p> <span>• </span>
                                        <p><?php echo $car['milege']; ?> km/l</p> <span> • </span>
                                        <p><span>$$$</span>$$</p>
                                        <ul>
                                            <li><span class="icon-location-pin"></span>
                                                <p> <?php echo ucfirst($car['location']); ?></p>
                                            </li>
                                            <li><span class="icon-screen-smartphone"></span>
                                                <p><?php echo $car['mobile'];?></p>
                                            </li>
                                        </ul>
                                        <div class="bottom-icons">
                                            <div class="open-now">BOOK NOW</div>
                                            <span class="ti-heart"></span>
                                            <span class="ti-bookmark"></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <?php endforeach; 
                            }
                            else
                                {
                            ?>
                               <div class="col-sm-6 col-lg-12 col-xl-6 featured-responsive" style="height: 354px">
                                   <h4> No Result Found</h4>
                               </div>   
                                  <?php  
                                }?>

                    </div>
                </div>
                <div class="col-md-5 responsive-wrap map-wrap">
                    <div class="map-fix">
                        <!-- data-toggle="affix" -->
                        <!-- Google map will appear here! Edit the Latitude, Longitude and Zoom Level below using data-attr-*  -->
                        <div id="map" data-lat="27.71" data-lon="85.32" data-zoom="14"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//END DETAIL -->

    <?php
    include 'layout/footer.php';
    ?>

    <script>
        $(".map-icon").click(function() {
            $(".map-fix").toggle();
        });
    </script>
    <script>
        // Want to customize colors? go to snazzymaps.com
        function myMap() {
            var maplat = $('#map').data('lat');
            var maplon = $('#map').data('lon');
            var mapzoom = $('#map').data('zoom');
            // Styles a map in night mode.
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {
                    lat: maplat,
                    lng: maplon
                },
                zoom: mapzoom,
                scrollwheel: false
            });
            var marker = new google.maps.Marker({
                position: {
                    lat: maplat,
                    lng: maplon
                },
                map: map,
                title: 'We are here!'
            });
        }
    </script>
    <!-- Map JS (Please change the API key below. Read documentation for more info) -->
    <script src="https://maps.googleapis.com/maps/api/js?callback=myMap&key=AIzaSyDqPAMbX638ypBmapcWjayIFlmAIOpslMs"></script>
</body>

</html>