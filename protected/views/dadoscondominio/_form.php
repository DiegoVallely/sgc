<?php
/* @var $this DadoscondominioController */
/* @var $model Dadoscondominio */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dadoscondominio-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	

	<div class="row">
		<?php echo $form->labelEx($model,'nome_fantasia'); ?>
		<?php echo $form->textField($model,'nome_fantasia',array('size'=>60,'maxlength'=>70)); ?>
		<?php echo $form->error($model,'nome_fantasia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'razao_social'); ?>
		<?php echo $form->textField($model,'razao_social',array('size'=>60,'maxlength'=>70)); ?>
		<?php echo $form->error($model,'razao_social'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cnpj'); ?>
		<?php echo $form->textField($model,'cnpj',array('size'=>18,'maxlength'=>18)); ?>
		<?php echo $form->error($model,'cnpj'); ?>
	</div>

        <div class="row">
		<?php echo $form->labelEx($model,'num_unidades'); ?>
		<?php echo $form->textField($model,'num_unidades'); ?>
		<?php echo $form->error($model,'num_unidades'); ?>
	</div>
        
         <div class="row">
		<?php echo $form->labelEx($endereco,'rua'); ?>
		<?php echo $form->textField($endereco,'rua',array('size'=>60,'maxlength'=>70)); ?>
		<?php echo $form->error($endereco,'rua'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($endereco,'num'); ?>
		<?php echo $form->textField($endereco,'num'); ?>
		<?php echo $form->error($endereco,'num'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($endereco,'bairro'); ?>
		<?php echo $form->textField($endereco,'bairro',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($endereco,'bairro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($endereco,'complemento'); ?>
		<?php echo $form->textField($endereco,'complemento',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($endereco,'complemento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($endereco,'cidade'); ?>
		<?php echo $form->textField($endereco,'cidade',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($endereco,'cidade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($endereco,'estado'); ?>
		<?php echo $form->textField($endereco,'estado',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($endereco,'estado'); ?>
	</div>
        
        
	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

        
  <div class="span6">
        
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->