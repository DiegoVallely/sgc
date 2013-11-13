<?php
/* @var $this FolhapagamentoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Folhapagamentos',
);

$this->menu=array(
	array('label'=>'Create Folhapagamento', 'url'=>array('create')),
	array('label'=>'Manage Folhapagamento', 'url'=>array('admin')),
);
?>

<h1>Folhapagamentos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
