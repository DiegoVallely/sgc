<?php
/* @var $this EventoController */
/* @var $model Evento */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'evento-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_m'); ?>
		<?php echo $form->textField($model,'id_m'); ?>
		<?php echo $form->error($model,'id_m'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_alugar'); ?>
		<?php echo $form->textField($model,'id_alugar'); ?>
		<?php echo $form->error($model,'id_alugar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_evento'); ?>
		<?php echo $form->textField($model,'data_evento'); ?>
		<?php echo $form->error($model,'data_evento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hora_ini'); ?>
		<?php echo $form->textField($model,'hora_ini'); ?>
		<?php echo $form->error($model,'hora_ini'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hora_fin'); ?>
		<?php echo $form->textField($model,'hora_fin'); ?>
		<?php echo $form->error($model,'hora_fin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'titulo'); ?>
		<?php echo $form->textField($model,'titulo',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'titulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descricao'); ?>
		<?php echo $form->textArea($model,'descricao',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'descricao'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->