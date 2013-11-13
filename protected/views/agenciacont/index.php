<?php
/* @var $this AgenciacontController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Agência de Contabilidade',
);

$this->menu=array(
	array('label'=>'Cadastrar Agência de Cont.', 'url'=>array('create')),
	array('label'=>'Buscar Agência de Cont.', 'url'=>array('admin')),
);
?>

<h1>Agência de Contabilidade</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
