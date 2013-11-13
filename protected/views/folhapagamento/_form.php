<?php
/* @var $this FolhapagamentoController */
/* @var $model Folhapagamento */
/* @var $form CActiveForm */

?>
<?php    
          Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl . '/js/jquery/jquery.price_format.1.8.js');    
            Yii::app()->clientScript->registerScript('jquery-priceformat', 
                    " $('input[id*=_salario],[id*=_adiant_sala],[id*=_adiant_sala],[id*=_decimo_terc],[id*=_inss],[id*=_fgts],[id*=_pis],[id*=_honorarios],[id*=_cesta_basica],[id*=_ferias],[id*=_rescisao],[id*=_vale_trasp],[id*=_vale_alim]').priceFormat();");   
 ?>


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'folhapagamento-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Funcionario'); ?>
		<?php echo $form->dropDownList($model,'id_f', $funcionario, array('class'=>'span5')); ?>
		<?php echo $form->error($model,'id_f'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'salario'); ?>
		<?php echo $form->textField($model,'salario',array('size'=>15,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'salario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'adiant_sala'); ?>
		<?php echo $form->textField($model,'adiant_sala',array('size'=>15,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'adiant_sala'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'decimo_terc'); ?>
		<?php echo $form->textField($model,'decimo_terc',array('size'=>15,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'decimo_terc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'inss'); ?>
		<?php echo $form->textField($model,'inss',array('size'=>15,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'inss'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fgts'); ?>
		<?php echo $form->textField($model,'fgts',array('size'=>15,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'fgts'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pis'); ?>
		<?php echo $form->textField($model,'pis',array('size'=>15,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'pis'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'honorarios'); ?>
		<?php echo $form->textField($model,'honorarios',array('size'=>15,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'honorarios'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cesta_basica'); ?>
		<?php echo $form->textField($model,'cesta_basica',array('size'=>15,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'cesta_basica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ferias'); ?>
		<?php echo $form->textField($model,'ferias',array('size'=>15,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'ferias'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rescisao'); ?>
		<?php echo $form->textField($model,'rescisao',array('size'=>15,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'rescisao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vale_trasp'); ?>
		<?php echo $form->textField($model,'vale_trasp',array('size'=>15,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'vale_trasp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vale_alim'); ?>
		<?php echo $form->textField($model,'vale_alim',array('size'=>15,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'vale_alim'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->