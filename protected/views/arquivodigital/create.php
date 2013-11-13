<?php
/* @var $this ArquivodigitalController */
/* @var $model Arquivodigital */

$this->breadcrumbs=array(
	'Arquivo Digital'=>array('index'),
	'Criar Arquivo Digital',
);

$this->menu=array(
	array('label'=>'Listar Arquivos Digital', 'url'=>array('index')),
	array('label'=>'Buscar Arquivo Digital', 'url'=>array('admin')),
);
?>

<h1>Criar Arquivo Digital</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>