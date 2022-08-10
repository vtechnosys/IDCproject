<?php
/* @var $this OurTechnologyController */
/* @var $model OurTechnology */

$this->breadcrumbs=array(
	'Our Technologies'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List OurTechnology', 'url'=>array('index')),
	array('label'=>'Create OurTechnology', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#our-technology-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Our Technologies</h1>


<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'our-technology-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'technology_name',
		'technology_logo',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
