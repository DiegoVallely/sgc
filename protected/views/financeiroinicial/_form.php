<?php
/* @var $this FinanceiroinicialController */
/* @var $model Financeiroinicial */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'financeiroinicial-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

        <div class="row">
		<?php echo $form->labelEx($model,'Dadoscondominio'); ?>
		<?php echo $form->dropDownList($model,'id_cond',$dadoscondominio, array('class'=>'span5')); ?>
		<?php echo $form->error($model,'id_cond'); ?>
	</div>
        
	<div class="row">
		<?php echo $form->labelEx($model,'Mes'); ?>
		<?php echo $form->dropDownList($model,'id_mes', $mes, array('class'=>'span5')); ?>
		<?php echo $form->error($model,'id_mes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ano'); ?>
		<?php echo $form->textField($model,'ano',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'ano'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'saldo_ini'); ?>
		<?php echo $form->textField($model,'saldo_ini',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'saldo_ini'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fundo_caixa_ini'); ?>
		<?php echo $form->textField($model,'fundo_caixa_ini',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'fundo_caixa_ini'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fundo_reserva_ini'); ?>
		<?php echo $form->textField($model,'fundo_reserva_ini',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'fundo_reserva_ini'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->