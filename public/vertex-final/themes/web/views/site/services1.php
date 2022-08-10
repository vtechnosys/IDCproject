	<?php $path=Yii::app()->theme->baseUrl; ?>
		<!--header-->
		<script src="<?php echo $path ; ?>/js/bootstrap.js"></script>
		<!--services-->
		<div class="content">
			<!--services-->
		<div class="services service-bg">
			    <div class="service-title">
				  <!--  <h2>services</h2> -->
				   <h6>The thing we love to do,for you!</h6>
				</div>
					<div class="container">
						
						<div class="services-grids">
							<!-- <h6>Software Development</h6> -->							
						<div class="clearfix"></div>
					</div>
					<div class="services-info">
					
					
					    <div class="service1 col-md-6">
						   <div class="service-info col-md-11">
						   <img src="images/services/web-design.png">
						      <!-- <span class="glyphicon glyphicon-user"></span> -->
						      <h4>Web Development</h4>
						      <p>
							  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries
							  </p>
						   </div>
						</div>
						
						
						
						
						
						
						
						
					  <div class="graphic col-md-6">
						   <div class="service-info col-md-11">
						   <img src="images/services/graphic-design.png">
						      
						      <h4>Graphic Design</h4>
						      <p>
							  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries
							  </p>
						   </div>
						</div>
						<div class="service1 col-md-6">
						   <div class="service-info col-md-11">
						   <img src="images/services/search1.png">
						     
						      <h4>Search Engine Optimization</h4>
						      <p>
							  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries
							  </p>
						   </div>
						</div>
						<div class="graphic col-md-6">
						   <div class="service-info col-md-11">
						      
							  <img src="images/services/custom-app.png">
						      <h4>Custom Application</h4>
						      <p>
							  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries
							  </p>
						   </div>
						</div>
						
						
						
						
					</div>
				</div>
			</div>
			<!--services-->
			<!-- Clients -->
			<div class="clients">
				<div class="container">
				<h3>Our Clients</h3>
				
				<?php  $rslt=OurClient::model()->findAll();   ?> 
				<div class="border"></div>
				<ul id="flexiselDemo3">
				<?php foreach( $rslt as $sk) { ?>
				<li><a href="<?php echo $sk['link']; ?>"><img src="<?php echo $path ; ?>/images/portfolio/<?php echo $sk['image']; ?>" /></a></li>
				<?php } ?>
				
				<!--<li><a href="#."><img src="<?php echo $path ; ?>/images/portfolio/chandra.png" /></a></li>
				<li><a href="#."><img src="<?php echo $path ; ?>/images/portfolio/bsp.png" /></a></li>
				<li><a href="#."><img src="<?php echo $path ; ?>/images/portfolio/neptune-shaadi.png" /></a></li> 
                <li><a href="#."><img src="<?php echo $path ; ?>/images/portfolio/nbc.png" /></a></li>
				<li><a href="#."><img src="<?php echo $path ; ?>/images/portfolio/gayatri-infotech.png" /></a></li> 				
				<li><a href="#."><img src="<?php echo $path ; ?>/images/portfolio/rme.png" /></a></li>-->
			   </ul>  
			   <div class="clearout"></div>
				</div>
			</div>
			<!-- Clients -->
				<!--indicate-->
				<!-- <div class="indicate">
					<div class="container">
						<div class="indicate-grids">
							<div class="col-md-3 indicate-grid">
								<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
								<p>Flat No.1,Gurudatta Apartment,<br>
                                   Daji Peth,Solapur-05</p>
							</div>
							<div class="col-md-3 indicate-grid">
								<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
								<p>Mobile no :  +91 9823140574<br>+91 9890583909</p>
							</div>
							<div class="col-md-3 indicate-grid">
								<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
								<p>E-mail : <a href="mailto:info@vertextechnosys.com"> info@vertextechnosys.com</a>
								<a href="mailto:vertextechnosysinfo@gmail.com">vertextechnosysinfo@gmail.com</a>
								</p>
							</div>
							<div class="col-md-3 indicate-grid">
								<span class="glyphicon glyphicon-send" aria-hidden="true"></span>
								<p>FAX :  +1 800 889 9898</p>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div> -->
			<!--indicate-->
			</div>