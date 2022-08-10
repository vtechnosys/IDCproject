<?php
/* @var $this OurClientController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Our Clients',
);

$this->menu=array(
	array('label'=>'Create OurClient', 'url'=>array('create')),
	array('label'=>'Manage OurClient', 'url'=>array('admin')),
);
?>

<h1>Our Clients</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
