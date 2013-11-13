<?php
$this->pageCaption='View Morador #'.$model->id_m;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Moradors'=>array('index'),
	$model->id_m,
);

$this->menu=array(
	array('label'=>'List Moradors', 'url'=>array('index')),
	array('label'=>'Create Morador', 'url'=>array('create')),
	array('label'=>'Update Morador', 'url'=>array('update', 'id'=>$model->id_m)),
	array('label'=>'Delete Morador', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_m),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Moradors', 'url'=>array('admin')),
);
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'baseScriptUrl'=>false,
	'cssFile'=>false,
	'attributes'=>array(
		'id_m',
		'nome',
		'cpf',
		'telefone',
		'num_casa',
		'num_moradores',
		'email',
	),
)); ?>
