<?php
$baseUrl=Yii::app()->theme->baseUrl;
?>
<link href="<?php echo $baseUrl ; ?>/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="<?php echo $baseUrl ; ?>/css/style.css" rel="stylesheet" type="text/css" media="all" />
<script src="<?php echo $baseUrl; ?>/js/bootstrap.js"></script>
		<!--gallery-->
			<div class="content">
			<div class="service-title">
				  <!--  <h2>services</h2> -->
				   <h6>Keep in touch</h6>
				</div>
			<div class="single">
	 <div class="container">
		
		 </div>
		 </div>
		  <div class="content-form">
			<div class="container">
			<div class="contact-left col-sm-8 col-md-8">
			 <?php $form=$this->beginWidget('CActiveForm', array(
						'id'=>'contact-form',
						'enableClientValidation'=>true,
						'clientOptions'=>array(
						'validateOnSubmit'=>true,
						),
					)); ?>
				<h3>Leave a comment</h3>
					<form>
					
					<?php echo $form->textField($model,'name',array('class'=>'col-xs-12 col-md-3','placeholder'=>'Name','class'=>'text')); ?>
		            <?php echo $form->error($model,'name'); ?>

					
		<?php echo $form->textField($model,'email',array('class'=>'col-xs-12 col-md-3','placeholder'=>'Email Address','class'=>'text')); ?>
		<?php echo $form->error($model,'email'); ?>
		
					
		<?php echo $form->textField($model,'phone',array('class'=>'col-xs-12 col-md-3','placeholder'=>'phone','class'=>'text')); ?>
		<?php echo $form->error($model,'phone'); ?>
		
					<?php echo $form->textArea($model,'body',array('placeholder'=>'Message','class'=>'text')); ?>
		<?php echo $form->error($model,'body'); ?>
				 <?php echo CHtml::submitButton('Submit',array('value'=>'Send message','class'=>'sub-button')); ?>
					</form>
					<?php $this->endWidget(); ?>
			</div>
			<div class="content-right col-sm-4 col-md-4">
			    <ul>
				   <li><span class="icon-info glyphicon glyphicon-map-marker col-xs-2 col-sm-2 col-md-2"></span>
				   	<h3>904, Shri Markendaya Yantramag Dharak Society<br>
Near New WIT College,<br>Next to Upahar Bakery lane,Solapur - 413006</h3></li>
<li><span class="icon-info glyphicon glyphicon-earphone col-xs-2 col-sm-2 col-md-2"></span><h3>+91 9823140574,<br>
+91 9890583909</h3></li>
<li><span class="icon-info glyphicon glyphicon-envelope col-xs-2 col-sm-2 col-md-2"></span><h3> info@vertextechnosys.com,<br>
vertextechnosysinfo@gmail.com</h3></li>
				</ul>
			 </div>
			 
			 <!-- <div class="add">
		<div class="container">
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:350px;width:100%;"><div id="gmap_canvas" style="height:350px;width:100%;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://www.themecircle.net" id="get-map-data">www.themecircle.net</a></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:12,center:new google.maps.LatLng(17.6599188,75.90639060000001),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(17.6599188, 75.90639060000001)});infowindow = new google.maps.InfoWindow({content:"<b>Vertex Technosys</b><br/>Flat No.1,Gurudatta Apartment, Daji Peth,Solapur-05<br/>413005 Solapur" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
		 </div>
		 </div> -->
			  
			</div>
		 </div>
		 
		
</div>
       <!--  <div class="add">
		<div class="container">
		<script type="text/javascript" src="<?php //echo $baseUrl; ?>/http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:350px;width:100%;"><div id="gmap_canvas" style="height:350px;width:100%;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://www.themecircle.net" id="get-map-data">www.themecircle.net</a></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:12,center:new google.maps.LatLng(17.6599188,75.90639060000001),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(17.6599188, 75.90639060000001)});infowindow = new google.maps.InfoWindow({content:"<b>Vertex Technosys</b><br/>Flat No.1,Gurudatta Apartment, Daji Peth,Solapur-05<br/>413005 Solapur" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
		 </div>
		 </div> -->
		  <div class="add">
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:400px;width:100%;"><div id="gmap_canvas" style="height:400px;width:100%;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://wordpress-themes.org" id="get-map-data">Vertex Technosys</a></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(17.6599188,75.90639060000001),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(17.6599188, 75.90639060000001)});infowindow = new google.maps.InfoWindow({content:"<b>Vertex Technosys</b><br/>904, ShriMarkendayaYantramagDharak Society,Near New WIT College, Next to Upahar Bakery lane<br/>413006 Solapur" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
		 </div>
			
			