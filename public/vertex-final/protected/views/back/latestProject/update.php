<?php
/* @var $this LatestProjectController */
/* @var $model LatestProject */

$this->breadcrumbs=array(
	'Latest Projects'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List LatestProject', 'url'=>array('index')),
	array('label'=>'Create LatestProject', 'url'=>array('create')),
	array('label'=>'View LatestProject', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage LatestProject', 'url'=>array('admin')),
);
?>

<h1>Update LatestProject <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>