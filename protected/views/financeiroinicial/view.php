<?php
/* @var $this FinanceiroinicialController */
/* @var $model Financeiroinicial */

$this->breadcrumbs=array(
	'Financeiroinicials'=>array('index'),
	$model->id_finan_ini,
);

$this->menu=array(
	array('label'=>'List Financeiroinicial', 'url'=>array('index')),
	array('label'=>'Create Financeiroinicial', 'url'=>array('create')),
	array('label'=>'Update Financeiroinicial', 'url'=>array('update', 'id'=>$model->id_finan_ini)),
	array('label'=>'Delete Financeiroinicial', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_finan_ini),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Financeiroinicial', 'url'=>array('admin')),
);
?>

<h1>View Financeiroinicial #<?php echo $model->id_finan_ini; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_finan_ini',
                'id_cond',
                'id_mes',
		'ano',
		'saldo_ini',
		'fundo_caixa_ini',
		'fundo_reserva_ini',
	),
)); ?>
