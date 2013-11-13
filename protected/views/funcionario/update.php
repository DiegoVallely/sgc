<?php
/* @var $this FuncionarioController */
/* @var $model Funcionario */

$this->breadcrumbs=array(
	'Funcionários'=>array('index'),
	$model->id_f=>array('view','id'=>$model->id_f),
	'Atualizar Funcionário',
);

$this->menu=array(
	array('label'=>'Listar Funcionários', 'url'=>array('index')),
	array('label'=>'Cadastrar Funcionário', 'url'=>array('create')),
	array('label'=>'Visualizar Funcionário', 'url'=>array('view', 'id'=>$model->id_f)),
	array('label'=>'Buscar Funcionário', 'url'=>array('admin')),
);
?>

<h1>Atualizar Funcionário <?php echo $model->id_f; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model,'endereco'=>$endereco)); ?>