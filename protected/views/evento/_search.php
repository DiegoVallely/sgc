<?php
/* @var $this EventoController */
/* @var $model Evento */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_evento'); ?>
		<?php echo $form->textField($model,'id_evento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_m'); ?>
		<?php echo $form->textField($model,'id_m'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_alugar'); ?>
		<?php echo $form->textField($model,'id_alugar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data_evento'); ?>
		<?php echo $form->textField($model,'data_evento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hora_ini'); ?>
		<?php echo $form->textField($model,'hora_ini'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hora_fin'); ?>
		<?php echo $form->textField($model,'hora_fin'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'titulo'); ?>
		<?php echo $form->textField($model,'titulo',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descricao'); ?>
		<?php echo $form->textArea($model,'descricao',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->