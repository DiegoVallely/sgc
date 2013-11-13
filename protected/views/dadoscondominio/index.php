<?php
/* @var $this DadoscondominioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dadoscondominios',
);

$this->menu=array(
	array('label'=>'Create Dadoscondominio', 'url'=>array('create')),
	array('label'=>'Manage Dadoscondominio', 'url'=>array('admin')),
);
?>

<h1>Dadoscondominios</h1>

<?php
$dadoscondominio=$this->createUrl('dadoscondominio/create'); //my controller file named AdminController.php
$financeiroinicial=$this->createUrl('financeiroinicial/_form');


$this->widget('zii.widgets.jui.CJuiTabs', array(
    'tabs'=>array(
      //  'Geral'=>$this->renderPartial('_form', array('model'=>$model,'endereco'=>$endereco), true),
        'Administrasi Akademik & Kemahasiswaan (AAK)'=>$this->renderPartial('$financeiroinicial', array('model'=>$model), true, false),
    ),
    // additional javascript options for the tabs plugin
    'options'=>array(
        'collapsible'=>false,
        'event'=>'mouseover',
    ),
));

 