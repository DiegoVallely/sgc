<?php
/* @var $this AlugarareaController */
/* @var $data Alugararea */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_alugar')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_alugar), array('view', 'id'=>$data->id_alugar)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_m')); ?>:</b>
	<?php echo CHtml::encode($data->id_m); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_aluguel')); ?>:</b>
	<?php echo CHtml::encode($data->data_aluguel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora_ini')); ?>:</b>
	<?php echo CHtml::encode($data->hora_ini); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora_fin')); ?>:</b>
	<?php echo CHtml::encode($data->hora_fin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('motivo')); ?>:</b>
	<?php echo CHtml::encode($data->motivo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />


</div>