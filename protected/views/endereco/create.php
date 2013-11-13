<?php
$this->pageCaption='Create Endereco';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Define a new endereco';
$this->breadcrumbs=array(
	'Enderecos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Enderecos', 'url'=>array('index')),
	array('label'=>'Manage Enderecos', 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>