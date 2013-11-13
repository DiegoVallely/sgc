<?php
/* @var $this AlugarareaController */
/* @var $model Alugararea */

$this->breadcrumbs=array(
	'Alugarareas'=>array('index'),
	$model->id_alugar=>array('view','id'=>$model->id_alugar),
	'Update',
);

$this->menu=array(
	array('label'=>'List Alugararea', 'url'=>array('index')),
	array('label'=>'Create Alugararea', 'url'=>array('create')),
	array('label'=>'View Alugararea', 'url'=>array('view', 'id'=>$model->id_alugar)),
	array('label'=>'Manage Alugararea', 'url'=>array('admin')),
);
?>

<h1>Update Alugararea <?php echo $model->id_alugar; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>