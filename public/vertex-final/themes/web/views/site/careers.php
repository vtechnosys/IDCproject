	<?php $path=Yii::app()->theme->baseUrl; ?>
		<script src="<?php echo $path ; ?>/js/bootstrap.js"></script>
	<!--typography-page -->
	<div class="content">
	<div class="service-title">
				  <!--  <h2>services</h2> -->
				   <h6>Make your career with vertex</h6>
				</div>
	<div class="typo">
	<div class="container">
	<!-- <h2 class="tittle">Careers</h2>
	<h6></h6> -->
		<div class="grid_3 grid_4">
		<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'careers-form',
	'enableAjaxValidation'=>false,
)); ?>
		
		
		
		
				<!-- <h3>Headings</h3> -->
				<div class="bs-example">
				  
					<p>Explore opportunities to take your career to the next level. Whether you are a student, a graduate or an experienced professional. Discover the impact you could make with a career at Vertex Techonosys.</p>
					<div class="careers-form">
					    <ul>
						    <li>
							<span class="col-md-2">Name</span><h6>:</h6>
							<h5 class="col-md-8">
						    <?php echo $form->textField($model,'name',array('class'=>'col-xs-12 col-sm-8 col-md-5','placeholder'=>'Name','type'=>'text')); ?>
		                   <?php echo $form->error($model,'name'); ?>
							</h5>
							</li>
							<li>
							<span class="col-md-2">Qualification</span><h6>:</h6>
							<h5 class="col-md-8">
							  <?php echo $form->textField($model,'qualification',array('class'=>'col-xs-12 col-sm-8 col-md-5','placeholder'=>'Qualification','type'=>'text')); ?>
		                      <?php echo $form->error($model,'qualification'); ?>
							</h5>
							</li>
							<li>
							<span class="col-md-2">Address</span><h6>:</h6>
							<h5 class="col-md-8">
							<?php echo $form->textField($model,'address',array('class'=>'col-xs-12 col-sm-8 col-md-5','placeholder'=>'Address','type'=>'text')); ?>
		                    <?php echo $form->error($model,'address'); ?>
							</h5>
							</li>
							<li>
							<span class="col-md-2">Email ID</span><h6>:</h6>
							<h5 class="col-md-8">
							<?php echo $form->textField($model,'email_id',array('class'=>'col-xs-12 col-sm-8 col-md-5','placeholder'=>'Email ID','type'=>'text')); ?>
		                    <?php echo $form->error($model,'email_id'); ?>
							</h5>
							</li>
							<li>
							<span class="col-md-2">Mobile no</span><h6>:</h6>
							<h5 class="col-md-8">
							<?php echo $form->textField($model,'mobile',array('class'=>'col-xs-12 col-sm-8 col-md-5','placeholder'=>'Mobile No','type'=>'text')); ?>
		                    <?php echo $form->error($model,'mobile'); ?>
							</h5>
							</li>
							<li>
							
							  <?php echo CHtml::submitButton('Submit',array('value'=>'Send','class'=>'sub-button col-md-1 career-btn')); ?>
							
							</li>
							
						</ul>
					</div>
					<p>Please send your Resume to <a href="mailto:info@vertextechnosys.com">info@vertextechnosys.com</a>&nbsp;,&nbsp;<a href="mailto:vertextechnosysinfo@gmail.com">vertextechnosysinfo@gmail.com</a></p>
				</div>
				
				<?php $this->endWidget(); ?>
			</div> 
			
			</div>
		</div>
	</div>
<!-- //typography-page -->
<!--indicate-->
	            <div class="indicate">
					<div class="container">
						<div class="indicate-grids">
							<div class="col-sm-4 col-md-4 indicate-grid">
								<span class="glyphicon span1 glyphicon-map-marker" aria-hidden="true"></span>
								<p>Flat No.1,Gurudatta Apartment,<br>
                                   Daji Peth,Solapur-05</p>
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
			<!--indicate-->
			
			
			
			
			
			
			
			
			
			