<?php
$this->breadcrumbs=array(
	'Gerenciar Mural',
);
?>
<h1>Gerenciar Mural</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'dataProvider'=>$model->search(),
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
