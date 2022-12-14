@extends('client/theme/main')
@section('content')


<!-- Start breadcumb Area -->
<section class="page-title o-hidden pos-r md-text-center" data-bg-color="#fbf3ed" style="background-color: rgb(251, 243, 237);">
   <canvas id="confetti" width="1366" height="654"></canvas>
  <div class="container">
    <div class="row align-items-center">
      <div class="get-in-touch col-md-6 col-sm-12 col-xs-12 innerhead">
        <h1 class="title"><span>C</span>ontact</h1>
        <p>Let's work together</p>
      </div>
      <div class="col-lg-6 col-md-12 text-right md-mt-3">
        <nav aria-label="breadcrumb" class="page-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="Home">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <!-- <div class="page-title-pattern"><img class="img-fluid" src="images/background/10.png" alt="bg08"></div> -->
</section>
<!-- End breadcumb Area -->
<!-- Start contact Area -->
<!-- <div class="contact-page area-padding">
    <div class="container">
        <div class="">
          <!--<p>Explore opportunities to take your career to the next level. Whether you are a student, a graduate or an experienced professional. Discover the impact you could make with a career at <b>Vertex Techonosys.</b></p>
          <p style="margin-top:-20px;">For a change, instead of being a choice, you will be the one choosing a door of an incredible company of your choice. At IDC Technologies, we align great opportunities with your personal career plan. Our vast network of offices and over 250+ dedicated and best IT staffing specialists are eager to help you achieve your career goals.</p>
        <p>We build connections with tons of great companies in the U.S. as well as Fortune 500 companies across the globe. Through these connections, we open the right door for you in all areas of Information Technology to take your career forward. We aim to partner with you throughout your career and help you realize your true potential.</p>
           
        </div>
    </div>
</div> -->

<!--Testimonials Area Start-->
<div class="testimonial-area area-padding">
	<div class="container">
        <!-- <div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="section-title text-center">
				          <div class="title-effect ourwork-titleffect">
				            <div class="bar bar-top"></div>
				            <div class="bar bar-right"></div>
				            <div class="bar bar-bottom"></div>
				            <div class="bar bar-left"></div>
				          </div>
                  <p>You get more than just a helping hand in recruiting and staffing.</p>
				          <h3>What do you get with us as your staffing partner?</h3>
				          <!-- <h6 class="title">You Can See our clients feedback What you Say?</h6> 
                          <h6 class="title">Our customers have something to say</h6>
				    </div>
			</div>
		</div> -->
		
        <!-- <div class="col-md-12 text-center readmorebtn"><a class="btn-dark wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.5s" href="Testimonials" data-text="Learn More"> <button class="btn-change6">Read More</button>
          </a></div> -->
	</div>

</div>
<div class="anti-01-holder">
    <div class="anti-01"></div>
</div>
<!--Testimonials Area End-->
<!-- End Contact Area -->
<!-- Start contact Area -->
<div class="contact-page area-padding">
    <div class="container">
    
        <div class="row mt-5">
            <section class="get-in-touch col-md-6 col-sm-12 col-xs-12">
               <!-- <h1 class="title">Get in touch</h1> -->
               <form class="contact-form row" action="{{action('ContactController@store')}}" method="post">
			   {{ csrf_field() }}
                  <div class="form-field col-lg-6">
                     <input id="name" class="input-text js-input" type="text" required name="name">
                     <label class="label" for="name" >Name</label>
                  </div>
                  <div class="form-field col-lg-6 ">
                     <input id="email" class="input-text js-input" type="email" required name="email">
                     <label class="label" for="email" >E-mail</label>
                  </div>
                  <div class="form-field col-lg-6 ">
                     <input id="company" class="input-text js-input" type="text" required name="company_name">
                     <label class="label" for="company">Company Name</label>
                  </div>
                   <div class="form-field col-lg-6 ">
                     <input id="phone" class="input-text js-input" type="text" required name="contact_number">
                     <label class="label" for="phone">Contact Number</label>
                  </div>
                  <div class="form-field col-lg-12">
                     <input id="message" class="input-text js-input" type="text" required name="message">
                     <label class="label" for="message">Message</label>
                  </div>
                  <div class="form-field col-lg-12 btn-theme wow fadeInUp">
                     <input class="btn-change6" type="submit" value="Submit">
                  </div>
               </form>
            </section>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3801.5343087882115!2d75.91508331440443!3d17.672201987908498!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc5da64017f2cad%3A0x9696761cef43dc11!2sVertex%20Technosys!5e0!3m2!1sen!2sin!4v1574785261477!5m2!1sen!2sin" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
            <!-- <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="contact-form">
                    <div class="row">
                        <form id="contactForm" method="POST" action="http://snowwhitetheme.com/montril-preview/contact.php" class="contact-form">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="name" class="form-control" placeholder="Name" required data-error="Please enter your name">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="email" class="email form-control" id="email" placeholder="Email" required data-error="Please enter your email">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <input type="text" id="msg_subject" class="form-control" placeholder="Subject" required data-error="Please enter your message subject">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <textarea id="message" rows="7" placeholder="Massage" class="form-control" required data-error="Write your message"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                <a class="btn-theme wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.5s" href="#" data-text="Start A Today"><button class="btn-change6">Submit</button>
  </a>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> -->
            <!-- End contact Form -->
            <!-- Contact Details -->

        </div>
    </div>
    <div class="clearfix"></div>
    <div class="welcome-area area-padding">
            <div class="container">
                <div class="row">
                    <div class="all-services-top">
                        <!-- single-well end-->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="well-services">
                                <span class="number">O</span>
                                <div class="well-icon">
                                    <a href="#."><i class="fa fa-map-marker"></i></a>
                                </div>
                                <div class="well-content">
                                    <h4>Our Location</h4>
                                    <p>9/4, Shri Markendaya Yantramag Dharak Society, Near New WIT College, Next to Upahar Bakery lane, Solapur - 413006.</p>
                                </div>
                            </div>
                        </div>
                        <!-- single-well end-->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="well-services">
                                <span class="number">O</span>
                                <div class="well-icon">
                                    <a href="#."><i class="fa fa-envelope fa-xs"></i></a>
                                </div>
                                <div class="well-content">
                                    <h4>Email</h4>
                                    <p>info@vertextechnosys.com</p>
                                    <!--p>vertextechnosysinfo@gmail.com</p-->
                                </div>
                            </div>
                        </div>
                        <!-- single-well end-->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="well-services">
                                <span class="number">O</span>
                                <div class="well-icon">
                                    <a href="#."><i class="fa fa-mobile"></i></a>
                                </div>
                                <div class="well-content">
                                    <h4>Mobile</h4>
                                    <p>+91 9422781840</p>
                                    <p>+91 9403046045</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<!-- End Contact Area -->


@endsection
