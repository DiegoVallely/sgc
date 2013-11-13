<?php
$this->breadcrumbs=array(
	$model->titulo=>$model->url,
	'Atualizar',
);
?>

<h1>Update <i><?php echo CHtml::encode($model->titulo); ?></i></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>