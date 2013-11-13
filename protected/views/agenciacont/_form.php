<?php
/* @var $this AgenciacontController */
/* @var $model Agenciacont */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'agenciacont-form',
        'enableClientValidation'=>true,
        'clientOptions'=>array(
		'validateOnSubmit'=>true,
               ),
));  ?>

	<p class="note">Campos marcados com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'razao_social'); ?>
		<?php echo $form->textField($model,'razao_social',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'razao_social'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cnpj'); ?>
		<?php $this->widget('CMaskedTextField', array('model' => $model,'attribute' => 'cnpj',
                 'mask' => '99.999.999/9999-99','htmlOptions' => array('size' => 18)))?>
		<?php echo $form->error($model,'cnpj'); ?>
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
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

        <div class="row">
		<?php echo $form->labelEx($usuario,'nome_usuario'); ?>
		<?php echo $form->textField($usuario,'nome_usuario',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($usuario,'nome_usuario'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($usuario,'senha'); ?>
		<?php echo $form->passwordField($usuario,'senha',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($usuario,'senha'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($usuario,'senha_repeat'); ?>
		<?php echo $form->passwordField($usuario,'senha_repeat',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($usuario,'senha_repeat'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($usuario,'ativo'); ?>
		<?php echo $form->checkBox($usuario,'ativo'); ?>
		<?php echo $form->error($usuario,'ativo'); ?>
	</div>
        
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Cadastrar' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->