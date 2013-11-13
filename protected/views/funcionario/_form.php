<?php
/* @var $this FuncionarioController */
/* @var $model Funcionario */
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

		<p class="note">Campos marcados com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>60,'maxlength'=>70)); ?>
		<?php echo $form->error($model,'nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cpf'); ?>
		<?php $this->widget('CMaskedTextField', array('model' => $model,'attribute' => 'cpf',
                 'mask' => '999.999.999-99','htmlOptions' => array('size' => 14)))?>
                <?php echo $form->error($model,'cpf'); ?>
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
		<?php echo $form->labelEx($model,'telefone'); ?>
                <?php $this->widget('CMaskedTextField', array('model' => $model,'attribute' => 'telefone',
                'mask' => '(99) 9999.9999','htmlOptions' => array('size' => 14) ))?>
		<?php echo $form->error($model,'telefone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'funcao'); ?>
		<?php echo $form->textField($model,'funcao',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'funcao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_admissao'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', 
                            array(
                            'name' => 'admissao_date',
                            'attribute' => 'data_admissao',
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

		<?php echo $form->error($model,'data_admissao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_desligamento'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', 
                            array(
                            'name' => 'desligamento_date',
                            'attribute' => 'data_desligamento',
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
		<?php echo $form->error($model,'data_desligamento'); ?>
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

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->