<?php
/* @var $this FolhapagamentoController */
/* @var $model Folhapagamento */



$this->breadcrumbs=array(
	'Folhapagamentos'=>array('index'),
	$model->id_fp=>array('view','id'=>$model->id_fp),
	'Update',
);

$this->menu=array(
	array('label'=>'List Folhapagamento', 'url'=>array('index')),
	array('label'=>'Create Folhapagamento', 'url'=>array('create')),
	array('label'=>'View Folhapagamento', 'url'=>array('view', 'id'=>$model->id_fp)),
	array('label'=>'Manage Folhapagamento', 'url'=>array('admin')),
);
?>

<h1>Update Folhapagamento <?php echo $model->id_fp; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'funcionario'=>$funcionario)); ?>