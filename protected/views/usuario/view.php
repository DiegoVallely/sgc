<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->nome_usuario,
);

$this->menu=array(
	array('label'=>'Listar Usuários', 'url'=>array('index')),
	array('label'=>'Cadastrar Usuário', 'url'=>array('create')),
	array('label'=>'Atualizar Usuário', 'url'=>array('update', 'id'=>$model->id_usuario)),
	array('label'=>'Apagar Usuário', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_usuario),'confirm'=>'Tem certeza que quer remover este item?')),
	
);
?>

<h1>Visualizar Usuario #<?php echo $model->nome_usuario; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
            	'nome_usuario',
		'tipo',
                'ativo',
	),
)); ?>
