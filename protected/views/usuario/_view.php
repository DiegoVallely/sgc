<?php
/* @var $this UsuarioController */
/* @var $data Usuario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_usuario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_usuario), array('view', 'id'=>$data->id_usuario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_m')); ?>:</b>
	<?php echo CHtml::encode($data->id_m); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_ac')); ?>:</b>
	<?php echo CHtml::encode($data->id_ac); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->nome_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('senha_hash')); ?>:</b>
	<?php echo CHtml::encode($data->senha_hash); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
	<?php echo CHtml::encode($data->tipo); ?>
	<br />
        
        <b><?php echo CHtml::encode($data->getAttributeLabel('ativo')); ?>:</b>
	<?php echo CHtml::encode($data->ativo); ?>
	<br />


</div>