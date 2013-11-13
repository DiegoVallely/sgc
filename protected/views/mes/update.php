<?php
/* @var $this MesController */
/* @var $model Mes */

$this->breadcrumbs=array(
	'Mes'=>array('index'),
	$model->id_mes=>array('view','id'=>$model->id_mes),
	'Update',
);

$this->menu=array(
	array('label'=>'List Mes', 'url'=>array('index')),
	array('label'=>'Create Mes', 'url'=>array('create')),
	array('label'=>'View Mes', 'url'=>array('view', 'id'=>$model->id_mes)),
	array('label'=>'Manage Mes', 'url'=>array('admin')),
);
?>

<h1>Update Mes <?php echo $model->id_mes; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>