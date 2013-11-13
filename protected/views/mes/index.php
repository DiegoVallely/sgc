<?php
/* @var $this MesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mes',
);

$this->menu=array(
	array('label'=>'Create Mes', 'url'=>array('create')),
	array('label'=>'Manage Mes', 'url'=>array('admin')),
);
?>

<h1>Mes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
