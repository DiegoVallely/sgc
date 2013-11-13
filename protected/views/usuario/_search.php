<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
        
        <div class="row">
		<?php echo $form->label($model,'nome_usuario'); ?>
		<?php echo $form->textField($model,'nome_usuario',array('size'=>20,'maxlength'=>30)); ?>
	</div>
        
        <div class="row">
                <?php echo $form->labelEx($model,'morador_search'); ?>
		<?php echo $form->textField($model,'morador_search',array('size'=>20,'maxlength'=>50)); ?>
		
	</div>
	 
        <div class="row">
		<?php echo $form->labelEx($model,'agenciacont_search'); ?>
		<?php echo $form->textField($model,'agenciacont_search',array('size'=>20,'maxlength'=>50)); ?>
		
	</div>
    
    
	<div class="row">
		<?php echo $form->label($model,'tipo'); ?>
		<?php echo $form->textField($model,'tipo'); ?>
	</div>

        <div class="row">
		<?php echo $form->label($model,'ativo'); ?>
		<?php echo $form->checkBox($model,'ativo'); ?>
	</div>
    
	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->