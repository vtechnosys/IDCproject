
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://www.jsdelivr.com/package/npm/themify-icons.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    
    <link rel="stylesheet" href="@icon/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://unpkg.com/@icon/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="@icon/themify-icons/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/metisMenu.css')}}">
   
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
</head>

<body>
    <div class="wrapper">
        <div class="overlay"></div>
        <!-- sidebar -->

        <nav class="sidebar dark_sidebar">
            <div class="logo d-flex justify-content-between">
                <a class="large_logo" href="/admin/index">Vertex Technosys</a>
                <!-- <div class="sidebar_close_icon d-lg-none">
                    <i class="ti-close"></i>
                </div> -->
            </div>
            <ul id="sidebar_menu" class="metismenu">
                <li class="">
                    <a href="/admin/index" aria-expanded="false" class="active">
                        <div class="nav_icon_small">
                            <i class="fas fa-home menu-icon"></i>
                        </div>
                        <div class="nav_title">
                            <span>Dashboard </span>
                        </div>
                    </a>
                </li>
                
                <li class="">
                    <a class="has-arrow" href="/admin/industries/create" aria-expanded="false">
                        <div class="nav_icon_small">
                            <i class="fad fa-bring-forward menu-icon"></i>
                        </div>
                        <div class="nav_title">
                            <span>Industries</span>
                        </div>
                    </a>
                    <!-- <ul class="mm-collapse">
                        <li><a href="/admin/industries/create">Add New</a></li>
                        <!-- <li><a href="/admin/industries">View All</a></li> 
                        
                    </ul> -->
                </li>
                <li class="">
                    <a class="has-arrow" href="/admin/service/create" aria-expanded="false">
                        <div class="nav_icon_small">
                            <i class="fad fa-bring-forward menu-icon"></i>
                        </div>
                        <div class="nav_title">
                            <span>Services</span>
                        </div>
                    </a>
                    <!-- <ul class="mm-collapse">
                        <li><a href="/admin/service/create">Add New</a></li>
                        <li><a href="/admin/service">View All</a></li>
                        
                    </ul> -->
                </li>
                <!-- <li class="">
                    <a class="has-arrow" href="/admin/job-seeker" aria-expanded="false">
                        <div class="nav_icon_small">
                            <i class="far fa-border-none menu-icon"></i>
                        </div>
                        <div class="nav_title">
                            <span>Job Seekers</span>
                        </div>
                    </a>
                </li>
                <li class="">
                    <a class="has-arrow" href="#" aria-expanded="false">
                        <div class="nav_icon_small">
                            <i class="fas fa-font menu-icon"></i>
                        </div>
                        <div class="nav_title">
                            <span>Employer speek expert</span>
                        </div>
                    </a>
                    <ul class="mm-collapse">
                        <li><a href="ficon.html">Fontawesome Icon</a></li>
                        <li><a href="ticon.html">themefy icon</a></li>
                    </ul>
                </li>
                <li class="">
                    <a href="chart.html" aria-expanded="false">
                        <div class="nav_icon_small">
                            <i class="fal fa-chart-pie-alt"></i>
                        </div>
                        <div class="nav_title">
                            <span>Charts</span>
                        </div>
                    </a>
                </li>
                <li class="">
                    <a href="map.html" aria-expanded="false">
                        <div class="nav_icon_small">
                            <i class="fal fa-globe-europe"></i>
                        </div>
                        <div class="nav_title">
                            <span>Maps</span>
                        </div>
                    </a>
                </li>
                <li class="">
                    <a href="blank.html" aria-expanded="false">
                        <div class="nav_icon_small">
                            <i class="fas fa-file menu-icon"></i>
                        </div>
                        <div class="nav_title">
                            <span>Blank</span>
                        </div>
                    </a>
                </li>
                <li class="">
                    <a href="error.html" aria-expanded="false">
                        <div class="nav_icon_small">
                            <i class="far fa-exclamation-triangle 2x menu-icon"></i>
                        </div>
                        <div class="nav_title">
                            <span>Error</span>
                        </div>
                    </a>
                </li> -->
            </ul>
        </nav>
        
        
<!-- Page-content -->
<div id="page-content-wrapper">
    <div id="content">
        <div class="container-fluid p-0 px-lg-0 px-md-0">
            <div class="main-content pt-0">
                <nav class="navbar navbar-expand navbar-light my-navbar">
                    <div type="button" id="bar" class="nav-icon1 humburger animated fadeInLeft  sidebar_icon" data-toggle="offcanvas">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>

                    <!-- Top bar Search -->
                    <form class="d-none d-sm-inline-block form-inline navbar-search px-3">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control bg-light" placeholder="Search for..">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button"><i class="far fa-search fa-sm"></i></button>
                            </div>
                        </div>
                    </form>

                    <!-- Top Bar nav -->
                    <div class="header_right d-flex justify-content-end align-items-center">
                        <div class="header_notification_warp d-flex align-items-center">
                            <li>
                                <a class="CHATBOX_open nav-link-notify" href="#"> <i class="far fa-envelope"></i> </a>
                            </li>
                            <li>
                                <a class="bell_notification_clicker nav-link-notify" href="#"> <i class="far fa-bell fa-fw"></i>
                                    <!-- <span>2</span> -->
                                </a>
                            </li>

                        </div>
                        <div class="profile_info d-flex align-items-center">
                            <div class="profile_thumb mr_20">
                                <img src="{{asset('admin/images/1.png')}}" alt="#">
                            </div>
                            <div class="author_name">
                                <h4 class="f_s_15 f_w_500 mb-0">Jiue Anderson</h4>
                                <p class="f_s_12 f_w_400">Manager</p>
                            </div>
                            <div class="profile_info_iner">
                                <div class="profile_author_name">
                                    <p>Manager</p>
                                    <h5>Jiue Anderson</h5>
                                </div>
                                <div class="profile_info_details">
                                    <a href="#">My Profile </a>
                                    <a href="#">Settings</a>
                                    <a href="#">Log Out </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Top Bar nav -->
                    <!-- Top bar Search -->
                </nav>
            </div>

        <!-- sidebar wrapper -->
		
		 @yield('index-content')
		
         <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="{{asset('admin/js/metisMenu.js')}}"></script>
    <script src="{{asset('admin/js/counter.js')}}"></script>
    <script src="{{asset('admin/js/popup.js')}}"></script>
    <script src="{{asset('admin/js/chart.js')}}"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>
<script src="javascript/common.js" type="text/javascript"></script>
    <script>
        $('.sidebar_icon').on('click', function() {
            $('.sidebar ,#page-content-wrapper').toggleClass('active_sidebar');
        });
        $('.sidebar_close_icon').on('click', function() {
            $('.sidebar ,#page-content-wrapper').removeClass('active_sidebar');
        });
    </script>
    <script>
        $(document).on("click.nice_select", ".nice-select", function(event) {
            var $dropdown = $(this);

            $(".nice-select")
                .not($dropdown)
                .removeClass("open");
            $dropdown.toggleClass("open");

            if ($dropdown.hasClass("open")) {
                $dropdown.find(".option");
                $dropdown.find(".nice-select-search").val("");
                $dropdown.find(".nice-select-search").focus();
                $dropdown.find(".focus").removeClass("focus");
                $dropdown.find(".selected").addClass("focus");
                $dropdown.find("ul li").show();
            } else {
                $dropdown.focus();
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
    <script>
        $("#sidebar_menu").metisMenu();
        // metisMenu 
        $("#admin_profile_active").metisMenu();
        $("#sidebar_menu").find("a").removeClass("active");
        $("#sidebar_menu").find("li").removeClass("mm-active");
        $("#sidebar_menu").find("li ul").removeClass("mm-show");

        var current = window.location.pathname
        $("#sidebar_menu >li a").filter(function() {

            var link = $(this).attr("href");
            if (link) {
                if (current.indexOf(link) != -1) {
                    $(this).parents().parents().children('ul.mm-collapse').addClass('mm-show').closest('li').addClass('mm-active');
                    $(this).addClass('active');
                    return false;
                }
            }
        });
    </script>
    <script>
        new Chart(document.getElementById("doughnut-chart"), {
            type: 'doughnut',
            data: {
                // labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
                datasets: [{
                    label: "Population (millions)",
                    backgroundColor: ["#00b5e9", "#fa4251"],
                    data: [5267, 2478]
                }]
            },

        });
    </script>

    <script>
        var ctx = document.getElementById("myChart4").getContext('2d');

        var myChart4 = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["Tokyo", "Mumbai", "Mexico City", "Shanghai", "Sao Paulo", "New York", "Karachi", "Buenos Aires", "Delhi", "Moscow"],
                datasets: [{
                    // label: 'Series 1', // Name the series
                    data: [500, 50, 2424, 14040, 14141, 4111, 4544, 47, 5555, 6811], // Specify the data values array
                    fill: true,
                    borderColor: '#2196f3', // Add custom color border (Line)
                    backgroundColor: '#2196f3', // Add custom color background (Points and Fill)
                    borderWidth: 1 // Specify bar border width
                }, {
                    // label: 'Series 2', // Name the series
                    data: [1288, 88942, 44545, 7588, 99, 242, 1417, 5504, 75, 457], // Specify the data values array
                    fill: true,
                    borderColor: '#4CAF50', // Add custom color border (Line)
                    backgroundColor: '#4CAF50', // Add custom color background (Points and Fill)
                    borderWidth: 1 // Specify bar border width
                }]
            },
            options: {
                responsive: true, // Instruct chart js to respond nicely.
                maintainAspectRatio: false, // Add to prevent default behaviour of full-width/height 
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
            $('#summernote1').summernote();
        });
    </script>
</body>

</html>
