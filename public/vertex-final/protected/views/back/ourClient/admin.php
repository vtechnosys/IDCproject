<?php
/* @var $this OurClientController */
/* @var $model OurClient */

$this->breadcrumbs=array(
	'Our Clients'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List OurClient', 'url'=>array('index')),
	array('label'=>'Create OurClient', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#our-client-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Our Clients</h1>

<p>

</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'our-client-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'title',
		'description',
		'image',
		'link',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
