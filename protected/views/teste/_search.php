<?php
/* @var $this TesteController */
/* @var $model Teste */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_teste'); ?>
		<?php echo $form->textField($model,'id_teste'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'teste'); ?>
		<?php echo $form->textArea($model,'teste',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->