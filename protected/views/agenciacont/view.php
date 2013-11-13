<?php
/* @var $this AgenciacontController */
/* @var $model Agenciacont */

$this->breadcrumbs=array(
	'Agência de Contabilidade'=>array('index'),
	$model->id_ac,
);

$this->menu=array(
	array('label'=>'Listar Agência de Cont.', 'url'=>array('index')),
	array('label'=>'Cadastrar Agência de Cont.', 'url'=>array('create')),
	array('label'=>'Atualizar  Agência de Cont.', 'url'=>array('update', 'id'=>$model->id_ac)),
	array('label'=>'Apagar Agência de Cont.', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_ac),'confirm'=>'Tem certeza que quer remover este item?')),
	array('label'=>'Editar Agência de Cont.', 'url'=>array('admin')),
);
?>

<h1>Visualizar Agência de Contabilidade #<?php echo $model->razao_social; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_ac',
		'id_end',
		'razao_social',
		'cnpj',
		'telefone',
		'email',
	),
)); ?>
