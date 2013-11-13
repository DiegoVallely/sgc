<?php
/* @var $this MuralController */
/* @var $model Mural */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_mu'); ?>
		<?php echo $form->textField($model,'id_mu'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_m'); ?>
		<?php echo $form->textField($model,'id_m'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'texto'); ?>
		<?php echo $form->textField($model,'texto',array('size'=>60,'maxlength'=>1000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'criado_em'); ?>
		<?php echo $form->textField($model,'criado_em'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->