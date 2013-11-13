<div class="wide form">

<?php $form=$this->beginWidget('BActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="clearfix">
		<?php echo $form->label($model,'id_end'); ?>
		<div class="input">
			<?php echo $form->textField($model,'id_end'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'rua'); ?>
		<div class="input">
			<?php echo $form->textField($model,'rua',array('size'=>50,'maxlength'=>50)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'num'); ?>
		<div class="input">
			<?php echo $form->textField($model,'num'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'bairro'); ?>
		<div class="input">
			<?php echo $form->textField($model,'bairro',array('size'=>30,'maxlength'=>30)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'complemento'); ?>
		<div class="input">
			<?php echo $form->textField($model,'complemento',array('size'=>20,'maxlength'=>20)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'cidade'); ?>
		<div class="input">
			<?php echo $form->textField($model,'cidade',array('size'=>30,'maxlength'=>30)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'estado'); ?>
		<div class="input">
			<?php echo $form->textField($model,'estado',array('size'=>2,'maxlength'=>2)); ?>
		</div>
	</div>

	<div class="actions">
		<?php echo BHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->