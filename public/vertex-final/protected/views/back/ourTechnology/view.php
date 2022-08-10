<?php
/* @var $this OurTechnologyController */
/* @var $model OurTechnology */

$this->breadcrumbs=array(
	'Our Technologies'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List OurTechnology', 'url'=>array('index')),
	array('label'=>'Create OurTechnology', 'url'=>array('create')),
	array('label'=>'Update OurTechnology', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete OurTechnology', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OurTechnology', 'url'=>array('admin')),
);
?>

<h1>View OurTechnology #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'technology_name',
		'technology_logo',
	),
)); ?>
