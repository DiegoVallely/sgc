<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

Yii::app()->getClientScript()->registerCoreScript 
 ( 'jquery.ui' );
Yii::app()->clientScript->registerScriptFile(
 Yii::app()->request->baseUrl . '/js/user_form_ajax.js'
);



$this->breadcrumbs=array(
	'Usuários'=>array('index'),
	$usuario->id_usuario=>array('view','id'=>$usuario->id_usuario),
	'Atualizar Usuário',
);

$this->menu=array(
	array('label'=>'Listar Usuários', 'url'=>array('index')),
	array('label'=>'Cadastrar Usuário', 'url'=>array('create')),
	array('label'=>'Visualizar Usuarios', 'url'=>array('view', 'id'=>$usuario->id_usuario)),
	
);
?>

<h1>Atualizar Usuário <?php echo $usuario->nome_usuario; ?></h1>

<?php $this->renderPartial('_form', array('usuario'=>$usuario, 'morador'=>$morador, 'agenciacont'=>$agenciacont)); ?>