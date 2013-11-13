<?php
$this->pageCaption='Enderecos';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='List of all enderecos';
$this->breadcrumbs=array(
	'Enderecos',
);

$this->menu=array(
	array('label'=>'Create Endereco', 'url'=>array('create')),
	array('label'=>'Manage Endereco', 'url'=>array('admin')),
);
?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
