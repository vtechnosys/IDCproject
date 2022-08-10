<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login | Vertex Technosys</title>
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
<body class="materialdesign" style="background-image: url('bluebg.jpg');">
      <!-- login Start-->
      <div class="login-form-area mg-t-40 mg-b-40">
        <div class="container-fluid">
            <div class="row">
            <div class="col-lg-4"></div>                              
            @if(\Session::has('alert'))
                <div class="alert alert-danger">
                    <div>{{Session::get('alert')}}</div>
                </div>
            @endif
            @if(\Session::has('success'))
                <div class="alert alert-success">
                    <div>{{Session::get('success')}}</div>
                </div>
            @endif                      
            <form method="POST" action="{{ URL::to('login')}}" class="adminpro-form">
            {{ csrf_field() }} 
                <div class="col-lg-4">
                        <div class="login-bg">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="logo">
                                        <a href="#"><img src="{{asset('img/logo/logo.png')}}" alt="" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="login-title">
                                        <h1>Welcome to Dashboard Login</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="login-input-head">
                                        <label>Username</label>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="login-input-area">
                                        <input type="text" name="uname" class="form-group" autofocus="autofocus" required/>
                                        <i class="fa fa-user login-user" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="login-input-head">
                                        <label>Password</label>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="login-input-area">
                                        <input type="password" name="password" class="form-group" required/>
                                        <i class="fa fa-lock login-user"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">

                                </div>
                                <div class="col-lg-8">
                                    <div class="login-button-pro">
                                        <button type="submit" class="btn btn-primary btn-md">Log in</button>                                        
                                        <button type="reset" class="btn btn-white btn-md">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="col-lg-4"></div>
            </div>
        </div>
    </div>
    <!-- login End-->



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