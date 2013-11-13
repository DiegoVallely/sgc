<?php
/* @var $this FolhapagamentoController */
/* @var $model Folhapagamento */

$this->breadcrumbs=array(
	'Folhapagamentos'=>array('index'),
	$model->id_fp,
);

$this->menu=array(
	array('label'=>'List Folhapagamento', 'url'=>array('index')),
	array('label'=>'Create Folhapagamento', 'url'=>array('create')),
	array('label'=>'Update Folhapagamento', 'url'=>array('update', 'id'=>$model->id_fp)),
	array('label'=>'Delete Folhapagamento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_fp),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Folhapagamento', 'url'=>array('admin')),
);
?>

<h1>View Folhapagamento #<?php echo $model->id_fp; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_fp',
		'id_f',
		'salario',
		'adiant_sala',
		'decimo_terc',
		'inss',
		'fgts',
		'pis',
		'honorarios',
		'cesta_basica',
		'ferias',
		'rescisao',
		'vale_trasp',
		'vale_alim',
	),
)); ?>
