<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_end')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_end), array('view', 'id'=>$data->id_end)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rua')); ?>:</b>
	<?php echo CHtml::encode($data->rua); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('num')); ?>:</b>
	<?php echo CHtml::encode($data->num); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bairro')); ?>:</b>
	<?php echo CHtml::encode($data->bairro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('complemento')); ?>:</b>
	<?php echo CHtml::encode($data->complemento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cidade')); ?>:</b>
	<?php echo CHtml::encode($data->cidade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />


</div>