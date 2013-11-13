<?php
/* @var $this ArquivodigitalController */
/* @var $data Arquivodigital */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome_img')); ?>:</b>
	<?php echo CHtml::encode($data->nome_img); ?>
	<br />
        <div class="row">
        <img src="<?php echo Yii::app()->request->baseUrl.'/images/arquivoDigital/'.$data->nome_img.'.jpeg';?> "  width="500" height="600" />

        </div>

        
</div>