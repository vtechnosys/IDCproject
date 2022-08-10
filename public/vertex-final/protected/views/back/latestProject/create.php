<?php
/* @var $this LatestProjectController */
/* @var $model LatestProject */

$this->breadcrumbs=array(
	'Latest Projects'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LatestProject', 'url'=>array('index')),
	array('label'=>'Manage LatestProject', 'url'=>array('admin')),
);
?>

<h1>Create LatestProject</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>