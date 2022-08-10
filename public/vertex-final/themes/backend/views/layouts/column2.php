<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
 
  <div class="row-fluid">
  <?php if(!Yii::app()->user->isGuest) 
  { ?>
	<div class="span3">
		<div class="sidebar-nav">
        
		  <?php $this->widget('zii.widgets.CMenu', array(
			/*'type'=>'list',*/
			'encodeLabel'=>false,
			'items'=>array(
				array('label'=>'<i class="fa fa-tachometer"></i>&nbsp;&nbsp;&nbsp;Dashboard ', 'url'=>array('/site/index'),'itemOptions'=>array('class'=>'')),
				array('label'=>'<i class="fa fa-clipboard"></i>&nbsp;&nbsp;&nbsp;Manage Latest Projects ', 'url'=>array('/latestProject/admin')),
				array('label'=>'<i class="fa fa-clipboard"></i>&nbsp;&nbsp;&nbsp;Manage Our Client', 'url'=>array('/OurClient/admin')),
				array('label'=>'<i class="fa fa-clipboard"></i>&nbsp;&nbsp;&nbsp;Manage Our Technology ', 'url'=>array('/ourTechnology/admin')),
				 array('label'=>'<i class="fa fa-file-text"></i>&nbsp;&nbsp;&nbsp;Manage Services ', 'url'=>array('/Services/admin')), 
				array('label'=>'<i class="fa fa-file"></i>&nbsp;&nbsp;&nbsp;Manage Portfolio ', 'url'=>array('/portfolio/admin')),
				array('label'=>'<i class="fa fa-users"></i>&nbsp;&nbsp;&nbsp;Manage Feedback ', 'url'=>array('/contactUs/admin')),
			
				array('label'=>'<i class="fa fa-user-secret"></i>&nbsp;&nbsp;&nbsp;Manage Admin Users ', 'url'=>array('users/admin')),
				// Include the operations menu
				//array('label'=>'OPERATIONS','items'=>$this->menu),
			),
			));?>
		</div>
        <br>
      <?php } ?> 
    </div><!--/span-->
    <div class="span9">
   
	 <div class="span12">
	
    <?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
            'links'=>$this->breadcrumbs,
			'homeLink'=>CHtml::link('Dashboard',array('users/home')),
			'htmlOptions'=>array('class'=>'breadcrumb')
        )); ?><!-- breadcrumbs -->
    <?php endif?>

    </div>
    <!-- Include content pages -->
    <?php echo $content; ?>

	</div><!--/span-->
		
  

<div class="row-fluid">
	<div class="span2">
		<div class="sidebar-nav">
			
			  <?php $this->widget('zii.widgets.CMenu', array(
				/*'type'=>'list',*/
				'encodeLabel'=>false,
				'items'=>array(
					// Include the operations menu
					array('label'=>'OPERATIONS','items'=>$this->menu),
				),
				));?>
		</div>
	</div>
    </div>
	</div><!--/row-->
<?php $this->endContent(); ?>