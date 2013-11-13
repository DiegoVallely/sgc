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
	'Cadastrar Usuário',
);

$this->menu=array(
	array('label'=>'Listar Usuários', 'url'=>array('index')),
	
);
?>

<h1>Cadastrar Usuário</h1>

<?php $this->renderPartial('_form', array('usuario'=>$usuario, 'morador'=>$morador, 'agenciacont'=>$agenciacont)); ?>