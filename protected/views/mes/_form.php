<?php
/* @var $this MesController */
/* @var $model Mes */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'mes-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'mes'); ?>
		<?php echo $form->textField($model,'mes',array('size'=>9,'maxlength'=>9)); ?>
		<?php echo $form->error($model,'mes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mes_abrev'); ?>
		<?php echo $form->textField($model,'mes_abrev',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'mes_abrev'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->