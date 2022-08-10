<?php
/* @var $this OurClientController */
/* @var $model OurClient */

$this->breadcrumbs=array(
	'Our Clients'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List OurClient', 'url'=>array('index')),
	array('label'=>'Create OurClient', 'url'=>array('create')),
	array('label'=>'Update OurClient', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete OurClient', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OurClient', 'url'=>array('admin')),
);
?>

<h1>View OurClient #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'description',
		'image',
		'link',
	),
)); ?>
