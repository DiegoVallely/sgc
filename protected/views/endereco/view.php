<?php
$this->pageCaption='View Endereco #'.$model->id_end;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Enderecos'=>array('index'),
	$model->id_end,
);

$this->menu=array(
	array('label'=>'List Enderecos', 'url'=>array('index')),
	array('label'=>'Create Endereco', 'url'=>array('create')),
	array('label'=>'Update Endereco', 'url'=>array('update', 'id'=>$model->id_end)),
	array('label'=>'Delete Endereco', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_end),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Enderecos', 'url'=>array('admin')),
);
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'baseScriptUrl'=>false,
	'cssFile'=>false,
	'attributes'=>array(
		'id_end',
		'rua',
		'num',
		'bairro',
		'complemento',
		'cidade',
		'estado',
	),
)); ?>
