<?php
/* @var $this ArquivodigitalController */
/* @var $model Arquivodigital */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_ad'); ?>
		<?php echo $form->textField($model,'id_ad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nome_img'); ?>
		<?php echo $form->textField($model,'nome_img',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'imagem'); ?>
		<?php echo $form->textField($model,'imagem'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->