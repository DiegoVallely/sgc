<?php
/* @var $this EventoController */
/* @var $data Evento */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_evento')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_evento), array('view', 'id'=>$data->id_evento)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_m')); ?>:</b>
	<?php echo CHtml::encode($data->id_m); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_alugar')); ?>:</b>
	<?php echo CHtml::encode($data->id_alugar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_evento')); ?>:</b>
	<?php echo CHtml::encode($data->data_evento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora_ini')); ?>:</b>
	<?php echo CHtml::encode($data->hora_ini); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora_fin')); ?>:</b>
	<?php echo CHtml::encode($data->hora_fin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo')); ?>:</b>
	<?php echo CHtml::encode($data->titulo); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('descricao')); ?>:</b>
	<?php echo CHtml::encode($data->descricao); ?>
	<br />

	*/ ?>

</div>