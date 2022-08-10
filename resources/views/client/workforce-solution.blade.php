@extends('client/theme/main')
@section('content')


<!-- Start breadcumb Area -->
<section class="page-title o-hidden pos-r md-text-center" data-bg-color="#fbf3ed" style="background-color: rgb(251, 243, 237);">
   <canvas id="confetti" width="1366" height="654"></canvas>
  <div class="container">
    <div class="row align-items-center">
      <div class="get-in-touch col-md-6 col-sm-12 col-xs-12 innerhead">
        <h1 class="title"><span>S</span>ervices</h1>
        <p><b>Workforce Solutions</b></p>
      </div>
      <div class="col-lg-6 col-md-12 text-right md-mt-3">
        <nav aria-label="breadcrumb" class="page-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="Home">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Workforce Solutions</li>
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
            <h4>Workforce Solutions</h4>
            <p>We help organizations find talent effortlessly. With our AI-powered methodology, we sift through 100s of CVs to ensure you find the right fit for your organization.
            </p>
            @foreach($service as $s)
            <div class="about-details">
              <ul class="marker-list1">
                <?php
                $name=$s->sub_servicename;
               
                $str=str_replace(' ','-',$name);
               
                if($name=='Staffing')
                {
                ?>
                <li><a href="/service/{{$str}}" style="text-decoration:none;color:black;">{{$s->sub_servicename}}</a>
                  <ul class="marker-list">
                  @foreach($service1 as $s1)  
                  <?php
                  $subname=$s1->sub_servicename1;
                $str1=str_replace(' ','-',$subname);
                  ?>
                  <li><a href="/service/{{$str}}/{{$str1}}" style="text-decoration:none;color:black;">{{$s1->sub_servicename1}}</li>
                  @endforeach
                   </ul>
                </li>
                 <?php
                }else{
                 ?> 
                 <li><a href="/service/{{$str}}" style="text-decoration:none;color:black;">{{$s->sub_servicename}}</a></li>
                 <?php
                }
                 ?>
              </ul>
            </div>
            @endforeach
          </div>
          <div class="col-md-6 hidden-xs">
            <!--<img src="{{asset('client/images/about/aboutinner.svg')}}" alt="aboutinner">-->
            <!-- <img src="{{asset('client/images/services/web-development.png')}}" alt="web-development" heigh="50%" width="50%" style="margin-left:15%;"> -->
          </div>
        </div>
    </div>
</div>

<!-- Team area -->

<!-- Our Technology -->

<!-- Our Technology -->

@endsection
