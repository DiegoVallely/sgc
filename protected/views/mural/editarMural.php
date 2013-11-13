<?php
$this->breadcrumbs=array(
	'Editar Mural',
);
?>
<h1>Editar Mural</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'dataProvider'=>$model->searchMural(),
	'filter'=>$model,
	'columns'=>array(
		array(
			'name'=>'titulo',
			'type'=>'raw',
			'value'=>'CHtml::link(CHtml::encode($data->titulo), $data->url)'
		),
		
		array(
			'name'=>'criado_em',
			'type'=>'datetime',
			'filter'=>false,
		),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
