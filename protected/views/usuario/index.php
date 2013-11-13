<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuários'=>array('index'),
	'Buscar',
);

$this->menu=array(
	array('label'=>'Listar Usuários', 'url'=>array('index')),
	array('label'=>'Cadastrar Usuário', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#usuario-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Buscar Usuário</h1>

<p>
Você pode utilizar um operador de comparação(<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) no começo de cada valor de sua busca para especificar qual comparação deve ser feita.
</p>



<div class="search-form" style="display:none">

</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'usuario-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
        'columns'=>array(
		'nome_usuario',
                array(
                'name' => 'morador_search',
                'header'=>'Morador',
                'value' => '$data->morador !==null?$data->morador->nome:"-"',
                ),
                array(
                'name' => 'agenciacont_search',
                'header'=>'Agência Cont.',
                'value' => '$data->agenciacont !==null?$data->agenciacont->razao_social:"-"',
                ),
                'tipo',
                'ativo',
             	array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
