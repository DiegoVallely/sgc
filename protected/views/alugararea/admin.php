<?php
/* @var $this AlugarareaController */
/* @var $model Alugararea */

$this->breadcrumbs=array(
	'Alugarareas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Alugararea', 'url'=>array('index')),
	array('label'=>'Create Alugararea', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#alugararea-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Alugarareas</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'columns'=>array(
        array(
            'name'=>'status',
            'value'=>'Lookup::item("alugarAreaStatus",$data->status)',
            'filter'=>Lookup::items('alugarAreaStatus'),
        ),
        array(
            'name'=>'solicitado_em',
            'type'=>'datetime',
            'filter'=>false,
        ),
        array(
            'name'=>'data_aluguel',
            'type'=>'datetime',
            'filter'=>false,
        ),
        array(
            'class'=>'CButtonColumn',
        ),
    ),
)); ?>