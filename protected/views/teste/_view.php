<?php
/* @var $this TesteController */
/* @var $data Teste */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_teste')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_teste), array('view', 'id'=>$data->id_teste)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('teste')); ?>:</b>
	<?php echo CHtml::encode($data->teste); ?>
	<br />


</div>