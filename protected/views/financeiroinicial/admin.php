<?php
/* @var $this FinanceiroinicialController */
/* @var $model Financeiroinicial */

$this->breadcrumbs=array(
	'Financeiroinicials'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Financeiroinicial', 'url'=>array('index')),
	array('label'=>'Create Financeiroinicial', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#financeiroinicial-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Financeiroinicials</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'financeiroinicial-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_finan_ini',
		'id_mes',
		'ano',
		'saldo_ini',
		'fundo_caixa_ini',
		'fundo_reserva_ini',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
