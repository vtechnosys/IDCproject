<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard | Vertex Technosys</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon============================================ -->
    <link rel="icon" type="image/icon" href="{{asset('admin/favicon.icon')}}">
    <!-- Google Fonts============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS============================================ -->
    <link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}">
    <!-- Bootstrap CSS============================================ -->
    <link rel="stylesheet" href="{{asset('admin/css/font-awesome.min.css')}}">
    <!-- adminpro icon CSS============================================ -->
    <link rel="stylesheet" href="{{asset('admin/css/adminpro-custon-icon.css')}}">
    <!-- meanmenu icon CSS============================================ -->
    <link rel="stylesheet" href="{{asset('admin/css/meanmenu.min.css')}}">
    <!-- mCustomScrollbar CSS============================================ -->
    <link rel="stylesheet" href="{{asset('admin/css/jquery.mCustomScrollbar.min.css')}}">
    <!-- animate CSS============================================ -->
    <link rel="stylesheet" href="{{asset('admin/css/animate.css')}}">
    <!-- jvectormap CSS============================================ -->
    <link rel="stylesheet" href="{{asset('admin/css/jvectormap/jquery-jvectormap-2.0.3.css')}}">
    <!-- normalize CSS============================================ -->
    <link rel="stylesheet" href="{{asset('admin/css/data-table/bootstrap-table.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/data-table/bootstrap-editable.css')}}">
    <!-- normalize CSS============================================ -->
    <link rel="stylesheet" href="{{asset('admin/css/normalize.css')}}">
    <!-- charts CSS	============================================ -->
    <link rel="stylesheet" href="{{asset('admin/css/c3.min.css')}}">
    <!-- style CSS============================================ -->
    <link rel="stylesheet" href="{{asset('admin/style.css')}}">
    <!-- responsive CSS	============================================ -->
    <link rel="stylesheet" href="{{asset('admin/css/responsive.css')}}">
    <!-- modernizr JS============================================ -->
    <script src="{{asset('admin/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body class="materialdesign">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Header top area start-->
    <div class="wrapper-pro">
        <div class="left-sidebar-pro">
            <nav id="sidebar">
                <div class="sidebar-header">
                    <a href="#"><img src="{{asset('admin/img/logo/vicon.png')}}" alt=""/></a>
                    <h3>Vertex Technosys</h3>
                    <p>Dashboard</p>
                </div>
                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">

                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-info-circle"></i> <span class="mini-dn">About Us</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="/admin/about/create" class="dropdown-item"><i class="fa big-icon fa-plus-circle"></i> Add Aboutus</a>
                                <a href="/admin/about" class="dropdown-item"><i class="fa big-icon fa-folder"></i> View Aboutus</a>
                            </div>
                        </li>

                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-cog"></i> <span class="mini-dn">Services</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="/admin/services/create" class="dropdown-item"><i class="fa big-icon fa-plus-circle"></i> Add Service</a>
                                <a href="/admin/services" class="dropdown-item"><i class="fa big-icon fa-folder"></i> View Services</a>
                            </div>
                        </li>

                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-cogs"></i> <span class="mini-dn">Service Category</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="/admin/category/create" class="dropdown-item"><i class="fa big-icon fa-plus-circle"></i> Add Service Category</a>
                                <a href="/admin/category" class="dropdown-item"><i class="fa big-icon fa-folder"></i> View Service Category</a>
                            </div>
                        </li>

                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-users"></i> <span class="mini-dn">Portfolios</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="/admin/portfolios/create" class="dropdown-item"><i class="fa big-icon fa-plus-circle"></i> Add Portfolio</a>
                                <a href="/admin/portfolios" class="dropdown-item"><i class="fa big-icon fa-folder"></i> View Portfolios</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-user"></i> <span class="mini-dn">Testimonials</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="/admin/testimonials/create" class="dropdown-item"><i class="fa big-icon fa-plus-circle"></i> Add Testimonial</a>
                                <a href="/admin/testimonials" class="dropdown-item"><i class="fa big-icon fa-folder"></i> View Testimonials</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-user"></i> <span class="mini-dn">Expert Team</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="/admin/expert_team/create" class="dropdown-item"><i class="fa big-icon fa-plus-circle"></i> Add Expert Team</a>
                                <a href="/admin/expert_team" class="dropdown-item"><i class="fa big-icon fa-folder"></i> View Expert Team</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-files-o"></i> <span class="mini-dn">Careers</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <!--a href="/admin/careers/create" class="dropdown-item"><i class="fa big-icon fa-plus-circle"></i> Add Career</a-->
                                <a href="/admin/careers" class="dropdown-item"><i class="fa big-icon fa-folder"></i> View Career</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-files-o"></i> <span class="mini-dn">Contact</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <!--a href="/admin/careers/create" class="dropdown-item"><i class="fa big-icon fa-plus-circle"></i> Add Career</a-->
                                <a href="/admin/contact" class="dropdown-item"><i class="fa big-icon fa-folder"></i> View Contact</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-files-o"></i> <span class="mini-dn">Implant Traning Details</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <!--a href="/admin/careers/create" class="dropdown-item"><i class="fa big-icon fa-plus-circle"></i> Add Career</a-->
                                <a href="/admin/implant_traning_details" class="dropdown-item"><i class="fa big-icon fa-folder"></i> View Students Details</a>
								<a href="/admin/collage" class="dropdown-item"><i class="fa big-icon fa-plus-circle"></i>View Collages</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <!-- Header top area start-->
        <div class="content-inner-all">
            <div class="header-top-area">
                <div class="fixed-header-top">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-1 col-md-6 col-sm-6 col-xs-12">
                                <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <div class="admin-logo logo-wrap-pro">
                                    <a href="#"><img src="{{asset('img/logo/log.png')}}" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-1 col-sm-1 col-xs-12">
                                <div class="header-top-menu tabl-d-n">
                                   <!--NAVIGATION LINKS HERE ARE REMOVED-->
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                                <div class="header-right-info">
                                    <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                        <li class="nav-item">
                                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                <span class="adminpro-icon adminpro-user-rounded header-riht-inf"></span>
                                                <span class="admin-name">Vertex Admin</span>
                                                <span class="author-project-icon adminpro-icon adminpro-down-arrow"></span>
                                            </a>
                                        <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated flipInX">
                                            <li><a href="/logout"><span class="adminpro-icon adminpro-locked author-log-ic"></span>Log Out</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header top area end-->

            
        @yield('content')


    <!-- Footer Start-->
    <div class="footer-copyright-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copy-right">
                        <p>Copyright &#169; 2020 <a href="https://www.vertextechnosys.com/">Vertex Technosys</a> All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->

    <!-- jquery============================================ -->
    <script src="{{asset('admin/js/vendor/jquery-1.11.3.min.js')}}"></script>
    <!-- bootstrap JS============================================ -->
    <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
    <!-- meanmenu JS============================================ -->
    <script src="{{asset('admin/js/jquery.meanmenu.js')}}"></script>
    <!-- mCustomScrollbar JS============================================ -->
    <script src="{{asset('admin/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <!-- sticky JS============================================ -->
    <script src="{{asset('admin/js/jquery.sticky.js')}}"></script>
    <!-- scrollUp JS============================================ -->
    <script src="{{asset('admin/js/jquery.scrollUp.min.js')}}"></script>
    <!-- scrollUp JS============================================ -->
    <script src="{{asset('admin/js/wow/wow.min.js')}}"></script>
    <!-- counterup JS============================================ -->
    <script src="{{asset('admin/js/counterup/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('admin/js/counterup/waypoints.min.js')}}"></script>
    <script src="{{asset('admin/js/counterup/counterup-active.js')}}"></script>
    <!-- jvectormap JS============================================ -->
    <script src="{{asset('admin/js/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{asset('admin/js/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('admin/js/jvectormap/jvectormap-active.js')}}"></script>
    <!-- peity JS============================================ -->
    <script src="{{asset('admin/js/peity/jquery.peity.min.js')}}"></script>
    <script src="{{asset('admin/js/peity/peity-active.js')}}"></script>
    <!-- sparkline JS============================================ -->
    <script src="{{asset('admin/js/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('admin/js/sparkline/sparkline-active.js')}}"></script>
    <!-- flot JS============================================ -->
    <script src="{{asset('admin/js/flot/Chart.min.js')}}"></script>
    <script src="{{asset('admin/js/flot/dashtwo-flot-active.js')}}"></script>
    <!-- data table JS============================================ -->
    <script src="{{asset('admin/js/data-table/bootstrap-table.js')}}"></script>
    <script src="{{asset('admin/js/data-table/tableExport.js')}}"></script>
    <script src="{{asset('admin/js/data-table/data-table-active.js')}}"></script>
    <script src="{{asset('admin/js/data-table/bootstrap-table-editable.js')}}"></script>
    <script src="{{asset('admin/js/data-table/bootstrap-editable.js')}}"></script>
    <script src="{{asset('admin/js/data-table/bootstrap-table-resizable.js')}}"></script>
    <script src="{{asset('admin/js/data-table/colResizable-1.5.source.js')}}"></script>
    <script src="{{asset('admin/js/data-table/bootstrap-table-export.js')}}"></script>
    <!-- main JS============================================ -->
    <script src="{{asset('admin/js/main.js')}}"></script>
</body>
</html>
