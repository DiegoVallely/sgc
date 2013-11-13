<?php
/* @var $this DadoscondominioController */
/* @var $model Dadoscondominio */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_cond'); ?>
		<?php echo $form->textField($model,'id_cond'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_end'); ?>
		<?php echo $form->textField($model,'id_end'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nome_fantasia'); ?>
		<?php echo $form->textField($model,'nome_fantasia',array('size'=>60,'maxlength'=>70)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'razao_social'); ?>
		<?php echo $form->textField($model,'razao_social',array('size'=>60,'maxlength'=>70)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cnpj'); ?>
		<?php echo $form->textField($model,'cnpj',array('size'=>18,'maxlength'=>18)); ?>
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