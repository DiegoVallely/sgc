<?php
/* @var $this AlugarareaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Alugarareas',
);

$this->menu=array(
	array('label'=>'Create Alugararea', 'url'=>array('create')),
	array('label'=>'Manage Alugararea', 'url'=>array('admin')),
);
?>

<h1>Alugarareas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
