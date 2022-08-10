<?php
/* @var $this OurClientController */
/* @var $model OurClient */

$this->breadcrumbs=array(
	'Our Clients'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OurClient', 'url'=>array('index')),
	array('label'=>'Manage OurClient', 'url'=>array('admin')),
);
?>

<h1>Create OurClient</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>