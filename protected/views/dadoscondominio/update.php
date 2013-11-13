<?php
/* @var $this DadoscondominioController */
/* @var $model Dadoscondominio */

$this->breadcrumbs=array(
	'Dadoscondominios'=>array('index'),
	$model->id_cond=>array('view','id'=>$model->id_cond),
	'Update',
);

$this->menu=array(
	array('label'=>'List Dadoscondominio', 'url'=>array('index')),
	array('label'=>'Create Dadoscondominio', 'url'=>array('create')),
	array('label'=>'View Dadoscondominio', 'url'=>array('view', 'id'=>$model->id_cond)),
	array('label'=>'Manage Dadoscondominio', 'url'=>array('admin')),
);
?>

<h1>Update Dadoscondominio <?php echo $model->id_cond; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model,'endereco'=>$endereco)); ?>