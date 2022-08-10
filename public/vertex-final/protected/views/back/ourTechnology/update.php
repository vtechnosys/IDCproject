<?php
/* @var $this OurTechnologyController */
/* @var $model OurTechnology */

$this->breadcrumbs=array(
	'Our Technologies'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List OurTechnology', 'url'=>array('index')),
	array('label'=>'Create OurTechnology', 'url'=>array('create')),
	array('label'=>'View OurTechnology', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage OurTechnology', 'url'=>array('admin')),
);
?>

<h1>Update OurTechnology <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>