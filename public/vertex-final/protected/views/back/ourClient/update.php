<?php
/* @var $this OurClientController */
/* @var $model OurClient */

$this->breadcrumbs=array(
	'Our Clients'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List OurClient', 'url'=>array('index')),
	array('label'=>'Create OurClient', 'url'=>array('create')),
	array('label'=>'View OurClient', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage OurClient', 'url'=>array('admin')),
);
?>

<h1>Update OurClient <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>