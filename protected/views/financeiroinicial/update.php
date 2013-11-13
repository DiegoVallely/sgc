<?php
/* @var $this FinanceiroinicialController */
/* @var $model Financeiroinicial */

$this->breadcrumbs=array(
	'Financeiroinicials'=>array('index'),
	$model->id_finan_ini=>array('view','id'=>$model->id_finan_ini),
	'Update',
);

$this->menu=array(
	array('label'=>'List Financeiroinicial', 'url'=>array('index')),
	array('label'=>'Create Financeiroinicial', 'url'=>array('create')),
	array('label'=>'View Financeiroinicial', 'url'=>array('view', 'id'=>$model->id_finan_ini)),
	array('label'=>'Manage Financeiroinicial', 'url'=>array('admin')),
);
?>

<h1>Update Financeiroinicial <?php echo $model->id_finan_ini; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model,'dadoscondominio'=>$dadoscondominio, 'mes'=>$mes )); ?>