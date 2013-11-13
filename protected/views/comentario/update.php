<?php
$this->breadcrumbs=array(
	'Comments'=>array('index'),
	'Update Comment #'.$model->id_come,
);
?>

<h1>Update Comment #<?php echo $model->id_come; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>