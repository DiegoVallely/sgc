<?php
$this->pageCaption='Create Morador';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Define a new morador';
$this->breadcrumbs=array(
	'Moradors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Moradors', 'url'=>array('index')),
	array('label'=>'Manage Moradors', 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>