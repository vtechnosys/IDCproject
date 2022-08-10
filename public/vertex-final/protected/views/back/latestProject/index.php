<?php
/* @var $this LatestProjectController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Latest Projects',
);

$this->menu=array(
	array('label'=>'Create LatestProject', 'url'=>array('create')),
	array('label'=>'Manage LatestProject', 'url'=>array('admin')),
);
?>

<h1>Latest Projects</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
