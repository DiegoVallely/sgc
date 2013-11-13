<?php
/* @var $this ComentarioController */
/* @var $model Comentario */

$this->breadcrumbs=array(
	'Comentarios'=>array('index'),
	$model->id_come,
);

$this->menu=array(
	array('label'=>'List Comentario', 'url'=>array('index')),
	array('label'=>'Create Comentario', 'url'=>array('create')),
	array('label'=>'Update Comentario', 'url'=>array('update', 'id'=>$model->id_come)),
	array('label'=>'Delete Comentario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_come),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Comentario', 'url'=>array('admin')),
);
?>

<h1>View Comentario #<?php echo $model->id_come; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_come',
		'id_m',
		'id_mu',
		'criado_em',
		'comentario',
	),
)); ?>
