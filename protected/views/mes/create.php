<?php
/* @var $this MesController */
/* @var $model Mes */

$this->breadcrumbs=array(
	'Mes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Mes', 'url'=>array('index')),
	array('label'=>'Manage Mes', 'url'=>array('admin')),
);
?>

<h1>Create Mes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>