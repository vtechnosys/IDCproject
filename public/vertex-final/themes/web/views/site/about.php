<?php $path=Yii::app()->theme->baseUrl; ?>









		<!--header-->
		<script src="<?php echo $path ; ?>/js/bootstrap.js"></script>
		<!--about-->
		<div class="content">
		 <div class="service-title">
				  <!--  <h2>services</h2> -->
				   <h6>Just a few words</h6>
				</div>
			<div class="about-section">
			<div class="container">
			  <div class="about-info">
				<!-- <h2>about us</h2>
				<h3>Just a few words</h3> -->
				<!-- <img src="images/p8.jpg" class="img-responsive" alt="/"> -->
				<p>Vertex Technosys is a software based company in India, providing web design, graphic design, web development, software development, mobile development, seo services, e-commerce solutions, custom application development, product development & web promotions.</p>
				<p>
				With an excellent blend of solid business domain understanding, technical expertise multiplied by deep knowledge of latest industry trends and technical innovations - Vertex Technosys provides a quality driven approach towards software development and provides end-to-end customized solutions catering to the requirements.
				</p>
				<p>
				Vertex Technosys has delivered the services of highly skilled professionals to our clients. Our experience, teamwork and processes are what separate us from the crowd and let us deliver success. We ask and answer all important questions and provide all services to get jobs done right; right on time, right the first time!
				</p>
				</div>
			</div>
		</div>
		<?php  $rslt=OurClient::model()->findAll();   ?> 
			<!-- Clients -->
			<div class="clients">
				<div class="container">
				<h3>Our Clients</h3>
				<div class="border"></div>
				<ul id="flexiselDemo3">
				
				<?php foreach( $rslt as $sk) { ?>
				<li><a href="#." target="blank"><img src="<?php echo Yii::app()->baseUrl.'/images/portfolio/'.$sk['image'];?>" /></a></li>
				<?php } ?>
				<!--<li><a href="#."><img src="<?php// echo $path ; ?>/images/portfolio/chandra.png" /></a></li>
				<li><a href="#."><img src="<?php //echo $path ; ?>/images/portfolio/bsp.png" /></a></li>
				<li><a href="#."><img src="<?php //echo $path ; ?>/images/portfolio/neptune-shaadi.png" /></a></li> 
                <li><a href="#."><img src="<?php// echo $path ; ?>/images/portfolio/nbc.png" /></a></li>
				<li><a href="#."><img src="<?php //echo $path ; ?>/images/portfolio/gayatri-infotech.png" /></a></li> 				
				<li><a href="#."><img src="<?php //echo $path ; ?>/images/portfolio/rme.png" /></a></li>-->
			   </ul>  
			   <div class="clearout"></div>
				</div>
			</div>
			<!-- Clients -->
			
			</div>
			
			