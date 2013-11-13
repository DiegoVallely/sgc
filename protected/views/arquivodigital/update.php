<?php
/* @var $this ArquivodigitalController */
/* @var $model Arquivodigital */

$this->breadcrumbs=array(
	'Arquivos Digital'=>array('index'),
	$model->id_ad=>array('view','id'=>$model->id_ad),
	'Atualizar Arquivo Digital',
);

$this->menu=array(
	array('label'=>'Listar Arquivos Digital', 'url'=>array('index')),
	array('label'=>'Cadastrar Arquivo Digital', 'url'=>array('create')),
	array('label'=>'Visualizar Arquivo Digital', 'url'=>array('view', 'id'=>$model->id_ad)),
	array('label'=>'Buscar Arquivo Digital', 'url'=>array('admin')),
);
?>

<h1>Atualizar Arquivo Digital <?php echo $model->id_ad; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>