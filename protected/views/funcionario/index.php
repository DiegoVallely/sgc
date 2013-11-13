<?php
/* @var $this FuncionarioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Funcionário',
);

$this->menu=array(
	array('label'=>'Cadastrar Funcionário', 'url'=>array('create')),
	array('label'=>'Buscar Funcionário', 'url'=>array('admin')),
);
?>

<h1>Funcionários</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
