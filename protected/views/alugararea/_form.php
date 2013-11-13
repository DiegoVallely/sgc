<?php
/* @var $this AlugarareaController */
/* @var $model Alugararea */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'funcionario-form',
	 'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
               ),
    
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_m'); ?>
		<?php echo $form->textField($model,'id_m'); ?>
		<?php echo $form->error($model,'id_m'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_aluguel'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', 
                            array(
                            'name' => 'aluguel_date',
                            'attribute' => 'data_aluguel',
                            'model'=>$model,
                            'language' => 'pt',
                            'options'=> array(
                            'dateFormat' =>'dd/mm/yy',
                            'altFormat' =>'dd/mm/yy',
                            'changeMonth' => true,
                            'changeYear' => true,
                            
                            ),
                            )); 
                            ?> 

		<?php echo $form->error($model,'data_aluguel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hora_ini'); ?>
		<?php $this->widget('CMaskedTextField', array('model' => $model,'attribute' => 'hora_ini',
                 'mask' => '99:99','htmlOptions' => array('size' => 5)))?>
		<?php echo $form->error($model,'hora_ini'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hora_fin'); ?>
		<?php $this->widget('CMaskedTextField', array('model' => $model,'attribute' => 'hora_fin',
                 'mask' => '99:99','htmlOptions' => array('size' => 5)))?>
		<?php echo $form->error($model,'hora_fin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'motivo'); ?>
		<?php echo $form->textArea($model,'motivo',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'motivo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->dropDownList($model,'status',Lookup::items('alugarAreaStatus')); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->