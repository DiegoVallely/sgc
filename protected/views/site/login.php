<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Iniciar Sessão',
);
?>

<h1>Iniciar Sessão</h1>



<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	

	<div class="row">
		<?php echo $form->labelEx($model,'nome_usuario'); ?>
		<?php echo $form->textField($model,'nome_usuario'); ?>
		<?php echo $form->error($model,'nome_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'senha'); ?>
		<?php echo $form->passwordField($model,'senha'); ?>
		<?php echo $form->error($model,'senha'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Iniciar Sessão'); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
