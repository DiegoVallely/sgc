<?php
/* @var $this ComentarioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Comentarios',
);


?>

<h1>Comentarios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
