<?php
/* @var $this AlugarareaController */
/* @var $model Alugararea */

$this->breadcrumbs=array(
	'Alugarareas'=>array('index'),
	$model->id_alugar,
);

$this->menu=array(
	array('label'=>'List Alugararea', 'url'=>array('index')),
	array('label'=>'Create Alugararea', 'url'=>array('create')),
	array('label'=>'Update Alugararea', 'url'=>array('update', 'id'=>$model->id_alugar)),
	array('label'=>'Delete Alugararea', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_alugar),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Alugararea', 'url'=>array('admin')),
);
?>

<h1>View Alugararea #<?php echo $model->id_alugar; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_alugar',
		'id_m',
		'data_aluguel',
		'hora_ini',
		'hora_fin',
		'motivo',
		'status',
	),
)); ?>
