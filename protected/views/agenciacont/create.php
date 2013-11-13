<?php
/* @var $this AgenciacontController */
/* @var $model Agenciacont */

$this->breadcrumbs=array(
	'Agência de Contabilidade'=>array('index'),
	'Cadastrar Agência de Contabilidade ',
);

$this->menu=array(
	array('label'=>'Listar Agência de Cont.', 'url'=>array('index')),
	array('label'=>'Buscar Agência de Cont.', 'url'=>array('admin')),
);
?>

<h1>Cadastrar Agência de Contabilidade</h1>

<?php $this->renderPartial('_form', array('model'=>$model,'endereco'=>$endereco, 'usuario'=>$usuario)); ?>