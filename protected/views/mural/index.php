<?php
/* @var $this MuralController */
/* @var $dataProvider CActiveDataProvider */

$this->menu=array(
);
?>



<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'template'=>"{items}\n{pager}",
)); ?>
  



