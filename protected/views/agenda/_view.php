<?php
/* @var $this AgendaController */
/* @var $data Agenda */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_agenda')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_agenda), array('view', 'id'=>$data->id_agenda)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_alugar')); ?>:</b>
	<?php echo CHtml::encode($data->id_alugar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_evento')); ?>:</b>
	<?php echo CHtml::encode($data->id_evento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dia')); ?>:</b>
	<?php echo CHtml::encode($data->dia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mes')); ?>:</b>
	<?php echo CHtml::encode($data->mes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ano')); ?>:</b>
	<?php echo CHtml::encode($data->ano); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('link')); ?>:</b>
	<?php echo CHtml::encode($data->link); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('descricao')); ?>:</b>
	<?php echo CHtml::encode($data->descricao); ?>
	<br />

	*/ ?>

</div>