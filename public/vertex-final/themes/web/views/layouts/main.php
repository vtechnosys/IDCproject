<?php $path=Yii::app()->theme->baseUrl; ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Vertex Technosys</title>
<link href="<?php echo $path ; ?>/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="<?php echo $path ; ?>/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo $path ; ?>/css/owl.carousel.css" rel="stylesheet">

<link rel="shortcut icon" type="image/x-icon" href="<?php echo $path ; ?>/images/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Inward Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="<?php echo $path ; ?>/js/jquery-1.11.1.min.js"></script>
<!--startsmothscrolling-->
<script type="text/javascript" src="<?php echo $path ; ?>/js/move-top.js"></script>
<script type="text/javascript" src="<?php echo $path ; ?>/js/easing.js"></script>
 <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
<!--endsmothscrolling-->

<!-- Google fonts -->
<link href='https://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Chivo:400,900' rel='stylesheet' type='text/css'>
<!-- Google fonts -->
 
<!-- News Ticker -->
<script src="<?php echo $path ; ?>/js/news/jquery.easy-ticker.js"></script> 
<!-- News Ticker --> 


<!-- Animation -->
<link href="<?php echo $path ; ?>/css/animation/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
<script src="<?php echo $path ; ?>/js/animation/animation.js" type="text/javascript" charset="UTF-8"></script>
<!-- Animation -->

<!-- Carousel -->
<link href="<?php echo $path ; ?>/css/carousel/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $path ; ?>/js/carousel/jquery.flexisel.js"></script>
<!-- Carousel -->

</head>
<body>
		<!--header-->
	
	<?php 
	      $temp=NULL;
			if($this->action->id=="index")
			{
			 $temp="header";		
			}
			else
			{
				$temp="header head-top";
			}	

			?>
				<div class="<?php echo $temp; ?>">
				<div class="header-top">
				<div class="container">
				<div class="header-top1">
				<div class="logo-img col-xs-12 col-sm-3 col-md-6">
				
				<a href="<?php echo Yii::app()->createUrl('//site/index'); ?>"><img src="<?php echo $path ; ?>/images/logo.png"></a>
				
				</div>
				<nav class="navbar navbar-default col-xs-12 col-sm-9 col-md-6">
			  <div class="container-fluid">
				<!--Brand and toggle get grouped for better mobile display-->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
					</div>
       
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					  <ul class="nav navbar-nav">
						<li class="<?php if($this->action->id=="index"){ echo "active"; } ?>"><a href="<?php echo Yii::app()->createUrl('//site/index'); ?>">Home<span class="sr-only">(current)</span></a></li>
						<li class="<?php if($this->action->id=="about"){ echo "active"; } ?>"><a href="<?php echo Yii::app()->createUrl('//site/about'); ?>" >About</a></li>
						<li class="<?php if($this->action->id=="services"){ echo "active"; } ?>"><a href="<?php echo Yii::app()->createUrl('//site/services'); ?>">Services</a></li>
						<li class="<?php if($this->action->id=="portfolio"){ echo "active"; } ?>"><a href="<?php echo Yii::app()->createUrl('//site/portfolio'); ?>">Portfolio</a></li>
						<li class="<?php if($this->action->id=="careers"){ echo "active"; } ?>"><a href="<?php echo Yii::app()->createUrl('//site/careers'); ?>">Careers</a></li>
						<li class="<?php if($this->action->id=="contact"){ echo "active"; } ?>"><a href="<?php echo Yii::app()->createUrl('//site/contact'); ?>">Contact</a></li>
						
						</ul>
						
					</div><!--navbar collapse-->
             </div><!--container fluid-->
			</nav>
				<div class="clearfix"></div>
				</div>
			</div>
			
			<?php 
			

			if($this->action->id=="index")
			{ 

			?>
			
			<div class="banner-center">
				<div class="container">
					<div class="logo">
						<h1><a href="index.html">Excellence At All Levels</a></h1>
						 <!-- News Ticker -->
							<div class="demo3">
								<ul>
									<li>Present your beautiful app with Vertex</li>
									<li>Design is thinking made visible</li>
									<li>Our passion for dynamic and gorgeous deisgn</li>
									<!-- <li>JS/jQuery - animated random name picker</li> -->
								</ul>
							</div>
						<!-- News Ticker -->
					</div>
					<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fringilla arcu eget venenatis imperdiet. Duis volutpat rhoncus fringilla. Nam pulvinar maximus risus, sed aliquam urna imperdiet quis.</p> -->
					<!-- <div class="button">
						<a href="services.html" class="button1 hvr-rectangle-in">our work</a>
						<a href="mail.html" class="button2 hvr-rectangle-in">contact us</a>
					</div> -->
				</div>
				<!-- Top down arrow -->
				<!--<div id="wave1"></div>-->
				<a href="#bottom" class="toBottom" id="top"><span class="glyphicon glyphicon-chevron-down"></span></a>
				<!--<a name="toBottom"></a>-->
				
				
				<!-- Top down arrow -->
			</div>
			
			<?php 
			} 
		if($this->action->id=="about")
			{	
			?>
			
			
			
				<div class="banner-center banner-top">
		         <div class="container">
			   <div class="logo">
				<h1><a href="<?php echo Yii::app()->createUrl('//site/about'); ?>">About Us</a></h1>
			   </div>
		       </div>
	           </div>
			
			<?php } ?>
			
			<?php if($this->action->id=="services")
			{
				
			?>
				<div class="banner-center banner-top service-top">
				<div class="container">
				<div class="logo">
					<h1><a href="<?php echo Yii::app()->createUrl('//site/services'); ?>">Services</a></h1>
				</div>
			</div>
			</div>
			
			
			<?php }	?>
			
			
			
			<?php if($this->action->id=="portfolio")
			{
		    ?>	
			
			<div class="banner-center banner-top">
				<div class="container">
					<div class="logo">
						<h1><a href="<?php echo Yii::app()->createUrl('//site/portfolio'); ?>">Portfolio</a></h1>
					</div>
				</div>
			</div>
			
			<?php  }	?>
			
			
			
				<?php if($this->action->id=="careers")
			{
		    ?>	
			<div class="banner-center banner-top">
				<div class="container">
					<div class="logo">
						<h1><a href="<?php echo Yii::app()->createUrl('//site/careers'); ?>">Careers</a></h1>
					</div>
				</div>
			</div>
			
			<?php  }	?>
			
			
			
				<?php if($this->action->id=="contact")
			{
		    ?>	
			
			
			<div class="banner-center banner-top">
				<div class="container">
					<div class="logo">
						<h1><a href="<?php echo Yii::app()->createUrl('//site/contact'); ?>">Contact Us</a></h1>
					</div>
				</div>
			</div>
			<?php  }	?>
		
			
			</div><!-- Container close -->
		</div>
		
	
	<?php echo $content	; ?>
	
		
		<!--footer-->
		<div class="footer-section">
						<div class="container">
							<div class="footer-top">
							
							<div class="social-icons">
							<a class="bounceInDown" href="https://www.facebook.com/VertexTechnosys?_rdr=p" target="_blank">
							
							<img src="<?php echo $path ; ?>/images/social/facebook32.png">
							</a>
							<a class="bounceInDown" href="https://in.linkedin.com/in/vertextechnosys" target="_blank">
							
							<img src="<?php echo $path ; ?>/images/social/twitter32.png">
							</a><a class="bounceInDown" href="https://twitter.com/VertexTechnoSys" target="_blank">
							
							<img src="<?php echo $path ; ?>/images/social/linkedin32.png">
							</a>
							
						   </div>
						<p>Copyright &copy; 2015. All rights reserved | Design and Developed by <a href="http://www.vertextechnosys.com">Vertex Technosys</a></p>
									</div>
							<script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
				</div>
			</div>
			
			
</body>

<!-- News ticker -->
<script>
$(function(){
	$('.demo3').easyTicker({
		visible: 1,
		interval: 3000
	});
});
</script>
<!-- News ticker -->


<!-- Top down arrow -->
    <!--<script type="text/javascript">
       $('.toTop ').click(function(){
          $("html, body").animate({ scrollTop: 100 }, 900);
          return false;
       });
       $('.toBottom').click(function(){
          $('html,body').animate({scrollTop: $(document).height()}, 900);
          return false;
       });
    </script>
    -->
    <script type="text/javascript"> 
    $('a[href^="#"]').on('click', function(event) {

    var target = $( $(this).attr('href') );

    if( target.length ) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: target.offset().top
        }, 500);
    }

});
    </script>
    
<!-- Top down arrow-->

<!-- Carousel -->

<script type="text/javascript">

$(window).load(function() {
   
    $("#flexiselDemo3").flexisel({
        visibleItems: 5,
        animationSpeed: 1000,
        autoPlay: true,
        autoPlaySpeed: 3000,            
        pauseOnHover: true,
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: { 
            portrait: { 
                changePoint:480,
                visibleItems: 1
            }, 
            landscape: { 
                changePoint:640,
                visibleItems: 2
            },
            tablet: { 
                changePoint:768,
                visibleItems: 3
            }
        }
    });

});
</script>

<script type="text/javascript">

$(window).load(function() {
   
    $("#flexiselDemo4").flexisel({
        visibleItems: 4,
        animationSpeed: 1000,
        autoPlay: true,
        autoPlaySpeed: 2000,            
        pauseOnHover: true,
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: { 
            portrait: { 
                changePoint:480,
                visibleItems: 1
            }, 
            landscape: { 
                changePoint:640,
                visibleItems: 2
            },
            tablet: { 
                changePoint:768,
                visibleItems: 3
            }
        }
    });

});
</script>

<!-- Carousel -->

</html>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
