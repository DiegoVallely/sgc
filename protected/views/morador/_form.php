<div class="form">

<?php $form=$this->beginWidget('BActiveForm', array(
	'id'=>'morador-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php $this->widget('BAlert',array(

		'content'=>'<p>Fields with <span class="required">*</span> are required.</p>'
	)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="<?php echo $form->fieldClass($model, 'id_m'); ?>">
		<?php echo $form->labelEx($model,'id_m'); ?>
		<div class="input">
			<?php echo $form->textField($model,'id_m'); ?>
			<?php echo $form->error($model,'id_m'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'nome'); ?>">
		<?php echo $form->labelEx($model,'nome'); ?>
		<div class="input">
			<?php echo $form->textField($model,'nome',array('size'=>60,'maxlength'=>70)); ?>
			<?php echo $form->error($model,'nome'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'cpf'); ?>">
		<?php echo $form->labelEx($model,'cpf'); ?>
		<div class="input">
			<?php echo $form->textField($model,'cpf',array('size'=>14,'maxlength'=>14)); ?>
			<?php echo $form->error($model,'cpf'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'telefone'); ?>">
		<?php echo $form->labelEx($model,'telefone'); ?>
		<div class="input">
			<?php echo $form->textField($model,'telefone',array('size'=>14,'maxlength'=>14)); ?>
			<?php echo $form->error($model,'telefone'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'num_casa'); ?>">
		<?php echo $form->labelEx($model,'num_casa'); ?>
		<div class="input">
			<?php echo $form->textField($model,'num_casa'); ?>
			<?php echo $form->error($model,'num_casa'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'num_moradores'); ?>">
		<?php echo $form->labelEx($model,'num_moradores'); ?>
		<div class="input">
			<?php echo $form->textField($model,'num_moradores'); ?>
			<?php echo $form->error($model,'num_moradores'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'email'); ?>">
		<?php echo $form->labelEx($model,'email'); ?>
		<div class="input">
			<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
			<?php echo $form->error($model,'email'); ?>
		</div>
	</div>

	<div class="actions">
		<?php echo BHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->