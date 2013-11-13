<div class="form">

<?php $form=$this->beginWidget('BActiveForm', array(
	'id'=>'endereco-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php $this->widget('BAlert',array(

		'content'=>'<p>Fields with <span class="required">*</span> are required.</p>'
	)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="<?php echo $form->fieldClass($model, 'id_end'); ?>">
		<?php echo $form->labelEx($model,'id_end'); ?>
		<div class="input">
			<?php echo $form->textField($model,'id_end'); ?>
			<?php echo $form->error($model,'id_end'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'rua'); ?>">
		<?php echo $form->labelEx($model,'rua'); ?>
		<div class="input">
			<?php echo $form->textField($model,'rua',array('size'=>50,'maxlength'=>50)); ?>
			<?php echo $form->error($model,'rua'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'num'); ?>">
		<?php echo $form->labelEx($model,'num'); ?>
		<div class="input">
			<?php echo $form->textField($model,'num'); ?>
			<?php echo $form->error($model,'num'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'bairro'); ?>">
		<?php echo $form->labelEx($model,'bairro'); ?>
		<div class="input">
			<?php echo $form->textField($model,'bairro',array('size'=>30,'maxlength'=>30)); ?>
			<?php echo $form->error($model,'bairro'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'complemento'); ?>">
		<?php echo $form->labelEx($model,'complemento'); ?>
		<div class="input">
			<?php echo $form->textField($model,'complemento',array('size'=>20,'maxlength'=>20)); ?>
			<?php echo $form->error($model,'complemento'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'cidade'); ?>">
		<?php echo $form->labelEx($model,'cidade'); ?>
		<div class="input">
			<?php echo $form->textField($model,'cidade',array('size'=>30,'maxlength'=>30)); ?>
			<?php echo $form->error($model,'cidade'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'estado'); ?>">
		<?php echo $form->labelEx($model,'estado'); ?>
		<div class="input">
			<?php echo $form->textField($model,'estado',array('size'=>2,'maxlength'=>2)); ?>
			<?php echo $form->error($model,'estado'); ?>
		</div>
	</div>

	<div class="actions">
		<?php echo BHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->