<?php
    include 'config/Call.php';
	include 'layout/header.php';
	include 'layout/navbar.php';

   



	$id=$_GET['id'];
	if(empty($id))
	{
		$id=1;
	}

    $data=$car->findbyid($id);

    if(isset($data['owner_id']))
    {
        $data+=$user->findbyid($data['owner_id']);
    }
    else
    {
        $data+= array('name' => "Owner not defined" );
    }
    
    $availability=$listing->findbyvehicleid($data['id']);

	if(!$data)
	{
		//redirect "not found";
		echo "not found";
	}
?>


    <!--============================= BOOKING =============================-->
    <div>
        <!-- Swiper -->
        <?php 
            $images=$carImage->selectByCarId($id);
            if(!empty($images))
            {
                
                ?>
            
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <?php
                 foreach($images as $img)
                 {
                    ?>
                
                <div class="swiper-slide">
                        <img src="uploads/<?php echo $img['image_name'];?>" height=550px width=550px class="img-fluid" alt="#">
                    
                </div>
                <?php
                    }
                ?>
                <!--6 images -->
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination swiper-pagination-white"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next swiper-button-white"></div>
            <div class="swiper-button-prev swiper-button-white"></div>
        </div>
        <?php
        }
        else
        {
        ?>
        <div class="swiper-container">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <a href="images/reserve-slide2.jpg" class="grid image-link">
                        <img src="uploads/carimage1.jpg" class="img-fluid" alt="#">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="images/reserve-slide1.jpg" class="grid image-link">
                        <img src="images/reserve-slide1.jpg" class="img-fluid" alt="#">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="images/reserve-slide3.jpg" class="grid image-link">
                        <img src="images/reserve-slide3.jpg" class="img-fluid" alt="#">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="images/reserve-slide1.jpg" class="grid image-link">
                        <img src="images/reserve-slide1.jpg" class="img-fluid" alt="#">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="images/reserve-slide2.jpg" class="grid image-link">
                        <img src="images/reserve-slide2.jpg" class="img-fluid" alt="#">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="images/reserve-slide3.jpg" class="grid image-link">
                        <img src="images/reserve-slide3.jpg" class="img-fluid" alt="#">
                    </a>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination swiper-pagination-white"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next swiper-button-white"></div>
            <div class="swiper-button-prev swiper-button-white"></div>
        </div>
        <?php
        }?>
    </div>
    <!--//END BOOKING -->
    <!--============================= RESERVE A SEAT =============================-->
    <section class="reserve-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5><?php echo ucfirst($data['model']);?></h5>
                    <p><span>$$$</span>$$</p>
                    <p class="reserve-description">This car is owned by <?php echo ucfirst($data['name']);?></p>
                </div>
                <div class="col-md-6">
                    <div class="reserve-seat-block">
                        <div class="reserve-rating">
                            <span>$<?php echo $data['price'];?> per day</span>
                        </div>
                        
                        <div class="reserve-btn">
                            <div class="featured-btn-wrap">
                                <?php
                                    if(!$availability) :?>
                                        <a href="javascript:void(0)" class="btn btn-danger">Not Available</a>  
                                
                                    <?php
                                else : ?>
                                    <a href="checkout.php?id=<?php echo $data['id'];?>" class="btn btn-danger">Checkout</a>
                             <?php endif ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//END RESERVE A SEAT -->
    <!--============================= BOOKING DETAILS =============================-->
    <section class="light-bg booking-details_wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-8 responsive-wrap">
                    <div class="booking-checkbox_wrap">
                        <div class="booking-checkbox">
                            <p><?php echo $data['about'];?></p>
                            <hr>
                        </div>
                        
                    </div>
                  
                </div>
                <div class="col-md-4 responsive-wrap">
                    <div class="contact-info">
                        <div class="address">
                            <h6><u>Availability</u></h6>
                            <ul>
                            <?php
                              
                                if(!$availability)
                                {
                                    echo "This Car is not available for now";
                                }
                                else
                                {
                                    foreach ($availability as $date) 
                                    {  
                                    echo "<li>This car is available from '";                           
                                    echo $date['available_from'];
                                    echo "' until '";
                                    echo $date['available_until']."'</li>";
                                    }
                                }
                            ?>  
                            </ul> 
                        </div>
                    </div>
                   
                    <div class="follow">
                        <div class="follow-img">
                            <img src="uploads/<?php echo $data['user_image'];?>" class="img-fluid" alt="#">
                            <h6><?php echo $data['name'];?></h6>
                            <span><?php echo $data['location'];?></span>
                        </div>
                        <ul class="social-counts">
                            <li>
                                <h6>26</h6>
                                <span>Listings</span>
                            </li>
                            <li>
                                <h6>326</h6>
                                <span>Followers</span>
                            </li>
                            <li>
                                <h6>12</h6>
                                <span>Followers</span>
                            </li>
                        </ul>
                        <a href="#">FOLLOW</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//END BOOKING DETAILS -->



    <?php
    	include 'layout/footer.php';

    ?>

       <!-- Magnific popup JS -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- Swipper Slider JS -->
    <script src="js/swiper.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 3,
            slidesPerGroup: 3,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
    <script>
        if ($('.image-link').length) {
            $('.image-link').magnificPopup({
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        }
        if ($('.image-link2').length) {
            $('.image-link2').magnificPopup({
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        }
    </script>
</body>

</html>