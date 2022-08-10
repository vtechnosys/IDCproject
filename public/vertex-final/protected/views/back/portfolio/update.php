<?php
/* @var $this PortfolioController */
/* @var $model Portfolio */

$this->breadcrumbs=array(
	'Portfolios'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Portfolio', 'url'=>array('index')),
	array('label'=>'Create Portfolio', 'url'=>array('create')),
	array('label'=>'View Portfolio', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Portfolio', 'url'=>array('admin')),
);
?>

<h1>Update Portfolio <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>