<?php
$this->pageCaption='Update Endereco '.$model->id_end;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Enderecos'=>array('index'),
	$model->id_end=>array('view','id'=>$model->id_end),
	'Update',
);

$this->menu=array(
	array('label'=>'List Enderecos', 'url'=>array('index')),
	array('label'=>'Create Endereco', 'url'=>array('create')),
	array('label'=>'View Endereco', 'url'=>array('view', 'id'=>$model->id_end)),
	array('label'=>'Manage Enderecos', 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>