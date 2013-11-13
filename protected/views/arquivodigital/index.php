<?php
/* @var $this ArquivodigitalController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Arquivos Digital',
);

$this->menu=array(
	array('label'=>'Criar Arquivo Digital', 'url'=>array('create')),
	array('label'=>'Buscar Arquivo Digital', 'url'=>array('admin')),
);
?>

<h1>Arquivos Digital</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
