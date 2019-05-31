<?php
include 'config/Call.php';
include 'layout/header.php';
?>
<body>
    <!--============================= HEADER =============================-->
    <div class="nav-menu">
        <div class="bg transition">
            <div class="container-fluid fixed">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="index.php">CARSO</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-menu"></span>
              </button>
                            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                                <ul class="navbar-nav">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="userprofile.php#VehicleOwned">List your car</a>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="nav-link" href="userregister.php">learn more</a>
                                    </li>
                                    <?php 
                                        if(!$session->isloggedin()) : ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="login.php">Login</a>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="nav-link" href="userregister.php">Register</a>
                                    </li>
                                    
                                    <?php
                                        else:
                                    ?>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <?php echo $session->getkey('email'); ?>
                                        <span class="icon-arrow-down"></span>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <a class="dropdown-item" href="userprofile.php">My profile</a>
                                            <a class="dropdown-item" href="usersetting.php">Setting</a>
                                            <a class="dropdown-item" href="userresetpassword.php">Reset Password</a>
                                            <a class="dropdown-item" href="logout.php">Logout</a>
                                        </div>
                                    </li>

                                    <?php
                                        endif ;
                                    ?>    


                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <!-- SLIDER -->
    <section class="slider d-flex align-items-center">
        <!-- <img src="images/slider.jpg" class="img-fluid" alt="#"> -->
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12">
                    <div class="slider-title_box">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slider-content_wrap">
                                    <h1>Discover great cars for rent</h1>
                                    <h5>Let's uncover the best car anywhere, anytime favourite to you.</h5>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-10">
                                <form class="form-wrap mt-4" method="GET" action="search.php">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <input type="text" placeholder="Nepal" class="btn-group" name="place">
                                        <button type="submit" class="btn-form" value="Submit"><span class="icon-magnifier search-icon"></span>SEARCH<i class="pe-7s-angle-right"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--// SLIDER -->
    <!--//END HEADER -->
    <!--============================= FIND PLACES =============================-->
    <section class="main-block">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="styled-heading">
                        <h3>Top Destination</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="find-place-img_wrap">
                        <div class="grid">
                            <figure class="effect-ruby">
                                <img src="style/images/find-place1.jpg" class="img-fluid" alt="img13" />
                                <figcaption>
                                    <h5>Nightlife </h5>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row find-img-align">
                        <div class="col-md-12">
                            <div class="find-place-img_wrap">
                                <div class="grid">
                                    <figure class="effect-ruby">
                                        <img src="style/images/find-place2.jpg" class="img-fluid" alt="img13" />
                                        <figcaption>
                                            <h5>Restaurants</h5>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="find-place-img_wrap">
                                <div class="grid">
                                    <figure class="effect-ruby">
                                        <img src="style/images/find-place3.jpg" class="img-fluid" alt="img13" />
                                        <figcaption>
                                            <h5>Outdoors </h5>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row find-img-align">
                        <div class="col-md-12">
                            <div class="find-place-img_wrap">
                                <div class="grid">
                                    <figure class="effect-ruby">
                                        <img src="style/images/find-place4.jpg" class="img-fluid" alt="img13" />
                                        <figcaption>
                                            <h5>Hotels </h5>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="find-place-img_wrap">
                                <div class="grid">
                                    <figure class="effect-ruby">
                                        <img src="style/images/find-place5.jpg" class="img-fluid" alt="img13" />
                                        <figcaption>
                                            <h5>Art & Culture </h5>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//END FIND PLACES -->
    <!--============================= FEATURED PLACES =============================-->
    <section class="main-block light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="styled-heading">
                        <h3>Featured Car</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 featured-responsive">
                            <div class="featured-place-wrap">
                                <a href="carprofile.php?id=1">
                                    <img src="uploads/carimage1.jpg" class="img-fluid" alt="#">
                                    <span class="featured-rating-green">100</span>
                                    <div class="featured-title-box">
                                        <h6>Bilson's Veriyon</h6>
                                        <p>Buggati </p> <span>• </span>
                                        <p>45 km/l</p> <span> • </span>
                                        <p><span>$$$</span>$$</p>
                                        <ul>
                                            <li><span class="icon-location-pin"></span>
                                                <p> Bhaktapur,Nepal</p>
                                            </li>
                                            <li><span class="icon-screen-smartphone"></span>
                                                <p>98412222</p>
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
                <div class="col-md-4 featured-responsive">
                   <div class="featured-place-wrap">
                                <a href="carprofile.php?id=3">
                                    <img src="uploads/image 3.jpeg" class="img-fluid" alt="#">
                                    <span class="featured-rating-green">200</span>
                                    <div class="featured-title-box">
                                        <h6>Bilson's Mustang</h6>
                                        <p>Ferari </p> <span>• </span>
                                        <p>50 km/l</p> <span> • </span>
                                        <p><span>$$$</span>$$</p>
                                        <ul>
                                            <li><span class="icon-location-pin"></span>
                                                <p> Kathmandu,Nepal</p>
                                            </li>
                                            <li><span class="icon-screen-smartphone"></span>
                                                <p>98412222</p>
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
                <div class="col-md-4 featured-responsive">
                    <div class="featured-place-wrap">
                                <a href="carprofile.php?id=2">
                                    <img src="uploads/carimage2.jpg" class="img-fluid" alt="#">
                                    <span class="featured-rating-green">400</span>
                                    <div class="featured-title-box">
                                        <h6>Bilson's Ferrari</h6>
                                        <p>Lamborgini </p> <span>• </span>
                                        <p>150 km/l</p> <span> • </span>
                                        <p><span>$$$</span>$$</p>
                                        <ul>
                                            <li><span class="icon-location-pin"></span>
                                                <p> Bhaktapur,Nepal</p>
                                            </li>
                                            <li><span class="icon-screen-smartphone"></span>
                                                <p>98412222</p>
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
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="featured-btn-wrap">
                        <a href="search.php" class="btn btn-danger">VIEW ALL</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//END FEATURED PLACES -->
    <!--============================= CATEGORIES =============================-->
    <!--//END CATEGORIES -->
    <!--============================= ADD LISTING =============================-->
    <section class="main-block light-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="add-listing-wrap">
                        <h2>Reach millions of People</h2>
                        <p>Add your Car infront of millions and earn profits from our listing</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="featured-btn-wrap">
                        <a href="carlisting.php" class="btn btn-danger"><span class="ti-plus"></span> ADD LISTING</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//END ADD LISTING -->

<?php
include 'layout/footer.php'; 

?>

    <script>
        $(window).scroll(function() {
            // 100 = The point you would like to fade the nav in.

            if ($(window).scrollTop() > 100) {

                $('.fixed').addClass('is-sticky');

            } else {

                $('.fixed').removeClass('is-sticky');

            };
        });
    </script>
</body>

</html>