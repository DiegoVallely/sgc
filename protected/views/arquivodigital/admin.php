<?php
/* @var $this ArquivodigitalController */
/* @var $model Arquivodigital */

$this->breadcrumbs=array(
	'Arquivo Digital'=>array('index'),
	'Buscar',
);

$this->menu=array(
	array('label'=>'Listar Arquivos Digital', 'url'=>array('index')),
	array('label'=>'Criar Arquivo Digital', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#arquivodigital-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Buscar Arquivo Digital</h1>

<p>
Você pode utilizar um operador de comparação(<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) no começo de cada valor de sua busca para especificar qual comparação deve ser feita.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'arquivodigital-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_ad',
		'nome_img',
		'imagem',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
