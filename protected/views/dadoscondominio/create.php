<?php
/* @var $this DadoscondominioController */
/* @var $model Dadoscondominio */

$this->breadcrumbs=array(
	'Dadoscondominios'=>array('index'),
	'Create',
);


?>

<div class="row-fluid">
        <div class="span6">
  	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>"Dados Condomínio",
		));
		
            ?>
        <?php        
        $this->widget('zii.widgets.jui.CJuiTabs', array(
		'tabs'=>array(
			'Geral'=>$this->renderPartial('_form', array('model'=>$model,'endereco'=>$endereco), true),
			//'Financeiro'=>$this->renderPartial('//financeiroinicial/create'), 
			'StaticTab 3'=>'teste',
		),
		// additional javascript options for the tabs plugin
		'options'=>array(
			'collapsible'=>true,
		),
	));
	?>
            <?php $this->endWidget();?>
    </div>


 <?php
$this->menu=array(
	array('label'=>'List Dadoscondominio', 'url'=>array('index')),
	array('label'=>'Manage Dadoscondominio', 'url'=>array('admin')),
);
?>

</div>

