<?php
/* @var $this TesteController */
/* @var $model Teste */

$this->breadcrumbs=array(
	'Testes'=>array('index'),
	$model->id_teste=>array('view','id'=>$model->id_teste),
	'Update',
);

$this->menu=array(
	array('label'=>'List Teste', 'url'=>array('index')),
	array('label'=>'Create Teste', 'url'=>array('create')),
	array('label'=>'View Teste', 'url'=>array('view', 'id'=>$model->id_teste)),
	array('label'=>'Manage Teste', 'url'=>array('admin')),
);
?>

<h1>Update Teste <?php echo $model->id_teste; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>