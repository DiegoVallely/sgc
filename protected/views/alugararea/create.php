<?php
/* @var $this AlugarareaController */
/* @var $model Alugararea */

$this->breadcrumbs=array(
	'Alugarareas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Alugararea', 'url'=>array('index')),
	array('label'=>'Manage Alugararea', 'url'=>array('admin')),
);
?>

<h1>Create Alugararea</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>