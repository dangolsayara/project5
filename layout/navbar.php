<body>
    <!--============================= HEADER =============================-->
    <div class="dark-bg sticky-top">
        <div class="container-fluid">
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
    <!--//END HEADER -->