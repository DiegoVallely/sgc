<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_m')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_m), array('view', 'id'=>$data->id_m)); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('num_casa')); ?>:</b>
	<?php echo CHtml::encode($data->num_casa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('num_moradores')); ?>:</b>
	<?php echo CHtml::encode($data->num_moradores); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />


</div>