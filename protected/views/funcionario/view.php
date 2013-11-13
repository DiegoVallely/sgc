<?php
/* @var $this FuncionarioController */
/* @var $model Funcionario */

$this->breadcrumbs=array(
	'Funcionários'=>array('index'),
	$model->id_f,
);

$this->menu=array(
	array('label'=>'Listar Funcionários', 'url'=>array('index')),
	array('label'=>'Cadastrar Funcionário', 'url'=>array('create')),
	array('label'=>'Atualizar Funcionário', 'url'=>array('update', 'id'=>$model->id_f)),
	array('label'=>'Apagar Funcionário', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_f),'confirm'=>'Tem certeza que quer remover este item?')),
	array('label'=>'Buscar Funcionário', 'url'=>array('admin')),
);
?>

<h1>Visualizar Funcionário #<?php echo $model->id_f; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_f',
		'nome',
		'cpf',
		'id_end',
		'telefone',
		'funcao',
		'data_admissao',
		'data_desligamento',
		'hora_ini',
		'hora_fin',
	),
)); ?>
