<?php
/* @var $this LatestProjectController */
/* @var $model LatestProject */

$this->breadcrumbs=array(
	'Latest Projects'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List LatestProject', 'url'=>array('index')),
	array('label'=>'Create LatestProject', 'url'=>array('create')),
	array('label'=>'Update LatestProject', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete LatestProject', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LatestProject', 'url'=>array('admin')),
);
?>

<h1>View LatestProject #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'image',
		'project_type',
		'link',
	),
)); ?>
