<?php
/* @var $this FuncionarioController */
/* @var $model Funcionario */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>


	<div class="row">
		<?php echo $form->label($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>60,'maxlength'=>70)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cpf'); ?>
		<?php echo $form->textField($model,'cpf',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefone'); ?>
		<?php echo $form->textField($model,'telefone',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'funcao'); ?>
		<?php echo $form->textField($model,'funcao',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data_admissao'); ?>
		<?php echo $form->textField($model,'data_admissao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data_desligamento'); ?>
		<?php echo $form->textField($model,'data_desligamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hora_ini'); ?>
		<?php echo $form->textField($model,'hora_ini'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hora_fin'); ?>
		<?php echo $form->textField($model,'hora_fin'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->