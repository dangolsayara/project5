<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
	    <!-- ============================================================== -->
	    <!-- navbar -->
	    <!-- ============================================================== -->
	    <div class="dashboard-header">
	        <nav class="navbar navbar-expand-lg fixed-top" style="background: #252a33;">
	            <a class="navbar-brand" href="index.php" style="color: white;">CARSO</a>
	            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	                <span class="navbar-toggler-icon"></span>
	            </button>
	            <div class="collapse navbar-collapse " id="navbarSupportedContent">
	                <ul class="navbar-nav ml-auto navbar-right-top">   
	                    <li class="nav-item dropdown connection">
	                        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-fw fa-th"></i> </a>
	                        <ul class="dropdown-menu dropdown-menu-right connection-dropdown">
	                            <li class="connection-list">
	                                <div class="row">
	                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
	                                        <a href="#" class="connection-item"><img src="assets/images/github.png" alt="" > <span>Github</span></a>
	                                    </div>
	                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
	                                        <a href="#" class="connection-item"><img src="assets/images/dribbble.png" alt="" > <span>Dribbble</span></a>
	                                    </div>
	                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
	                                        <a href="#" class="connection-item"><img src="assets/images/dropbox.png" alt="" > <span>Dropbox</span></a>
	                                    </div>
	                                </div>
	                                <div class="row">
	                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
	                                        <a href="#" class="connection-item"><img src="assets/images/bitbucket.png" alt=""> <span>Bitbucket</span></a>
	                                    </div>
	                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
	                                        <a href="#" class="connection-item"><img src="assets/images/mail_chimp.png" alt="" ><span>Mail chimp</span></a>
	                                    </div>
	                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
	                                        <a href="#" class="connection-item"><img src="assets/images/slack.png" alt="" > <span>Slack</span></a>
	                                    </div>
	                                </div>
	                            </li>
	                            <li>
	                                <div class="conntection-footer"><a href="#">More</a></div>
	                            </li>
	                        </ul>
	                    </li>
	                    <li class="nav-item dropdown nav-user">
	                        <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="styleback/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
	                        <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
	                            <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>My Profile</a>
	                            <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
	                            <a class="dropdown-item" href="#"><i class="fas fa-power-off mr-2"></i>Logout</a>
	                        </div>
	                    </li>
	                </ul>
	            </div>
	        </nav>
	    </div>
	    <!-- ============================================================== -->
	    <!-- end navbar -->
	    <!-- ============================================================== -->
	    <!-- ============================================================== -->
	    <!-- left sidebar -->
	    <!-- ============================================================== -->
	    <div class="nav-left-sidebar sidebar-dark">
	        <div class="menu-list">
	            <nav class="navbar navbar-expand-lg navbar-light">
	                <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
	                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	                    <span class="navbar-toggler-icon"></span>
	                </button>
	                <div class="collapse navbar-collapse" id="navbarNav">
	                    <ul class="navbar-nav flex-column">
	                        <li class="nav-divider">
	                            Menu
	                        </li>
	                        <li class="nav-item ">
	                            <a class="nav-link active" href="userprofile.php"><i class="fa fa-fw fa-user-circle"></i>Dashboard </a>
	                        </li>
	                        <li class="nav-item">
	                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>UI Elements</a>
	                            <div id="submenu-2" class="collapse submenu" style="">
	                                <ul class="nav flex-column">
	                                    <li class="nav-item">
	                                        <a class="nav-link" href="pages/cards.html">Cards <span class="badge badge-secondary">New</span></a>
	                                    </li>
	                                    <li class="nav-item">
	                                        <a class="nav-link" href="pages/general.html">General</a>
	                                    </li>
	                                    <li class="nav-item">
	                                        <a class="nav-link" href="pages/carousel.html">Carousel</a>
	                                    </li>
	                                    <li class="nav-item">
	                                        <a class="nav-link" href="pages/listgroup.html">List Group</a>
	                                    </li>
	                                    <li class="nav-item">
	                                        <a class="nav-link" href="pages/typography.html">Typography</a>
	                                    </li>
	                                    <li class="nav-item">
	                                        <a class="nav-link" href="pages/accordions.html">Accordions</a>
	                                    </li>
	                                    <li class="nav-item">
	                                        <a class="nav-link" href="pages/tabs.html">Tabs</a>
	                                    </li>
	                                </ul>
	                            </div>
	                        </li>
	                        <li class="nav-item">
	                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-chart-pie"></i>Chart</a>
	                            <div id="submenu-3" class="collapse submenu" style="">
	                                <ul class="nav flex-column">
	                                    <li class="nav-item">
	                                        <a class="nav-link" href="pages/chart-c3.html">C3 Charts</a>
	                                    </li>
	                                    <li class="nav-item">
	                                        <a class="nav-link" href="pages/chart-chartist.html">Chartist Charts</a>
	                                    </li>
	                                    <li class="nav-item">
	                                        <a class="nav-link" href="pages/chart-charts.html">Chart</a>
	                                    </li>
	                                    <li class="nav-item">
	                                        <a class="nav-link" href="pages/chart-morris.html">Morris</a>
	                                    </li>
	                                    <li class="nav-item">
	                                        <a class="nav-link" href="pages/chart-sparkline.html">Sparkline</a>
	                                    </li>
	                                    <li class="nav-item">
	                                        <a class="nav-link" href="pages/chart-gauge.html">Guage</a>
	                                    </li>
	                                </ul>
	                            </div>
	                        </li>
	                        <li class="nav-item ">
	                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>Forms</a>
	                            <div id="submenu-4" class="collapse submenu" style="">
	                                <ul class="nav flex-column">
	                                    <li class="nav-item">
	                                        <a class="nav-link" href="pages/form-elements.html">Form Elements</a>
	                                    </li>
	                                    <li class="nav-item">
	                                        <a class="nav-link" href="pages/form-validation.html">Parsely Validations</a>
	                                    </li>
	                                    <li class="nav-item">
	                                        <a class="nav-link" href="pages/multiselect.html">Multiselect</a>
	                                    </li>
	                                    <li class="nav-item">
	                                        <a class="nav-link" href="pages/datepicker.html">Date Picker</a>
	                                    </li>
	                                    <li class="nav-item">
	                                        <a class="nav-link" href="pages/bootstrap-select.html">Bootstrap Select</a>
	                                    </li>
	                                </ul>
	                            </div>
	                        </li>
	                        <li class="nav-item">
	                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>Tables</a>
	                            <div id="submenu-5" class="collapse submenu" style="">
	                                <ul class="nav flex-column">
	                                    <li class="nav-item">
	                                        <a class="nav-link" href="pages/general-table.html">General Tables</a>
	                                    </li>
	                                    <li class="nav-item">
	                                        <a class="nav-link" href="pages/data-tables.html">Data Tables</a>
	                                    </li>
	                                </ul>
	                            </div>
	                        </li>
	                        <li class="nav-divider">
	                            Features
	                        </li>
	                        <li class="nav-item">
	                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-6"><i class="fas fa-fw fa-file"></i> Pages </a>
	                            <div id="submenu-6" class="collapse submenu" style="">
	                                <ul class="nav flex-column">
	                                    <li class="nav-item">
	                                        <a class="nav-link" href="pages/blank-page.html">Blank Page</a>
	                                    </li>
	                                    <li class="nav-item">
	                                        <a class="nav-link" href="pages/blank-page-header.html">Blank Page Header</a>
	                                    </li>
	                                    <li class="nav-item">
	                                        <a class="nav-link" href="pages/login.html">Login</a>
	                                    </li>
	                                    <li class="nav-item">
	                                        <a class="nav-link" href="pages/404-page.html">404 page</a>
	                                    </li>
	                                    <li class="nav-item">
	                                        <a class="nav-link" href="pages/sign-up.html">Sign up Page</a>
	                                    </li>
	                                    <li class="nav-item">
	                                        <a class="nav-link" href="pages/forgot-password.html">Forgot Password</a>
	                                    </li>
	                                    <li class="nav-item">
	                                        <a class="nav-link" href="pages/pricing.html">Pricing Tables</a>
	                                    </li>
	                                    <li class="nav-item">
	                                        <a class="nav-link" href="pages/timeline.html">Timeline</a>
	                                    </li>
	                                    <li class="nav-item">
	                                        <a class="nav-link" href="pages/calendar.html">Calendar</a>
	                                    </li>
	                                    <li class="nav-item">
	                                        <a class="nav-link" href="pages/sortable-nestable-lists.html">Sortable/Nestable List</a>
	                                    </li>
	                                    <li class="nav-item">
	                                        <a class="nav-link" href="pages/widgets.html">Widgets</a>
	                                    </li>
	                                    <li class="nav-item">
	                                        <a class="nav-link" href="pages/media-object.html">Media Objects</a>
	                                    </li>
	                                    <li class="nav-item">
	                                        <a class="nav-link" href="pages/cropper-image.html">Cropper</a>
	                                    </li>
	                                    <li class="nav-item">
	                                        <a class="nav-link" href="pages/color-picker.html">Color Picker</a>
	                                    </li>
	                                </ul>
	                            </div>
	                        </li>
	                        <li class="nav-item">
	                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-7" aria-controls="submenu-7"><i class="fas fa-fw fa-inbox"></i>Apps <span class="badge badge-secondary">New</span></a>
	                            <div id="submenu-7" class="collapse submenu" style="">
	                                <ul class="nav flex-column">
	                                    <li class="nav-item">
	                                        <a class="nav-link" href="pages/inbox.html">Inbox</a>
	                                    </li>
	                                    <li class="nav-item">
	                                        <a class="nav-link" href="pages/email-details.html">Email Detail</a>
	                                    </li>
	                                    <li class="nav-item">
	                                        <a class="nav-link" href="pages/email-compose.html">Email Compose</a>
	                                    </li>
	                                    <li class="nav-item">
	                                        <a class="nav-link" href="pages/message-chat.html">Message Chat</a>
	                                    </li>
	                                </ul>
	                            </div>
	                        </li>
	                        <li class="nav-item">
	                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-8" aria-controls="submenu-8"><i class="fas fa-fw fa-columns"></i>Icons</a>
	                            <div id="submenu-8" class="collapse submenu" style="">
	                                <ul class="nav flex-column">
	                                    <li class="nav-item">
	                                        <a class="nav-link" href="pages/icon-fontawesome.html">FontAwesome Icons</a>
	                                    </li>
	                                    <li class="nav-item">
	                                        <a class="nav-link" href="pages/icon-material.html">Material Icons</a>
	                                    </li>
	                                    <li class="nav-item">
	                                        <a class="nav-link" href="pages/icon-simple-lineicon.html">Simpleline Icon</a>
	                                    </li>
	                                    <li class="nav-item">
	                                        <a class="nav-link" href="pages/icon-themify.html">Themify Icon</a>
	                                    </li>
	                                    <li class="nav-item">
	                                        <a class="nav-link" href="pages/icon-flag.html">Flag Icons</a>
	                                    </li>
	                                    <li class="nav-item">
	                                        <a class="nav-link" href="pages/icon-weather.html">Weather Icon</a>
	                                    </li>
	                                </ul>
	                            </div>
	                        </li>
	                        <li class="nav-item">
	                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-9" aria-controls="submenu-9"><i class="fas fa-fw fa-map-marker-alt"></i>Maps</a>
	                            <div id="submenu-9" class="collapse submenu" style="">
	                                <ul class="nav flex-column">
	                                    <li class="nav-item">
	                                        <a class="nav-link" href="pages/map-google.html">Google Maps</a>
	                                    </li>
	                                    <li class="nav-item">
	                                        <a class="nav-link" href="pages/map-vector.html">Vector Maps</a>
	                                    </li>
	                                </ul>
	                            </div>
	                        </li>
	                        <li class="nav-item">
	                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-10" aria-controls="submenu-10"><i class="fas fa-f fa-folder"></i>Menu Level</a>
	                            <div id="submenu-10" class="collapse submenu" style="">
	                                <ul class="nav flex-column">
	                                    <li class="nav-item">
	                                        <a class="nav-link" href="#">Level 1</a>
	                                    </li>
	                                    <li class="nav-item">
	                                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-11" aria-controls="submenu-11">Level 2</a>
	                                        <div id="submenu-11" class="collapse submenu" style="">
	                                            <ul class="nav flex-column">
	                                                <li class="nav-item">
	                                                    <a class="nav-link" href="#">Level 1</a>
	                                                </li>
	                                                <li class="nav-item">
	                                                    <a class="nav-link" href="#">Level 2</a>
	                                                </li>
	                                            </ul>
	                                        </div>
	                                    </li>
	                                    <li class="nav-item">
	                                        <a class="nav-link" href="#">Level 3</a>
	                                    </li>
	                                </ul>
	                            </div>
	                        </li>
	                    </ul>
	                </div>
	            </nav>
	        </div>
	    </div>
	    <!-- ============================================================== -->
	    <!-- end left sidebar -->
	    <!-- ============================================================== -->