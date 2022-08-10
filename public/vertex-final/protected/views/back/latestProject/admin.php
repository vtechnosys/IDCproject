<?php
/* @var $this LatestProjectController */
/* @var $model LatestProject */

$this->breadcrumbs=array(
	'Latest Projects'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List LatestProject', 'url'=>array('index')),
	array('label'=>'Create LatestProject', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#latest-project-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Latest Projects</h1>

<p>

</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'latest-project-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'title',
		'image',
		'project_type',
		'link',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
