<?php
	include 'config/Call.php';
	include 'layout/header.php';
	include 'layout/navbar.php';


	if (isset($_GET['country'])) 
	{
		$place=$_GET['country'];
	}
	else
	{
		$place="nepal";
	}
	if (isset($_GET['from'])) 
	{
		$from=$_GET['from'];
	}
	else
	{
		$from='2019/05/03';
	}
	if (!isset($_GET['until']))
	{
		$until=$_GET['until'];
	}
	else
	{
		$until='2019/06/03';
	}

	$result=$car->search('Bhaktapur',$from,$until);
	//$result=$car->findbyid('1');
	if ($result==false)
	 {

		echo "No data found";
	}
	
?>

   <!--============================= DETAIL =============================-->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7 responsive-wrap">
                    <div class="row detail-filter-wrap">
                        <div class="col-md-4 featured-responsive">
                            <div class="detail-filter-text">
                                <p><?php echo count($result)." "; ?>Results For <span><?php echo $place; ?></span></p>
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
                            foreach ($result as $car) : 
                        ?>
                        <div class="col-sm-6 col-lg-12 col-xl-6 featured-responsive">
                            <div class="featured-place-wrap">
                                <a href="carprofile.php?id=<?php echo $car['id'];?>">
                                    <img src="uploads/<?php echo $car['display_image'];?>" class="img-fluid" alt="#">
                                    <span class="featured-rating-green"><?php echo $car['price']; ?></span>
                                    <div class="featured-title-box">
                                        <h6>Joe’s Shanghai <?php echo $car['model']; ?></h6>
                                        <p><?php echo $car['brand']; ?> </p> <span>• </span>
                                        <p>3 Reviews</p> <span> • </span>
                                        <p><span>$$$</span>$$</p>
                                        <ul>
                                            <li><span class="icon-location-pin"></span>
                                                <p>1301 <?php echo $car['location']; ?>, NY 11230</p>
                                            </li>
                                            <li><span class="icon-screen-smartphone"></span>
                                                <p>+44 20 7336 8898</p>
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
                        <?php endforeach; ?>

                    </div>
                </div>
                <div class="col-md-5 responsive-wrap map-wrap">
                    <div class="map-fix">
                        <!-- data-toggle="affix" -->
                        <!-- Google map will appear here! Edit the Latitude, Longitude and Zoom Level below using data-attr-*  -->
                        <div id="map" data-lat="40.674" data-lon="-73.945" data-zoom="14"></div>
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
    <script src="https://maps.googleapis.com/maps/api/js?callback=myMap&key=AIzaSyDMTUkJAmi1ahsx9uCGSgmcSmqDTBF9ygg"></script>
</body>

</html>