<?php
/* @var $this DadoscondominioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dadoscondominios',
);

$this->menu=array(
	array('label'=>'Create Dadoscondominio', 'url'=>array('create')),
	array('label'=>'Manage Dadoscondominio', 'url'=>array('admin')),
);
?>

<h1>Dadoscondominios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
