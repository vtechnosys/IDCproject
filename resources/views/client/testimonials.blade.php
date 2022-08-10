@extends('client/theme/main')
@section('content')

<!-- Start breadcumb Area -->
<section class="page-title o-hidden pos-r md-text-center" data-bg-color="#fbf3ed" style="background-color: rgb(251, 243, 237);">
   <canvas id="confetti" width="1366" height="654"></canvas>
  <div class="container">
    <div class="row align-items-center">
      <div class="get-in-touch col-md-6 col-sm-12 col-xs-12 innerhead">
        <h1 class="title"><span>T</span>estimonials</h1>
        <p>Let's work together</p>
      </div>
      <div class="col-lg-6 col-md-12 text-right md-mt-3">
        <nav aria-label="breadcrumb" class="page-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="Home">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Testimonials</li>
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
        <div class="row">
                    <div class="Reviews-content">
            <!-- start testimonial carousel -->
            <div class="review-inner">
                <!-- Start single item -->
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="single-testi">
                    <div class="testi-img ">
                        <img src="{{asset('client/images/about/teamimg.png')}}" alt="clientimg">
                    </div>
                    <div class="testi-text">
                        <p>After a few years I was expanding my business and started exporting and came to know that my Textile firm needs internet presence and came to know about Vertex.</p>
                        <div class="texti-name">
                          <h4>M.Kodam</h4>
                            <span class="guest-rev"><a href="#.">Director,Vishaka Industries</a></span>
                        </div>
                    </div>
                </div>
              </div>
              <!-- End single item -->
              <!-- Start single item -->
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="single-testi">
                    <div class="testi-img ">
                        <img src="{{asset('client/images/about/teamimg.png')}}" alt="clientimg">
                    </div>
                    <div class="testi-text">
                        <p>As a research team our members decided to start an online publishing platform for creative budding researchers who put their efforts in writing authentic market reports & as a Research journal team we want to help them get their recognition in the Global market.</p>
                        <div class="texti-name">
                          <h4>Aviansh Adam</h4>
                            <span class="guest-rev"><a href="#.">CEO, Pro-Market Solutions</a></span>
                        </div>
                    </div>
                </div>
              </div>
              <!-- End single item -->
              <!-- Start single item -->
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="single-testi">
                    <div class="testi-img ">
                        <img src="client/images/about/teamimg.png" alt="clientimg">
                    </div>
                    <div class="testi-text">
                        <p>We help agencies to define their new business objectives and then create the road map to get them there by devising a business .</p>
                        <div class="texti-name">
                          <h4>Client Name</h4>
                            <span class="guest-rev"><a href="#.">Designation</a></span>
                        </div>
                    </div>
                </div>
              </div>
              <!-- End single item -->
              <!-- Start single item -->
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="single-testi">
                    <div class="testi-img ">
                        <img src="{{asset('client/images/about/teamimg.png')}}" alt="clientimg">
                    </div>
                    <div class="testi-text">
                        <p>We help agencies to define their new business objectives and then create the road map to get them there by devising a business .</p>
                        <div class="texti-name">
                          <h4>Client Name</h4>
                            <span class="guest-rev"><a href="#.">Designation</a></span>
                        </div>
                    </div>
                </div>
              </div>
              <!-- End single item -->
              <!-- Start single item -->
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="single-testi">
                    <div class="testi-img ">
                        <img src="{{asset('client/images/about/teamimg.png')}}" alt="clientimg">
                    </div>
                    <div class="testi-text">
                        <p>We help agencies to define their new business objectives and then create the road map to get them there by devising a business .</p>
                        <div class="texti-name">
                          <h4>Client Name</h4>
                            <span class="guest-rev"><a href="#.">Designation</a></span>
                        </div>
                    </div>
                </div>
              </div>
              <!-- End single item -->
              <!-- Start single item -->
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="single-testi">
                    <div class="testi-img ">
                        <img src="{{asset('client/images/about/teamimg.png')}}" alt="clientimg">
                    </div>
                    <div class="testi-text">
                        <p>We help agencies to define their new business objectives and then create the road map to get them there by devising a business .</p>
                        <div class="texti-name">
                          <h4>Client Name</h4>
                            <span class="guest-rev"><a href="#.">Designation</a></span>
                        </div>
                    </div>
                </div>
              </div>
              <!-- End single item -->
            </div>
          </div>
        </div>
        <div class="blog-pagination">
                 <ul class="pagination">
                   <li><a href="#.">Prev</a></li>
                   <li class="active"><a href="#">1</a></li>
                   <li><a href="#.">2</a></li>
                   <li><a href="#.">3</a></li>
                   <li><a href="#.">Next</a></li>
                 </ul>
              </div>
    </div>
</div>
<!-- End Contact Area -->

@endsection
