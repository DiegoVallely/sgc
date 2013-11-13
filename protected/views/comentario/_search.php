<?php
/* @var $this ComentarioController */
/* @var $model Comentario */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_come'); ?>
		<?php echo $form->textField($model,'id_come'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_m'); ?>
		<?php echo $form->textField($model,'id_m'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_mu'); ?>
		<?php echo $form->textField($model,'id_mu'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'criado_em'); ?>
		<?php echo $form->textField($model,'criado_em'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comentario'); ?>
		<?php echo $form->textField($model,'comentario',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->