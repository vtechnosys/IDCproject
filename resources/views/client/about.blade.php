@extends('client/theme/main')
@section('content')


<!-- Start breadcumb Area -->
<section class="page-title o-hidden pos-r md-text-center" data-bg-color="#fbf3ed" style="background-color: rgb(251, 243, 237);">
   <canvas id="confetti" width="1366" height="654"></canvas>
  <div class="container">
    <div class="row align-items-center">
      <div class="get-in-touch col-md-6 col-sm-12 col-xs-12 innerhead">
        <h1 class="title"><span>A</span>bout Us</h1>
        <p>It is a known fact that people we hardly know are the ones to improve our lives most dramatically.</p>
<p style="font-size:15px;margin-top:10px;">At IDC Technologies, we imbibe this fact and work our way to make a meaningful impact on the lives of our clients, partner and job seekers.</p>
      </div>
      <div class="col-lg-6 col-md-12 text-right md-mt-3">
        <nav aria-label="breadcrumb" class="page-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="Home">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">About Us</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <!-- <div class="page-title-pattern"><img class="img-fluid" src="images/background/10.png" alt="bg08"></div> -->
</section>
<!-- End breadcumb Area -->

<!-- Start about Area -->

<div class="contact-page area-padding">
    <div class="container">
        <div class="">
          <!--<p>Explore opportunities to take your career to the next level. Whether you are a student, a graduate or an experienced professional. Discover the impact you could make with a career at <b>Vertex Techonosys.</b></p>-->
          <p style="margin-top:20px;">We are a solution-oriented firm. We rely heavily on building meaningful communications and relationships. And through which, we discover, align, deliver and manage a host of managed IT and staffing services.</p>
          <p style="margin-top:20px;">Headquartered in Silicon Valley in the U.S. with satellite offices across the globe, we have a pulse on the ever-evolving job market under each customer segments and industries. We enter into a partnership with you intending to work collectively with a commonly identified goal. We deliver exactly what our clients specify, adhering to quality and fast turnaround time of 24 hours.</p>
          <p style="margin-top:10px;"><p style="margin-top:-20px;">Fueled by great teamwork and flexibility in our approach, every action that we take is aimed at driving change and that has positioned us as a leader in IT consulting and staffing services space.</p>
          </p>
          
           
        </div>
    </div>
</div>

<div class="contact-page area-padding aboutinner">
    <div class="container">
        <div class="row">
          <div class="col-md-6">
            <!--<h4>We build superior & innovative software!</h4>-->
            <h4>Work towards a dream and you will see dreams turning into reality.</h4>
    
            <p>At IDC Technologies, we believe that staffing is all about human connection and building relationships. And equally about transparency and integrity.</p>
            <p>Having said that, it is important to base trust and confidence in your colleagues and teams to do the right things that drive value. We too have been focused on talent we work with, the customers we serve and work towards a mutually beneficial objective.</p>
            <p>- Prateek Gattani, CEO</p>
          </div>
          <div class="col-md-6 hidden-xs">
            <img src="{{asset('client/images/about/aboutimg2.png')}}" alt="aboutinner" style="height:400px;width:500px;">
          </div>
        </div>
    </div>
</div>
<!-- End about Area -->

<!-- Vistion mission area -->
<div class="about-feature-area bg-color area-padding">
    <div class="container">
        <!-- end Row -->
        <div class="row">
            <div class="about-feature">
                <!-- Start column -->
                <div class="col-md-6 col-sm-4 col-xs-12">
                    <div class="feature-about style-2">
                        <div class="feature-icon">
                            <i class="icon icon-cloud"></i>
                        </div>
                        
                        <div class="feature-text">
                            <h4>Our Vision</h4>
                            <p>To build centres of excellence that promote a high-quality experience for our clients and partners through the highest standards of integrity, quality and mutual respect.</p>
                        </div>
                        
                    </div>
                </div>
                
                <!-- Start column -->
                <div class="col-md-6 col-sm-4 col-xs-12">
                    <div class="feature-about style-2">
                        <div class="feature-icon">
                            <i class="icon icon-apartment"></i>
                        </div>
                        <div class="feature-text">
                            <h4>Our Mission</h4>
                            <p>To be a strong, service-first, trusted and globally admired staffing & consulting strategic partner, with an aim to reinvent and redefine the dynamics of the industry.</p>
                           
                        </div>
                    </div>
                </div>
                <!-- Start column -->
                <!-- <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="feature-about">
                        <div class="feature-icon">
                            <i class="icon icon-diamond"></i>
                        </div>
                        <div class="feature-text">
                            <h4>Our Experience</h4>
                            <p>Experiencing the Challenging Task with fulfillment</p>
                        </div>
                    </div>
                </div> -->
                <!-- End column -->
            </div>
        </div>
    </div>
</div>
<!-- Vistion mission area -->

<!-- about-area start -->
<div class="about-area bg-color area-padding" style="margin-bottom:50px;">
    <div class="container">
        <div class="row">
            
            <!-- column end -->
            <div class="col-md-6 col-sm-6 col-xs-12" style="border:none;height:400px;background-color:#e59c6538;">
              <div class="about-details" style="padding:20px;margin-top:100px;">
                    <center><h3>Services</h3></center>
                    <p align="center">Check out how we can partner with you to solve all your staffing needs.</p>
                    <div class="col-md-12 text-center readmorebtn" style="margin-left:120px;"><a class="btn-dark wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.5s" href="/Services" data-text="Learn More"> <button class="btn-change6">Our Services</button>
                                    </a></div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12" style="border:none;height:400px;">
              <div class="about-details" style="padding:20px;margin-top:100px;">
                    <center><h3>Industries</h3></center>
                    <p align="center">We provide customized solutions to your staffing needs under numerous industries.</p>
                    <div class="col-md-12 text-center readmorebtn" style="margin-left:150px;"><a class="btn-dark wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.5s" href="/Industries" data-text="Learn More"> <button class="btn-change6">Our Focus Industries</button>
                                    </a></div>
              </div>
            </div>
            
            </div>
            <!-- column end -->
        </div>
    </div>
</div>
<!-- about-area end -->





<!-- Our Technology -->

<!-- Our Technology -->

@endsection
