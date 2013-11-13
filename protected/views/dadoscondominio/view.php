<?php
/* @var $this DadoscondominioController */
/* @var $model Dadoscondominio */

$this->breadcrumbs=array(
	'Dadoscondominios'=>array('index'),
	$model->id_cond,
);

$this->menu=array(
	array('label'=>'List Dadoscondominio', 'url'=>array('index')),
	array('label'=>'Create Dadoscondominio', 'url'=>array('create')),
	array('label'=>'Update Dadoscondominio', 'url'=>array('update', 'id'=>$model->id_cond)),
	array('label'=>'Delete Dadoscondominio', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_cond),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Dadoscondominio', 'url'=>array('admin')),
);
?>

<h1>View Dadoscondominio #<?php echo $model->id_cond; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_cond',
		'nome_fantasia',
		'razao_social',
		'cnpj',
                'num_unidades',
		'email',
	),
)); ?>
