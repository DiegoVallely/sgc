<?php
/* @var $this FolhapagamentoController */
/* @var $model Folhapagamento */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_fp'); ?>
		<?php echo $form->textField($model,'id_fp'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_f'); ?>
		<?php echo $form->textField($model,'id_f'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'salario'); ?>
		<?php echo $form->textField($model,'salario',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'adiant_sala'); ?>
		<?php echo $form->textField($model,'adiant_sala',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'decimo_terc'); ?>
		<?php echo $form->textField($model,'decimo_terc',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'inss'); ?>
		<?php echo $form->textField($model,'inss',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fgts'); ?>
		<?php echo $form->textField($model,'fgts',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pis'); ?>
		<?php echo $form->textField($model,'pis',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'honorarios'); ?>
		<?php echo $form->textField($model,'honorarios',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cesta_basica'); ?>
		<?php echo $form->textField($model,'cesta_basica',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ferias'); ?>
		<?php echo $form->textField($model,'ferias',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rescisao'); ?>
		<?php echo $form->textField($model,'rescisao',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vale_trasp'); ?>
		<?php echo $form->textField($model,'vale_trasp',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vale_alim'); ?>
		<?php echo $form->textField($model,'vale_alim',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->