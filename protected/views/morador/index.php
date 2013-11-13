<?php
$this->pageCaption='Moradors';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='List of all moradors';
$this->breadcrumbs=array(
	'Moradors',
);

$this->menu=array(
	array('label'=>'Create Morador', 'url'=>array('create')),
	array('label'=>'Manage Morador', 'url'=>array('admin')),
);
?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
