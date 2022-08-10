@extends('client/theme/main')
@section('content')

<!-- Start breadcumb Area -->
<section class="page-title o-hidden pos-r md-text-center" data-bg-color="#fbf3ed" style="background-color: rgb(251, 243, 237);">
   <canvas id="confetti" width="1366" height="654"></canvas>
  <div class="container">
    <div class="row align-items-center">
      <div class="get-in-touch col-md-6 col-sm-12 col-xs-12 innerhead">
        <h1 class="title" style="margin-top:-30px;"><span>E</span>mployer</h1>
        <!--<p>Let's work together</p>-->
        <p><b>We tap into the power of people and build a workforce that’s more than a right fit for your organization.
</b></p>
      </div>
      <div class="col-lg-6 col-md-12 text-right md-mt-3">
        <nav aria-label="breadcrumb" class="page-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="Home">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Employer</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>
<!-- End breadcumb Area -->

<!-- Start contact Area -->
<div class="contact-page area-padding">
    <div class="container">
        <div class="">
          <!--<p>Explore opportunities to take your career to the next level. Whether you are a student, a graduate or an experienced professional. Discover the impact you could make with a career at <b>Vertex Techonosys.</b></p>-->
          <p style="margin-top:-20px;">Our unique AI-powered technology ensures that we find the right fit from our exhaustive talent pool for you every single time. Whatever is your requirement – temporary or permanent, 1 or 10 or 1000 and more, we come up with the right plan as per your budget and find the best talent available with a turnaround time of just 24 hours. This is what sets us apart as one of the most agile IT staffing companies.</p>
           
        </div>
    </div>
</div>
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
                  <p>You get more than just a helping hand in recruiting and staffing.</p>
				          <h3>What do you get with us as your staffing partner?</h3>
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
                            <div class="testi-img" style="border:none;">
                            <img src="{{asset('client/images/about/magnifier.svg')}}" alt="clientimg" style="border:none;">
                            </div>
                            <div class="testi-text">
                                <p>We anticipate needs, build relationships, and leverage them to have pre-qualified and a skill set focussed CV’s in our database waiting for you.</p>
                                <div class="texti-name">
                                	<h4>Proactive Search</h4>
                                    <!-- <span class="guest-rev"><a href="#."></a></span> -->
                                </div>
                            </div>
                        </div>
						<!-- End single item-->
						<div class="single-testi">
                            <div class="testi-img ">
                                <img src="{{asset('client/images/about/recruitment.svg')}}" alt="clientimg" style="border:none;">
                            </div>
                            <div class="testi-text">
                                <p>We get the requirements from you, work up a forward-looking staffing plan and deep dive to find the right set of CVs that are more than a good fit on paper.</p>
                                <div class="texti-name">
                                	<h4>Recruiting</h4>
                                    <!-- <span class="guest-rev"><a href="#"></a></span> -->
                                </div>
                            </div>
                        </div>
                        <!-- End single item -->
                        <!--<div class="single-testi">-->
                        <div class="single-testi">
                            <div class="testi-img ">
                                <img src="{{asset('client/images/about/consultation.svg')}}" alt="clientimg" style="border:none;">
                            </div>
                            <div class="testi-text">
                                <p>Through our AI-powered methodology and with thorough validation of skills and expertise, we ensure a confirmed fit for the position.</p>
                                <div class="texti-name">
                                	<h4>Consultation</h4>
                                    <!-- <span class="guest-rev"><a href="#">Recruiting</a></span> -->
                                </div>
                            </div>
                        </div>
</div>
                        <!-- End single item -->
					</div>
				</div>
			</div>
		</div>
        <!-- <div class="col-md-12 text-center readmorebtn"><a class="btn-dark wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.5s" href="Testimonials" data-text="Learn More"> <button class="btn-change6">Read More</button>
          </a></div> -->
	</div>

</div>
<div class="anti-01-holder">
    <div class="anti-01"></div>
</div>
<!--Testimonials Area End-->
<!-- End Contact Area -->

<!-- about-area start -->
<div class="about-area bg-color area-padding" style="margin-bottom:50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-6 col-xs-12" style="border-left:none;border-top:none;border-bottom:none;">
                <div class="about-image">
                <h1 class="mb-4 wow fadeInUp" data-wow-duration="1.5s" style="visibility: visible; animation-duration: 1.5s; animation-name: fadeInUp;"><b>Solutions aligned to your business needs</b></h1>
                    <!-- <p><b> Solutions aligned to your business needs</b></p> -->
                   
                </div>
            </div>
            <!-- column end -->
            <?php
            $i=1;
            ?>
            @foreach($service2 as $s)
<?php
if($i%2==0)
{
    $str=$s->sub_servicename;
    $str1=str_replace(' ','-',$str);
?>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="about-details">
                
                    <ul class="marker-list">
                      <li><a href="/service/{{$str1}}" style="text-decoration:none;color:black;">{{$s->sub_servicename}}</a></li>
                     
                    </ul>
              </div>
            </div>
            <?php
}else{
    $str=$s->sub_servicename;
    $str1=str_replace(' ','-',$str);
            ?>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="about-details">
                    <ul class="marker-list">
                      <li><a href="/service/{{$str1}}" style="text-decoration:none;color:black;">{{$s->sub_servicename}}</a></li>
                      
                    </ul>
                </div>
			      </div>
            
            </div>
            <?php
            $i++;
}
            ?>
            @endforeach
            <!-- column end -->
        </div>
    </div>
</div>
<!-- about-area end -->

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
                            
                            <div class="testi-text">
                            <h3>Find talent with ease</h3>    
                            <hr>
                            <p>Finding the right talent from thousands of CVs can be a daunting task. With IDC Technologies AI-powered IT staffing solutions, we can find you the right talent without breaking a sweat.</p>
                             <div class="texti-name">
                             <div class="col-md-12 text-center readmorebtn"><a class="btn-dark wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.5s" href="/employer-speek-expert" data-text="Learn More"> <button class="btn-change6">Speak to an Expert</button>
                                    </a></div>
                                </div> 
                            </div>
                        </div>
						<!-- End single item-->
						<div class="single-testi">
                            
                            <div class="testi-text">
                              <h3>Why choose us as your IT staffing partner</h3>
                              <hr>
                                <p>With 13 years in the staffing industry, we understand the intricacies of the job market thoroughly. We use this experience, coupled with our strong AI-powered screening technology, to find you the right candidate that fits like a glove.</p>
                                <div class="texti-name" style="margin-top:-10px;">
                             <div class="col-md-12 text-center readmorebtn"><a class="btn-dark wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.5s" href="/employer-speek-expert" data-text="Learn More"> <button class="btn-change6">Speak to an Expert</button>
                                    </a></div>
                                </div> 
                            </div>
                        </div>
                        <!-- End single item -->
                        <!--<div class="single-testi">-->
                        
					</div>
				</div>
			</div>
		</div>
        <!-- <div class="col-md-12 text-center readmorebtn"><a class="btn-dark wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.5s" href="Testimonials" data-text="Learn More"> <button class="btn-change6">Read More</button>
          </a></div> -->
	</div>

</div>
<div class="anti-01-holder">
    <div class="anti-01"></div>
</div>
<!--Testimonials Area End-->

<!-- about-area start -->
<div class="about-area bg-color area-padding" style="margin-bottom:50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-6 col-xs-12" style="border:none;height:auto;;border-left:none;border-top:none;border-bottom:none;">
                <div class="about-image">
                <h1 class="mb-4 wow fadeInUp" data-wow-duration="1.5s" style="visibility: visible; animation-duration: 1.5s; animation-name: fadeInUp;"><b>Across industries</b></h1>
                    <!-- <p><b> Solutions aligned to your business needs</b></p> -->
                   
                </div>
            </div>
            <!-- column end -->
            <?php
            $i=1;
            ?>
            @foreach($ind as $duo)
            <?php
            if($i%2==0)
            {
                $str=$duo->title;
                $sd=str_replace(' ','-',$str);
            ?>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="about-details">
                    <ul class="marker-list">
                     <li><a href="/industries/{{$sd}}" style="text-decoration:none;color:black;">{{$duo->title}}</a></li>
                     
                    </ul>
              </div>
            </div>
            <?php
            }else{
                $str=$duo->title;
                $sd=str_replace(' ','-',$str);
            ?>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="about-details">
                    <ul class="marker-list">
                      <li><a href="/industries/{{$sd}}" style="text-decoration:none;color:black;">{{$duo->title}}</a></li>
                      
                    </ul>
                </div>
			      </div>
            <?php
            $i++;
            }
            
            ?>
            @endforeach
            </div>
            <!-- column end -->
        </div>
    </div>
</div>
<!-- about-area end -->

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
		<div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
				<div class="Reviews-content">
					<!-- start testimonial carousel -->
					<div class="anti-01-holder">
                  		<div class="anti-01"></div>
                	</div>
					<div class="testimonial-carousel item-indicator">
					    
                        <!-- End single item -->
                        <div class="single-testi1">
                            
                            <div class="testi-text">
                            <h5><i class="fas fa-quote-left"></i> We thank IDC Technologies for supporting us during the growth phase of FY’21. The support at Malaysia for the ad-hoc need of the Systems team over the weekend with a TAT of fewer than 24 hours is much appreciated. Overall, the conversion rate of Sourcing to Offer and Offer to Joining which is above 60-70% is highly appreciated.<i class="fas fa-quote-right"></i></h5>    <br>
                            <h6>Anusha Venkat</h6>
                                    <span class="guest-rev"><a href="#">Global Resource Management, NCS Pte. Ltd. (A member of the SingTel Group)</a></span>
                             <!-- <div class="texti-name">
                             <div class="col-md-12 text-center readmorebtn"><a class="btn-dark wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.5s" href="/employer-speek-expert" data-text="Learn More"> <button class="btn-change6">Speak to an Expert</button>
                                    </a></div>
                                </div>  -->
                            </div>
                        </div>


                        <!-- End single item -->
                        <div class="single-testi1">
                            
                            <div class="testi-text">
                            <h5><i class="fas fa-quote-left"></i> Thank you for sticking with us all the time and support our hiring. We appreciate the time and effort you have invested to help us achieve great results. Your support and actions are helping us achieve an excellent hiring process. We look forward to such a great partnership for years to come.<i class="fas fa-quote-right"></i></h5>   <br> 
                            <h6>Maya Kobori</h6>
                                    <span class="guest-rev"><a href="#">Talent Acquisition Manager, Teleperformance</a></span>
                             <!-- <div class="texti-name">
                             <div class="col-md-12 text-center readmorebtn"><a class="btn-dark wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.5s" href="/employer-speek-expert" data-text="Learn More"> <button class="btn-change6">Speak to an Expert</button>
                                    </a></div>
                                </div>  -->
                            </div>
                        </div>

                         <!-- End single item -->
                         <div class="single-testi1">
                            
                            <div class="testi-text">
                            <h5><i class="fas fa-quote-left"></i> We have been using IDC Technologies' expatriates hiring service for more than a year now & we have developed a great partnership with them since then. We value and are extremely happy with their full dedication towards our hiring needs and supportive nature for ad-hoc requirements.<i class="fas fa-quote-right"></i></h5>    <br>
                            <h6>Nelly Young</h6>
                                    <span class="guest-rev"><a href="#">Assistant Manager - Talent Acquisition, Startek</a></span>
                             <!-- <div class="texti-name">
                             <div class="col-md-12 text-center readmorebtn"><a class="btn-dark wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.5s" href="/employer-speek-expert" data-text="Learn More"> <button class="btn-change6">Speak to an Expert</button>
                                    </a></div>
                                </div>  -->
                            </div>
                        </div>
						<!-- End single item -->
            <div class="single-testi1">
                            
                            <div class="testi-text">
                            <h5><i class="fas fa-quote-left"></i> The team at IDC Technologies is always available, extremely knowledgeable, and comes with a tremendous "can-do" attitude. Their guidance and support are invaluable for critical staffing needs. Greatest appreciation to IDC Technologies and the team for the outstanding job they do for us. Highly recommended<i class="fas fa-quote-right"></i></h5>   <br> 
                            <h6>Savita Verma</h6>
                                    <span class="guest-rev"><a href="#">ATalent Acquisition Lead, Incture Technologies</a></span>
                             <!-- <div class="texti-name">
                             <div class="col-md-12 text-center readmorebtn"><a class="btn-dark wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.5s" href="/employer-speek-expert" data-text="Learn More"> <button class="btn-change6">Speak to an Expert</button>
                                    </a></div>
                                </div>  -->
                            </div>
                        </div>

                        <!-- End single item -->
            <div class="single-testi1">
                            
                            <div class="testi-text">
                            <h5><i class="fas fa-quote-left"></i> IDC Technologies have a detailed understanding of the market and provides the right support throughout the recruitment process. I would certainly recommend IDC Technologies to any IT company that is looking to fulfil their recruitment demands – they have a proven track record and is a delight to work with!<i class="fas fa-quote-right"></i></h5>    <br>
                            <h6>Taskeen Sahar</h6>
                                    <span class="guest-rev"><a href="#">Manager - Recruitment, Hexaware Technologies Ltd</a></span>
                             <!-- <div class="texti-name">
                             <div class="col-md-12 text-center readmorebtn"><a class="btn-dark wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.5s" href="/employer-speek-expert" data-text="Learn More"> <button class="btn-change6">Speak to an Expert</button>
                                    </a></div>
                                </div>  -->
                            </div>
                        </div>

                        <div class="single-testi1">
                            
                            <div class="testi-text">
                            <h5><i class="fas fa-quote-left"></i> The word partner truly applies to IDC Technologies. They are professional, responsive, flexible and understands how to match requirements to our cultural fit. They have surprised me with the breadth of disciplines they cover, the speed with which they can find talent, while also have the patience and persistence to dig in on the hard searches. I would highly recommend them to anyone looking to hire great talent.<i class="fas fa-quote-right"></i></h5>  <br>  
                            <h6>Chintan Raval</h6>
                                    <span class="guest-rev"><a href="#">Vendor Operations Manager, JVT Advisors</a></span>
                             <!-- <div class="texti-name">
                             <div class="col-md-12 text-center readmorebtn"><a class="btn-dark wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.5s" href="/employer-speek-expert" data-text="Learn More"> <button class="btn-change6">Speak to an Expert</button>
                                    </a></div>
                                </div>  -->
                            </div>
                        </div>
						
                        <!--<div class="single-testi">-->
                        
					</div>
				</div>
			</div>
		</div>
        <!-- <div class="col-md-12 text-center readmorebtn"><a class="btn-dark wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.5s" href="Testimonials" data-text="Learn More"> <button class="btn-change6">Read More</button>
          </a></div> -->
	</div>

</div>
<div class="anti-01-holder">
    <div class="anti-01"></div>
</div>
<!--Testimonials Area End-->


<!-- about-area start -->
<div class="about-area bg-color area-padding" style="margin-bottom:50px;">
    <div class="container">
        <div class="row">
            
            <!-- column end -->
            <div class="col-md-6 col-sm-6 col-xs-12" style="border:none;height:400px;background-color:#e59c6538;">
              <div class="about-details" style="padding:20px;margin-top:100px;">
                    <center><h3>Request Talent</h3></center>
                    <p align="center">We make hiring easy. We help you with the right talent as per your requirement within the right time frame.</p>
                    <div class="col-md-12 text-center readmorebtn" style="margin-left:120px;"><a class="btn-dark wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.5s" href="/employer-job-requirement" data-text="Learn More"> <button class="btn-change6">Submit a Job Requirement</button>
                                    </a></div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12" style="border:none;height:400px;">
              <div class="about-details" style="padding:20px;margin-top:100px;">
                    <center><h3>Need Help?</h3></center>
                    <p align="center">Let us know your concerns and one of our staffing experts will contact you soon.</p>
                    <div class="col-md-12 text-center readmorebtn" style="margin-left:150px;"><a class="btn-dark wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.5s" href="/employer-speek-expert" data-text="Learn More"> <button class="btn-change6">Speak to an Expert</button>
                                    </a></div>
              </div>
            </div>
            
            </div>
            <!-- column end -->
        </div>
    </div>
</div>
<!-- about-area end -->

@endsection
