<?php
/* @var $this ArquivodigitalController */
/* @var $model Arquivodigital */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'arquivodigital-form',
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos marcados com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nome_img'); ?>
		<?php echo $form->textField($model,'nome_img',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'nome_img'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'imagem'); ?>
		<?php echo $form->fileField($model,'imagem'); ?>
		<?php echo $form->error($model,'imagem'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->