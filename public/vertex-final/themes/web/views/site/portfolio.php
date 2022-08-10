	<?php $path=Yii::app()->theme->baseUrl; ?>

	
	<!--header-->
		<script src="<?php echo $path ; ?>/js/bootstrap.js"></script>
			<!--gallery-->
			<div class="content">
			<div class="service-title">
				  <!--  <h2>services</h2> -->
				   <h6>Explore Our Work</h6>
				</div>
			<div class="gallery">
			<div class="container">
		<!-- <h2>Portfolio</h2>
		<p>Explore Our Work</p> -->
		<div class="products-bottom">
		<!-- Gallery -->
		
		<?php $rslt=Portfolio::model()->findAll(); ?>
		
		  <?php  foreach( $rslt as $sk )
			{
            ?>
			<div class="item item-type-move col-md-3">
			<a class="item-hover" href="<?php echo $sk['link']?>" target="_blank">
				<div class="item-info">
					<div class="headline">
						<?php echo $sk['headline']; ?>
						<div class="line"></div>
					</div>
					<!--<div class="date"><?php //echo $sk['date']; ?></div>-->							
				</div>
				<div class="mask"></div>
			</a>
			<div class="item-img"><img src="images/portfolio/<?php echo $sk['images']; ?>" alt="" /></div>
		</div>	
		
		<?php } ?>
		
		
		
		
		
		
		
		
		
		
		
	<!--	<div class="item item-type-move col-md-3">
			<a class="item-hover" href="http://dribbble.com/shots/710530-Living-Stream" target="_blank">
				<div class="item-info">
					<div class="headline">
						Hand Lettering Process
						<div class="line"></div>
					</div>
					<div class="date">February 29, 2014</div>							
				</div>
				<div class="mask"></div>
			</a>
			<div class="item-img"><img src="<?php //echo $path ; ?>/images/portfolio/shrimarketing.png" alt="" /></div>
		</div>	
		
		<div class="item item-type-move col-md-3">
			<a class="item-hover" href="#." target="_blank">
				<div class="item-info">
					<div class="headline">
						Living Stream
						<div class="line"></div>
					</div>
					<div class="date">February 29, 2014</div>							
				</div>
				<div class="mask"></div>
			</a>
			<div class="item-img"><img src="<?php //echo $path ; ?>/images/portfolio/tantragna.png" alt="" /></div>
		</div>
<div class="item item-type-move col-md-3">
			<a class="item-hover" href="http://dribbble.com/shots/1313878-Hand-Lettering-Process" target="_blank">
				<div class="item-info">
					<div class="headline">
						Hand Lettering Process
						<div class="line"></div>
					</div>
					<div class="date">February 29, 2014</div>							
				</div>
				<div class="mask"></div>
			</a>
			<div class="item-img"><img src="<?php// echo $path ; ?>/images/portfolio/bsp.png" alt="" /></div>
		</div>	
		
		<div class="item item-type-move col-md-3">
			<a class="item-hover" href="http://dribbble.com/shots/710530-Living-Stream" target="_blank">
				<div class="item-info">
					<div class="headline">
						Hand Lettering Process
						<div class="line"></div>
					</div>
					<div class="date">February 29, 2014</div>							
				</div>
				<div class="mask"></div>
			</a>
			<div class="item-img"><img src="<?php //echo $path ; ?>/images/portfolio/gayatri-infotech.png" alt="" /></div>
		</div>	
		
		<div class="item item-type-move col-md-3">
			<a class="item-hover" href="#." target="_blank">
				<div class="item-info">
					<div class="headline">
						Living Stream
						<div class="line"></div>
					</div>
					<div class="date">February 29, 2014</div>							
				</div>
				<div class="mask"></div>
			</a>
			<div class="item-img"><img src="<?php //echo $path ; ?>/images/portfolio/nbc.png" alt="" /></div>
		</div>	
        <div class="item item-type-move col-md-3">
			<a class="item-hover" href="#." target="_blank">
				<div class="item-info">
					<div class="headline">
						Living Stream
						<div class="line"></div>
					</div>
					<div class="date">February 29, 2014</div>							
				</div>
				<div class="mask"></div>
			</a>
			<div class="item-img"><img src="<?php //echo $path ; ?>/images/portfolio/rme.png" alt="" /></div>
		</div>	-->






		
		<!-- Gallery -->	
			<div class="clearfix"> </div>	
		</div>
	</div>
	</div>
	<!--script-->
			<script type="text/javascript" src="<?php echo $path ; ?>/js/nivo-lightbox.min.js"></script>
				<script type="text/javascript">
				$(document).ready(function(){
				    $('#nivo-lightbox-demo a').nivoLightbox({ effect: 'fade' });
				});
				</script>

			<!---->

			<!--gallery-->
				
			</div>
			<!--footer-->
			<!--indicate-->
				 <div class="indicate">
					<div class="container">
						<div class="indicate-grids">
							<div class="col-sm-4 col-md-4 indicate-grid">
								<span class="glyphicon span1 glyphicon-map-marker" aria-hidden="true"></span>
								<!--<p>Flat No.1,Gurudatta Apartment,<br>
                                   Daji Peth,Solapur-05</p>-->
                                   <p>
                                   	9/4, Shri Markendaya Yantramag Dharak Society,<br>
                                   	Near New WIT College,<br>
                                   	<!-- Next to Upahar Bakery lane,<br>  -->
                                   	SOLAPUR - 413006
                                   </p>
							</div>
							<div class="col-sm-4 col-md-4 indicate-grid">
								<span class="glyphicon span2 glyphicon-earphone" aria-hidden="true"></span>
								<p>Mobile no :  +91 9823140574<br>+91 9890583909</p>
							</div>
							<div class="col-sm-4 col-md-4 indicate-grid">
								<span class="glyphicon span3 glyphicon-envelope" aria-hidden="true"></span>
								<p>E-mail : <a href="mailto:info@vertextechnosys.com"> info@vertextechnosys.com</a>
								<a href="mailto:vertextechnosysinfo@gmail.com">vertextechnosysinfo@gmail.com</a>
								</p>
							</div>
							<!--<div class="col-md-3 indicate-grid">
								<span class="glyphicon glyphicon-send" aria-hidden="true"></span>
								<p>FAX :  +1 800 889 9898</p>
							</div>-->
							<div class="clearfix"></div>
						</div>
					</div>
				</div> 
				
				
				
				
				