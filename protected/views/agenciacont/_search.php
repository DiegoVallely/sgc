<?php
/* @var $this AgenciacontController */
/* @var $model Agenciacont */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_ac'); ?>
		<?php echo $form->textField($model,'id_ac'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_end'); ?>
		<?php echo $form->textField($model,'id_end'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'razao_social'); ?>
		<?php echo $form->textField($model,'razao_social',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cnpj'); ?>
		<?php echo $form->textField($model,'cnpj',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefone'); ?>
		<?php echo $form->textField($model,'telefone',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->