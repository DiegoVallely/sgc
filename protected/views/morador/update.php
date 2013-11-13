<?php
$this->pageCaption='Update Morador '.$model->id_m;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Moradors'=>array('index'),
	$model->id_m=>array('view','id'=>$model->id_m),
	'Update',
);

$this->menu=array(
	array('label'=>'List Moradors', 'url'=>array('index')),
	array('label'=>'Create Morador', 'url'=>array('create')),
	array('label'=>'View Morador', 'url'=>array('view', 'id'=>$model->id_m)),
	array('label'=>'Manage Moradors', 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>