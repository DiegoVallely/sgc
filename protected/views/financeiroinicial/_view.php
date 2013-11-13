<?php
/* @var $this FinanceiroinicialController */
/* @var $data Financeiroinicial */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_finan_ini')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_finan_ini), array('view', 'id'=>$data->id_finan_ini)); ?>
	<br />

       <b><?php echo CHtml::encode($data->getAttributeLabel('id_cond')); ?>:</b>
	<?php echo CHtml::encode($data->id_cond); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_mes')); ?>:</b>
	<?php echo CHtml::encode($data->id_mes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ano')); ?>:</b>
	<?php echo CHtml::encode($data->ano); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('saldo_ini')); ?>:</b>
	<?php echo CHtml::encode($data->saldo_ini); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fundo_caixa_ini')); ?>:</b>
	<?php echo CHtml::encode($data->fundo_caixa_ini); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fundo_reserva_ini')); ?>:</b>
	<?php echo CHtml::encode($data->fundo_reserva_ini); ?>
	<br />


</div>