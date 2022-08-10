@extends('client/theme/main')
@section('content')


<!-- Start breadcumb Area -->
<section class="page-title o-hidden pos-r md-text-center" data-bg-color="#fbf3ed" style="background-color: rgb(251, 243, 237);">
   <canvas id="confetti" width="1366" height="654"></canvas>
  <div class="container">
    <div class="row align-items-center">
      <div class="get-in-touch col-md-6 col-sm-12 col-xs-12 innerhead">
        <h1 class="title"><span>S</span>ervices</h1>
        <p><b>Application Services</b></p>
      </div>
      <div class="col-lg-6 col-md-12 text-right md-mt-3">
        <nav aria-label="breadcrumb" class="page-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="Home">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Application Services</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <!-- <div class="page-title-pattern"><img class="img-fluid" src="images/background/10.png" alt="bg08"></div> -->
</section>
<!-- End breadcumb Area -->

<!-- Start about Area -->
<div class="contact-page area-padding aboutinner">
    <div class="container">
        <div class="row">
          <div class="col-md-6">
            <!--<h4>We build superior & innovative software!</h4>-->
            <h4>Application Services</h4>
            <p>We leverage our deep technology expertise and drive digital growth by offering numerous digital applications and enterprise solutions to propel your business forward.
            </p>
            
             <div class="about-details">
            <ul class="marker-list">
            @foreach($service as $sd)
          <?php 
          $str=$sd->sub_servicename;
          $str1=str_replace(' ','-',$str);
          ?>
            <li><a href="service/{{$str1}}" style="text-decoration:none;color:black;">{{$sd->sub_servicename}}</a></li>
				@endforeach
				
			</ul>
            </div>
          </div>
          <div class="col-md-6 hidden-xs">
            <!--<img src="{{asset('client/images/about/aboutinner.svg')}}" alt="aboutinner">-->
            <!-- <img src="{{asset('client/images/services/app.png')}}" alt="app" heigh="50%" width="50%" style="margin-left:15%;"> -->
          </div>
        </div>
    </div>
</div>

<!-- Team area -->

<!-- Our Technology -->

<!-- Our Technology -->

@endsection
