<?php
/* @var $this AgenciacontController */
/* @var $model Agenciacont */

$this->breadcrumbs=array(
	'Agência de Contabilidade'=>array('index'),
	$model->id_ac=>array('view','id'=>$model->id_ac),
	'Atualizar Agência de Contabilidade',
);

$this->menu=array(
	array('label'=>'Listar Agência de Cont.', 'url'=>array('index')),
	array('label'=>'Cadastrar Agência de Cont.', 'url'=>array('create')),
	array('label'=>'Visualizar Agência de Cont.', 'url'=>array('view', 'id'=>$model->id_ac)),
	array('label'=>'Buscar Agência de Cont.', 'url'=>array('admin')),
);
?>

<h1>Atualizar Agência de Contabilidade <?php echo $model->razao_social; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model,'endereco'=>$endereco,'usuario'=>$usuario)); ?>