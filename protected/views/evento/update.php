<?php
/* @var $this EventoController */
/* @var $model Evento */

$this->breadcrumbs=array(
	'Eventos'=>array('index'),
	$model->id_evento=>array('view','id'=>$model->id_evento),
	'Update',
);

$this->menu=array(
	array('label'=>'List Evento', 'url'=>array('index')),
	array('label'=>'Create Evento', 'url'=>array('create')),
	array('label'=>'View Evento', 'url'=>array('view', 'id'=>$model->id_evento)),
	array('label'=>'Manage Evento', 'url'=>array('admin')),
);
?>

<h1>Update Evento <?php echo $model->id_evento; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>