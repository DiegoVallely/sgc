<?php
/* @var $this ArquivodigitalController */
/* @var $model Arquivodigital */

$this->breadcrumbs=array(
	'Arquivos Digital'=>array('index'),
	$model->id_ad,
);

$this->menu=array(
	array('label'=>'Listar Arquivos Digital', 'url'=>array('index')),
	array('label'=>'Criar Arquivo Digital', 'url'=>array('create')),
	array('label'=>'Atualizar Arquivo Digital', 'url'=>array('update', 'id'=>$model->id_ad)),
	array('label'=>'Apagr Arquivo Digital', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_m),'confirm'=>'Tem certeza que quer remover este item?')),
	array('label'=>'Buscar Arquivo Digital', 'url'=>array('admin')),
);
?>

<h1>Visualizar Arquivo Digital #<?php echo $model->id_ad; ?></h1>


<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_ad',
		'nome_img',
		'imagem',
	),
)); ?>
