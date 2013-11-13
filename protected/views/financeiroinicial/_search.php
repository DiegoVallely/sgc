<?php
/* @var $this FinanceiroinicialController */
/* @var $model Financeiroinicial */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_finan_ini'); ?>
		<?php echo $form->textField($model,'id_finan_ini'); ?>
	</div>
        
	<div class="row">
		<?php echo $form->label($model,'id_cond'); ?>
		<?php echo $form->textField($model,'id_cond'); ?>
	</div>
        
	<div class="row">
		<?php echo $form->label($model,'id_mes'); ?>
		<?php echo $form->textField($model,'id_mes'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ano'); ?>
		<?php echo $form->textField($model,'ano',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'saldo_ini'); ?>
		<?php echo $form->textField($model,'saldo_ini',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fundo_caixa_ini'); ?>
		<?php echo $form->textField($model,'fundo_caixa_ini',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fundo_reserva_ini'); ?>
		<?php echo $form->textField($model,'fundo_reserva_ini',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->