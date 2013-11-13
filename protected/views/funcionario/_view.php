<?php
/* @var $this FuncionarioController */
/* @var $data Funcionario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_f')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_f), array('view', 'id'=>$data->id_f)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
	<?php echo CHtml::encode($data->nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cpf')); ?>:</b>
	<?php echo CHtml::encode($data->cpf); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefone')); ?>:</b>
	<?php echo CHtml::encode($data->telefone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('funcao')); ?>:</b>
	<?php echo CHtml::encode($data->funcao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_admissao')); ?>:</b>
	<?php echo CHtml::encode($data->data_admissao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_desligamento')); ?>:</b>
	<?php echo CHtml::encode($data->data_desligamento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora_ini')); ?>:</b>
	<?php echo CHtml::encode($data->hora_ini); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora_fin')); ?>:</b>
	<?php echo CHtml::encode($data->hora_fin); ?>
	<br />

	

</div>