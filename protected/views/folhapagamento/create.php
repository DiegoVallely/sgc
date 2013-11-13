<?php
/* @var $this FolhapagamentoController */
/* @var $model Folhapagamento */



$this->breadcrumbs=array(
	'Folhapagamentos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Folhapagamento', 'url'=>array('index')),
	array('label'=>'Manage Folhapagamento', 'url'=>array('admin')),
);
?>

<h1>Create Folhapagamento</h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'funcionario'=>$funcionario)); ?>