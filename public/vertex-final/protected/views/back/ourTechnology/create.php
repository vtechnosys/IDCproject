<?php
/* @var $this OurTechnologyController */
/* @var $model OurTechnology */

$this->breadcrumbs=array(
	'Our Technologies'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OurTechnology', 'url'=>array('index')),
	array('label'=>'Manage OurTechnology', 'url'=>array('admin')),
);
?>

<h1>Create OurTechnology</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>