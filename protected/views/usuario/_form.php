<?php
/* @var $this UsuarioController */
/* @var $usuario Usuario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuario-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,),
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos marcados com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($usuario); ?>

        
        <div class="row">
        <?php if($usuario->id_m!=null)
                echo $form->labelEx($usuario,'Morador');
              else{ if($usuario->id_ac!=null) 
                       echo $form->labelEx($usuario,'Agência de Cont.');
              }
        ?>
        <?php if($usuario->id_m!=null)
                echo $form->dropDownList($usuario,'id_m', $morador, array('class'=>'span5'));
              else{ if($usuario->id_ac!=null)
                       echo $form->dropDownList($usuario,'id_ac', $agenciacont, array('class'=>'span5'));
              }
        ?>
        </div> 
        
        <div class="row">
		<?php echo $form->labelEx($usuario,'nome_usuario'); ?>
		<?php echo $form->textField($usuario,'nome_usuario',array('size'=>20,'maxlength'=>30)); ?>
		<?php echo $form->error($usuario,'nome_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($usuario,'senha'); ?>
		<?php echo $form->passwordField($usuario,'senha',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($usuario,'senha'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($usuario,'senha_repeat'); ?>
		<?php echo $form->passwordField($usuario,'senha_repeat',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($usuario,'senha_repeat'); ?>
	</div>
        
     	<div class="row">
		<?php echo $form->labelEx($usuario,'tipo'); ?>
		<?php echo $form->textField($usuario,'tipo'); ?>
		<?php echo $form->error($usuario,'tipo'); ?>
	</div>
        
	<div class="row">
		<?php echo $form->labelEx($usuario,'ativo'); ?>
		<?php echo $form->checkBox($usuario,'ativo'); ?>
		<?php echo $form->error($usuario,'ativo'); ?>
	</div>
       
        <div class="row">
        <b>Atribuições</b><br/>
        <ul class="roles">
          <?php foreach($usuario->assignments as $a) {
              echo $this->renderPartial('//includes/role_li',
                array(
                    'usuario' => $usuario,
                    'assignment' => $a,
                ));
          } ?>
        </ul>
        
        <?php echo $this->renderPartial('//includes/role_select',
            array(
                'usuario' => $usuario,
            ));
        ?>
        </div>
        
        
        
	<div class="row buttons">
		<?php echo CHtml::submitButton($usuario->isNewRecord ? 'Cadastrar' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->