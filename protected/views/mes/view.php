<?php
/* @var $this MesController */
/* @var $model Mes */

$this->breadcrumbs=array(
	'Mes'=>array('index'),
	$model->id_mes,
);

$this->menu=array(
	array('label'=>'List Mes', 'url'=>array('index')),
	array('label'=>'Create Mes', 'url'=>array('create')),
	array('label'=>'Update Mes', 'url'=>array('update', 'id'=>$model->id_mes)),
	array('label'=>'Delete Mes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_mes),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Mes', 'url'=>array('admin')),
);
?>

<h1>View Mes #<?php echo $model->id_mes; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_mes',
		'mes',
		'mes_abrev',
	),
)); ?>
