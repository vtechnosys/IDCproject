<?php
/* @var $this OurTechnologyController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Our Technologies',
);

$this->menu=array(
	array('label'=>'Create OurTechnology', 'url'=>array('create')),
	array('label'=>'Manage OurTechnology', 'url'=>array('admin')),
);
?>

<h1>Our Technologies</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
