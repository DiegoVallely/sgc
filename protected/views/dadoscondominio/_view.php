<?php
/* @var $this DadoscondominioController */
/* @var $data Dadoscondominio */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome_fantasia')); ?>:</b>
	<?php echo CHtml::encode($data->nome_fantasia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('razao_social')); ?>:</b>
	<?php echo CHtml::encode($data->razao_social); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cnpj')); ?>:</b>
	<?php echo CHtml::encode($data->cnpj); ?>
	<br />
        
        <b><?php echo CHtml::encode($data->getAttributeLabel('num_unidades')); ?>:</b>
	<?php echo CHtml::encode($data->num_unidades); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />


</div>