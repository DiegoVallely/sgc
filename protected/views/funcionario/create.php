<?php
/* @var $this FuncionarioController */
/* @var $model Funcionario */

$this->breadcrumbs=array(
	'Funcionário'=>array('index'),
	'Cadastrar',
);

$this->menu=array(
	array('label'=>'Listar Funcionário', 'url'=>array('index')),
	array('label'=>'Buscar Funcionário', 'url'=>array('admin')),
);
?>

<h1>Cadastrar Funcionário</h1>

<?php $this->renderPartial('_form', array('model'=>$model,'endereco'=>$endereco)); ?>