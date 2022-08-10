<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
    <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
         <?php //echo Yii::app()->user->role; exit;?>
          <!-- Be sure to leave the brand out there if you want it shown -->
          <a class="brand" href="#">Vertex Technosys<small> Admin 1.0</small></a>
          
          <div class="nav-collapse">
			<?php $this->widget('zii.widgets.CMenu',array(
                    'htmlOptions'=>array('class'=>'pull-right nav'),
                    'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
					'itemCssClass'=>'item-test',
                    'encodeLabel'=>false,
                    'items'=>array(
                       
						array('label'=>'<i class="fa fa-cogs"></i>&nbsp;<span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
                        'items'=>array(
                           
							 array('label'=>'<i class="fa fa-newspaper-o fa-fw"></i> Manage Latest News', 'url'=>array('/news/admin'),'visible'=>!Yii::app()->user->isGuest),
							  array('label'=>'<i class="fa fa-tags fa-fw"></i> Manage Site Data ', 'url'=>array('sitedata/admin'), ),
							 array('label'=>'<i class="fa fa-phone fa-fw"></i> Manage Contact Details', 'url'=>array('/contactdetails/admin')),
							 array('label'=>'<i class="fa fa-link fa-fw"></i> Manage Social Links', 'url'=>array('/sociallinks/admin')),
							
                        )),
                        array('label'=>'<i class="fa fa-user"></i>&nbsp;<span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
                        'items'=>array(
                            array('label'=>'<i class="fa fa-gear fa-fw"></i> Manage Profile ', 'url'=>array('users/update'), 'visible'=>!Yii::app()->user->isGuest),
			
							 array('label'=>'<i class="fa fa-sign-in fa-fw"></i> Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                        array('label'=>'<i class="fa fa-sign-out fa-fw"></i> Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
                        )), 
                      /*   */
                    ),
                )); ?>
    	</div>
    </div>
	</div>
</div>

<div class="subnav navbar navbar-fixed-top">
    <div class="navbar-inner">
    	<div class="container">
           <form class="navbar-search pull-right" action="">
           	 
          <!--  <input type="text" class="search-query span2" placeholder="Search">
           --> 
           </form>
    	</div><!-- container -->
    </div><!-- navbar-inner -->
</div><!-- subnav -->