<?php
/* @var $this OurTechnologyController */
/* @var $data OurTechnology */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('technology_name')); ?>:</b>
	<?php echo CHtml::encode($data->technology_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('technology_logo')); ?>:</b>
	<?php echo CHtml::encode($data->technology_logo); ?>
	<br />


</div>