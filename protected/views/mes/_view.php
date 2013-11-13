<?php
/* @var $this MesController */
/* @var $data Mes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_mes')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_mes), array('view', 'id'=>$data->id_mes)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mes')); ?>:</b>
	<?php echo CHtml::encode($data->mes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mes_abrev')); ?>:</b>
	<?php echo CHtml::encode($data->mes_abrev); ?>
	<br />


</div>