<?php $path=Yii::app()->theme->baseUrl; ?>


		<!--header-->
		<script src="<?php echo $path ; ?>/js/bootstrap.js"></script>
		<!--services-->
		<div id="bottom" class="content">
		   
			<div class="service">
				<div class="container">
					<h2>Best Services</h2>
					<div class="border">
					</div>
					<p>Great design is about more than style,it’s about being yourself</p>
					<div class="service-grids">
						<div class="col-xs-12 col-md-3 service-grid">
						<div class="bb"></div>
						<div class="portfolio">
							 <div class="">
								 <div class="thumbnail1">
									<div class="hover02 column">						
									  <a href="#.">
									  <figure><img src="images/services/web.png" alt=""></figure>
									  </a>
									</div>
									  <div class="caption">
										<a href="#."><h3>Web Development</h3>
										<p>Creating an effective web design is too easy and we will provide a fabulous design. </p>
										</a>
									  </div>
								</div>
							</div>
						</div>
						</div>
						<div class="col-xs-12 col-md-3 service-grid">
						<div class="bb"></div>
						<div class="portfolio">
							 <div class="">
								 <div class="thumbnail1">
									<div class="hover02 column">						
									  <a href="#.">
									  <figure><img src="images/services/graphic.png" alt=""></figure>
									  </a>
									</div>
									  <div class="caption">
										<a href="#."><h3>Graphic Design</h3>
										<p>We ensure that all your graphic designing needs are met to satisfaction.</p>
										</a>
									  </div>
								</div>
							</div>
						</div>
						</div>
						<div class="col-xs-12 col-md-3 service-grid">
						<div class="bb"></div>
						<div class="portfolio">
							 <div class="">
								 <div class="thumbnail1">
									<div class="hover02 column">						
									  <a href="#.">
									  <figure><img src="images/services/search.png" alt=""></figure>
									  </a>
									</div>
									  <div class="caption">
										<a href="#."><h3>SEO</h3>
										<p>We have done extensive research in Search Engine Optimation (SEO) techniques.</p>
										</a>
									  </div>
								</div>
							</div>
						</div>
						</div>
						<div class="col-xs-12 col-md-3 service-grid">
						<div class="bb"></div>
						<div class="portfolio">
							 <div class="">
								 <div class="thumbnail1">
									<div class="hover02 column">						
									  <a href="#.">
									  <figure><img src="images/services/code.png" alt=""></figure>
									  </a>
									</div>
									  <div class="caption">
										<a href="#."><h3>Custom Application</h3>
										<p>We develop and furnish customized softwares as per needs, features and requirements.</p>
										</a>
									  </div>
								</div>
							</div>
						</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
				
			<div class="testimonials">
				<div class="container">
				<h3>Our Technology</h3>
				<div class="border"></div>
				<ul id="flexiselDemo3">
				<?php foreach($data as $d) { ?>
				
				<li><a href="#." target="_blank"><img src="images/our_technology_logo/<?php echo $d['technology_logo']; ?> " /></a></li>
				
				<?php } ?>
							
			   </ul>  
			   <div class="clearout"></div>
				</div>
			</div>
			
			
			
			<!--testimonials-->
			
			<!-- Latest Projects -->
			
			
			<?php  $rslt=LatestProject::model()->findAll(); ?>
			
			<div class="latest-project">
				<div class="container">
				<h3>Latest Projects</h3>
				<p>Take a Look</p>
				<div class="border"></div>
				<ul id="flexiselDemo4" class="projects">
				<?php foreach($rslt as $sk) { ?>
				<li><a href="<?php echo $sk['link']; ?>" target="blank"><img src="images/projects/<?php echo $sk['image']; ?>" />
				<h6><?php echo $sk['title']; ?></h6>
				</a></li>

				<?php } ?>
			   </ul>  
			   <div class="clearout"></div>
				</div>
			</div>
			<!-- Latest Projects -->
		
				<!--indicate-->
	            <div class="indicate">
					<div class="container">
						<div class="indicate-grids">
							<div class="col-xs-12 col-sm-4 col-md-4 indicate-grid">
								<span class="glyphicon span1 glyphicon-map-marker" aria-hidden="true"></span>
								<!-- <p>Flat No.1,Gurudatta Apartment,<br>
                                   Daji Peth,Solapur-05</p> -->
                                   <p>
                                   	9/4, Shri Markendaya Yantramag Dharak Society,<br>
                                   	Near New WIT College,<br>
                                   	<!-- Next to Upahar Bakery lane,<br>  -->
                                   	SOLAPUR - 413006
                                   </p>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4 indicate-grid">
								<span class="glyphicon span2 glyphicon-earphone" aria-hidden="true"></span>
								<p>Mobile no :  +91 9823140574<br>&nbsp;&nbsp;&nbsp;+91 9890583909</p>
							</div>
							
							
							<div class="col-xs-12 col-sm-4 col-md-4 indicate-grid">
								<span class="glyphicon span3 glyphicon-envelope" aria-hidden="true"></span>
								<p>E-mail : <a href="mailto:info@vertextechnosys.com"> info@vertextechnosys.com</a>
								<a href="mailto:vertextechnosysinfo@gmail.com">vertextechnosysinfo@gmail.com</a>
								</p>
							</div>
							<!--<div class="col-xs-12 col-sm-3 col-md-3 indicate-grid">
								<span class="glyphicon glyphicon-send" aria-hidden="true"></span>
								<p>FAX :  +1 800 889 9898</p>
							</div>-->
							<div class="clearfix"></div>
						</div>
					</div>
				</div> 
			<!--indicate-->
			</div>
				

				
				
				
				
				
				
				
				
				
				
				
				
			