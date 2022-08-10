@extends('client/theme/main')
@section('content')


<!-- New Slider Area Start -->
<section id="Home" class="fullscreen-banner banner p-0 bg-contain bg-pos-r" data-bg-img="{{asset('client/images/background/01.png')}}" style="height: 355px; background-image: url(client/images/background/01.png);">
  <div class="spinner-eff">
    <div class="spinner-circle circle-1"></div>
    <div class="spinner-circle circle-2"></div>
  </div>
 <div class="align-center pt-0">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-12 order-lg-1">
            <img class="img-center wow jackInTheBox" data-wow-duration="3s" src="{{asset('client/images/background/02.png')}}" alt="" style="visibility: visible; animation-duration: 3s; animation-name: jackInTheBox;width: 80%;height: 300px;">
          </div>
        <div class="col-lg-6 col-md-12 order-lg-1 md-mt-5 righttext">
          <h1 class="mb-4 wow fadeInUp" data-wow-duration="1.5s" style="visibility: visible; animation-duration: 1.5s; animation-name: fadeInUp;"><b>One Ambition. Finding The Right Fit.</b></h1>
          <p class="lead mb-4 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 2s; animation-delay: 0.3s; animation-name: fadeInUp;">When it comes to IT staffing and recruitment, we truly understand what makes a CV tick. But we are not the only who will tell you we know our work. Here’s a few of our clients who are happy with our services.</p>
          <!-- <a class="btn-theme wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.5s" href="Contact" data-text="Start A Today">
          <button class="btn-change6 btn-lg" type="button"  data-toggle="modal" data-target="#myModal">Get Quote</button>    
          </a> -->
          
          <!-- modal start
           <div class="modal fade" id="myModal">
    <div class="modal-dialog">
    
      <!-- Modal content
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>-->
  
          <!-- Modal end-->
          <!-- <a class="btn-dark wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.5s" href="Contact" data-text="Learn More"> <button class="btn-change6">Contact Now</button>
          </a> -->

        </div>
      </div>
    </div>
  </div>
</section>
<!-- New Slider Area End -->


<!-- Start about Area -->
<div class="contact-page area-padding aboutinner">
    <div class="container">
    <center> <h1 class="mb-4 wow fadeInUp" data-wow-duration="1.5s" style="visibility: visible; animation-duration: 1.5s; animation-name: fadeInUp;"><b>Why Us</b></h1></center><br>
        <div class="row">
          <div class="col-md-6">
            <!--<h4>We build superior & innovative software!</h4>-->
            <!-- <h4>Why Us</h4> -->
            <p>IDC Technologies carries an international outlook when it comes to IT Staffing, Consulting and Business Process Services. With the launch of IDC Digital, our portfolio extends into Application and Digital services</p>
          </div>
          <div class="col-md-6 hidden-xs">
          <p>Providing a homogenous experience of staffing and delivery services to our valued customers. With more than a decade of fulfilling diverse client requirements world over, we are a leader in Global Workforce Management with a constant focus on the future.</p>
          </div>
          <div class="col-md-12 text-center readmorebtn"><a class="btn-dark wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.5s" href="/About" data-text="Learn More"> <button class="btn-change6">Our Story</button>
          </a></div>
        </div>
    </div>
</div>
<!-- End about Area -->


<!-- Services area start -->
<div class="welcome-area welcome-2 welcome-6 area-padding">
    <div class="container">
        <div class="row">
            <div class="all-services-top">
            	<!-- single-well end-->
				<div class="col-md-3 col-sm-3 col-xs-6">
					<div class="well-services">
						<!-- <div class="well-icon">
							<a href="#"><i class="fa fa-tasks" aria-hidden="true"></i></a>
						</div> -->
						<div class="well-content">
							<h4>Strong Work Ethics</h4>
							<p>200+ routine hire of IT professionals every month</p>
						</div>
					</div>
				</div>
                <!-- single-well end-->
				<div class="col-md-3 col-sm-3 col-xs-6">
					<div class="well-services">
						<!-- <div class="well-icon">
							<a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
						</div> -->
						<div class="well-content">
							<h4>Reliability</h4>
							<p>24-hour turnaround time</p>
						</div>
					</div>
				</div>
				<!-- single-well end-->
				<!-- single-well end-->
				<div class="col-md-3 col-sm-3 col-xs-6">
					<div class="well-services">
						<!-- <div class="well-icon">
							<a href="#"><i class="fa fa-user" aria-hidden="true"></i></a>
						</div> -->
						<div class="well-content">
							<h4>Integrity</h4>
							<p>250+ dedicated and trained recruitment professionals</p>
						</div>
					</div>
				</div>
				
				<div class="col-md-3 col-sm-3 col-xs-6">
					<div class="well-services">
						<!-- <div class="well-icon">
							<a href="#"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
						</div> -->
						<div class="well-content">
							<h4>Result-Driven</h4>
							<p>100% client retention</p>
						</div>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>
<!-- Services area ends -->



<!-- about-area start -->
<div class="about-area bg-color area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="about-image">
                    <img src="{{asset('client/images/about/aboutimg1.png')}}" alt="" style="
    height: 250px;
">
                    <!-- <div class="video-content">
						<a href="https://www.youtube.com/watch?v=O33uuBh6nXA" class="video-play vid-zone">
							<i class="fa fa-play"></i>
						</a>
					</div> -->
                </div>
            </div>
            <!-- column end -->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="about-content">
                	<div class="title-effect">
			            <div class="bar bar-top"></div>
			            <div class="bar bar-right"></div>
			            <div class="bar bar-bottom"></div>
			            <div class="bar bar-left"></div>
			          </div>
                      
                      <h1 class="mb-4 wow fadeInUp" data-wow-duration="1.5s" style="visibility: visible; animation-duration: 1.5s; animation-name: fadeInUp;"><b>What do you get with us as your partner?</b></h1>
                    <p><b> You get more than just a helping hand in all the below-mentioned services.</b></p>
                    <!-- <div class="about-details">
                    <ul class="marker-list">
							<li>Responsive Website Design</li>
							<li>SEO Integrated</li>
							<li>Boost Brand Recognition</li>
							<li>Flexible Design</li>
						</ul>
                    </div> -->
                </div>
            </div>
            <!-- column end -->
        </div>
    </div>
</div>
<!-- about-area end -->



<!--Testimonials Area Start-->
<div class="testimonial-area area-padding">
	<div class="container">
        <div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="section-title text-center">
				          <div class="title-effect ourwork-titleffect">
				            <div class="bar bar-top"></div>
				            <div class="bar bar-right"></div>
				            <div class="bar bar-bottom"></div>
				            <div class="bar bar-left"></div>
				          </div>
				          <h3>Services</h3><br><br>
				          <!-- <h6 class="title">You Can See our clients feedback What you Say?</h6> 
                          <h6 class="title">Our customers have something to say</h6>-->
				    </div>
			</div>
		</div>
		<div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
				<div class="Reviews-content">
					<!-- start testimonial carousel -->
					<div class="anti-01-holder">
                  		<div class="anti-01"></div>
                	</div>
					<div class="testimonial-carousel item-indicator">
					                            <!-- End single item -->
                        <div class="single-testi">
                            <div class="testi-img ">
                                <img src="{{asset('client/images/about/consultation.svg')}}" alt="clientimg">
                            </div>
                            <div class="testi-text">
                                <p>We get your organization where it needs to be through in-depth indusrty knowledge, technical expertise and best transformation approaches while upskilling your workforce.</p>
                                <div class="texti-name">
                                	<h4>Looking for Consultancy Services?</h4>
                                    <div class="col-md-12 text-center readmorebtn"><a class="btn-dark wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.5s" href="/service/consultancy-services" data-text="Learn More"> <button class="btn-change6">Know More</button>
                                    </a></div>
                                </div>
                            </div>
                        </div>
						<!-- End single item-->
						<div class="single-testi">
                            <div class="testi-img ">
                                <img src="{{asset('client/images/about/Layer-15.svg')}}" alt="clientimg">
                            </div>
                            <div class="testi-text">
                                <p>Whether it’s on-site or remote work, we help you extend your job search and find the next big opportunity across sectors and regions.</p>
                                <div class="texti-name">
                                	<h4>Looking for Work?</h4>
                                    <!--<span class="guest-rev"><a href="#">Director, Blond Era Digital Services.</a></span>-->
                                    <div class="col-md-12 text-center readmorebtn"><a class="btn-dark wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.5s" href="/Job-seeker-form" data-text="Learn More"> <button class="btn-change6">Submit CV</button>
                                    </a></div>
                                </div>
                            </div>
                        </div>
                        <!-- End single item -->
                     <div class="single-testi">
                            <div class="testi-img ">
                                <img src="{{asset('client/images/about/group-1.svg')}}" alt="clientimg">
                            </div>
                            <div class="testi-text">
                                <p>With the right mix of technology and human, we help you to hire candidates from the lowest to the highest position who can contribute to your business goals and company ethos.</p>
                                <div class="texti-name">
                                	<h4>Looking for People?</h4>
                                    <!-- <span class="guest-rev"><a href="#">Designation</a></span> -->
                                    <div class="col-md-12 text-center readmorebtn"><a class="btn-dark wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.5s" href="/Services" data-text="Learn More"> <button class="btn-change6">Our Services</button></a><a class="btn-dark wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.5s" href="/Industries" data-text="Learn More"><button class="btn-change6">Our Industries</button>
                                    </a>
                                </div>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="single-testi">
                            <div class="testi-img ">
                                <img src="{{asset('client/images/about/network.svg')}}" alt="clientimg">
                            </div>
                            <div class="testi-text">
                                <p>Whether it’s Cloud, Agile, DevOps, SRE, or Big Data transformation, we help you build disruptive applications by leveraging cutting-edge digital technologies.</p>
                                <div class="texti-name">
                                	<h4 style="margin-top:-20px;">Looking for Digital Transformation  & Business Agility?</h4>
                                    <!-- <span class="guest-rev"><a href="#">Designation</a></span> -->
                                    <div class="col-md-12 text-center readmorebtn"><a class="btn-dark wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.5s" 
                                    href="/service/Digital-Transformation-&-Business-Agility" data-text="Learn More"> <button class="btn-change6">Know More</button>
                                    </a></div>
                                </div>
                            </div>
                        </div>
                        <div class="single-testi">
                            <div class="testi-img ">
                                <img src="{{asset('client/images/about/Outline.svg')}}" alt="clientimg">
                            </div>
                            <div class="testi-text">
                                <p>We specialize in custom development, application support, maintenance and application managed services through modern technology stacks.</p>
                                <div class="texti-name">
                                	<h4>Looking for  Application Services?</h4>
                                    <!-- <span class="guest-rev"><a href="#">Designation</a></span> -->
                                    <div class="col-md-12 text-center readmorebtn"><a class="btn-dark wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.5s" href="/service/Application-Support-And-Managed-Services" data-text="Learn More"> <button class="btn-change6">Know More</button>
                                    </a></div>
                                </div>
                            </div>
                        </div>
                        <!-- End single item -->
					</div>
				</div>
			</div>
		</div>
        
	</div>

</div>
<div class="anti-01-holder">
    <div class="anti-01"></div>
</div>
<!--Testimonials Area End-->






<!-- Projects area start -->
<!-- <section class="our-work">
	<div class="project-area project-3 area-padding">
        <div class="container">
            <div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="section-title text-center">
				          <div class="title-effect ourwork-titleffect">
				            <div class="bar bar-top"></div>
				            <div class="bar bar-right"></div>
				            <div class="bar bar-bottom"></div>
				            <div class="bar bar-left"></div>
				          </div>
				          <h3>Our Work</h3>
				          <h6 class="title">Our Software company is a business of one or more experts that provides professional Work</h6>
				    </div>
				</div>
			</div>
            <div class="row">
                <div class="project-grid project-content" style="position: relative; height: 748.2px;">
                    <!-- single-awesome-project start
                    <div class="project-single all-padding col-xs-6" style="position: absolute; left: 585px; top: 0px;">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a class="venobox vbox-item" data-gall="myGallery" href="client/images/portfolio/vishakatex.jpg">
                                    <img src="{{asset('client/images/portfolio/vishakatex.jpg')}}" alt="">
                                    <div class="add-actions">
                                        <div class="project-dec">
                                            <span>Texttile</span>
                                            <h5>Vishaka Textiles</h5>
                                            <div class="opacity-text">
                                            	<p>Vishaka Industries Part of reputed business “kodam Group”, has grown manifold since its inception in the year 1968, having production capacity of 800 tons of Terry Towel & Toweling cloth annually.</p>
                                                <a href="http://vishakatex.in/"><span class="know-more-btn">Know more</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="mobilehead hidden-md- hidden-lg hidden-sm">
                                    <a href="#." target="_blank">Vishaka Textiles</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                     single-awesome-project end -->
                    <!-- single-awesome-project start 
                    <div class="project-single all-padding col-xs-6" style="position: absolute; left: 585px; top: 0px;">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a class="venobox vbox-item" data-gall="myGallery" href="client/images/portfolio/whip1.JPG">
                                    <img src="{{asset('client/images/portfolio/whip1.JPG')}}" alt="">
                                    <div class="add-actions">
                                        <div class="project-dec">
                                            <span>Market Bytes</span>
                                            <h5>Whipsmart Market Bytes</h5>
                                            <div class="opacity-text">
                                            	<p>The Whipsmart market bytes platform is created specifically for you with knowledge of your market of interest.</p>
                                                <a href="http://whipsmartmi.com/"><span class="know-more-btn">Know more</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="mobilehead hidden-md- hidden-lg hidden-sm">
                                    <a href="#." target="_blank">Whipsmart Market Bytes</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                     single-awesome-project end -->
                     <!-- single-awesome-project start 
                    <div class="project-single all-padding col-xs-6" style="position: absolute; left: 0px; top: 374px;">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a class="venobox vbox-item" data-gall="myGallery" href="client/images/portfolio/irji.png">
                                    <img src="{{asset('client/images/portfolio/irji.png')}}" alt="">
                                    <div class="add-actions">
                                        <div class="project-dec">
                                            <span>Research Journal</span>
                                            <h5>International Research Journal of India.</h5>
                                            <div class="opacity-text">
                                            	<p>IRJI is a leading Research Journal Publication catering to national and international experts for submitting well researched and innovative articles/papers.</p>
                                                <a href="http://irji.in/"><span class="know-more-btn">Know more</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="mobilehead hidden-md- hidden-lg hidden-sm">
                                    <a href="#." target="_blank">IRJI</a>
                                </div>
                            </div>
                        </div>
                    </div>
                     single-awesome-project end -->
                    <!-- single-awesome-project start 
                    <div class="project-single all-padding col-xs-6" style="position: absolute; left: 585px; top: 374px;">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a class="venobox vbox-item" data-gall="myGallery" href="client/images/portfolio/myrent.png">
                                    <img src="{{asset('client/images/portfolio/myrent.png')}}" alt="">
                                    <div class="add-actions">
                                        <div class="project-dec">
                                            <span>Enterprises</span>
                                            <h5>Ramakant Enterprises</h5>
                                            <div class="opacity-text">
                                            	<p>We help agencies to define their new business objectives and then create the road.</p>
                                                <a href="http://myrentagreement.info/"><span class="know-more-btn">Know more</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="mobilehead hidden-md- hidden-lg hidden-sm">
                                    <a href="#." target="_blank">Market Research Engine</a>
                                </div>
                            </div>
                        </div>
                    </div>
                     single-awesome-project end 
                </div>
			</div>
            <div class="col-md-12 text-center readmorebtn"><a class="btn-dark wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.5s" href="Portfolio" data-text="Learn More"> <button class="btn-change6">Read More</button>
          </a></div>
        </div>

	</div>
</section> -->
<!-- Projects area ends -->

<!-- Our Technology Start -->

<!-- Our Technology End -->





@endsection
