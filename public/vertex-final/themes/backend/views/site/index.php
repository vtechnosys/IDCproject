<?php
/* @var $this SiteController */

// $this->pageTitle=Yii::app()->name;
$baseUrl = Yii::app()->theme->baseUrl; 
$this->breadcrumbs=array(
	'Home',
);
?>

<div class="hero-unit">
	<p><div class="sidebar-nav span2 custom-icons">
	  <?php $this->widget('zii.widgets.CMenu', array(
			
			'encodeLabel'=>false,
			'items'=>array(
				array('label'=>'<i class="fa fa-comment fa-5x"></i>Testimonials ', 'url'=>array('testimonials/admin'),'itemOptions'=>array('class'=>'')),
				array('label'=>'<i class="fa fa-envelope fa-5x"></i> Messages ', 'url'=>array('/collegeCode/admin')),
				array('label'=>'<i class="fa fa-cart-arrow-down fa-5x"></i> New Orders ', 'url'=>array('/department/admin')),
				array('label'=>'<i class="fa fa-users fa-5x"></i> Total visits', 'url'=>array('staff/admin')),
				
			),
			));?>
</div>
</p>
	<h3>Welcome to <b>Vertex Technosys<b></h3>
	<h4>We Help you to Evolve........</h4>
	
</div>