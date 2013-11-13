<div class="wide form">

<?php $form=$this->beginWidget('BActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="clearfix">
		<?php echo $form->label($model,'id_m'); ?>
		<div class="input">
			<?php echo $form->textField($model,'id_m'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'nome'); ?>
		<div class="input">
			<?php echo $form->textField($model,'nome',array('size'=>60,'maxlength'=>70)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'cpf'); ?>
		<div class="input">
			<?php echo $form->textField($model,'cpf',array('size'=>14,'maxlength'=>14)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'telefone'); ?>
		<div class="input">
			<?php echo $form->textField($model,'telefone',array('size'=>14,'maxlength'=>14)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'num_casa'); ?>
		<div class="input">
			<?php echo $form->textField($model,'num_casa'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'num_moradores'); ?>
		<div class="input">
			<?php echo $form->textField($model,'num_moradores'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'email'); ?>
		<div class="input">
			<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
		</div>
	</div>

	<div class="actions">
		<?php echo BHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->