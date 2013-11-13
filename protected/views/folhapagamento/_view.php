<?php
/* @var $this FolhapagamentoController */
/* @var $data Folhapagamento */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_fp')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_fp), array('view', 'id'=>$data->id_fp)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_f')); ?>:</b>
	<?php echo CHtml::encode($data->id_f); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('salario')); ?>:</b>
	<?php echo CHtml::encode($data->salario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adiant_sala')); ?>:</b>
	<?php echo CHtml::encode($data->adiant_sala); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('decimo_terc')); ?>:</b>
	<?php echo CHtml::encode($data->decimo_terc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inss')); ?>:</b>
	<?php echo CHtml::encode($data->inss); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fgts')); ?>:</b>
	<?php echo CHtml::encode($data->fgts); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('pis')); ?>:</b>
	<?php echo CHtml::encode($data->pis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('honorarios')); ?>:</b>
	<?php echo CHtml::encode($data->honorarios); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cesta_basica')); ?>:</b>
	<?php echo CHtml::encode($data->cesta_basica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ferias')); ?>:</b>
	<?php echo CHtml::encode($data->ferias); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rescisao')); ?>:</b>
	<?php echo CHtml::encode($data->rescisao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vale_trasp')); ?>:</b>
	<?php echo CHtml::encode($data->vale_trasp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vale_alim')); ?>:</b>
	<?php echo CHtml::encode($data->vale_alim); ?>
	<br />

	*/ ?>

</div>