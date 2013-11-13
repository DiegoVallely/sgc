<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
                
	</div><!-- header -->

	<div id="mainmenu">
         <?php  
                 if (Yii::app()->usuario->isGuest) {
		 $this->widget('zii.widgets.CMenu',array(
                         'activeCssClass' => 'active',
                         'activateParents' => true,
                		'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
                                    array('label'=>'Morador', 
                                       'url'=>array('/morador'),
                                       'items'=>array(
                                         array('label'=>'Usuário',
                                             'url'=>array('/usuario')),  
                                         )
                              ),
				array('label'=>'Contato', 'url'=>array('/site/contact')),
                                array('label'=>'Sobre', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Iniciar Sessão', 'url'=>array('/site/login'), )
			),
		)); 
                       
            }else {
                    $this->widget('zii.widgets.CMenu',array(
                        'activeCssClass' => 'active',
                        'activateParents' => true,
                        'items'=>array(
                            array('label'=>'Home', 'url'=>array('/site/index')),
                            array('label'=>'Morador', 
                                       'url'=>array('/morador'),
                                       'items'=>array(
                                         array('label'=>'Usuário',
                                             'url'=>array('/usuario')),  
                                         )
                              ),
                            array('label'=>'Funcionário', 
                                      'url'=>array('/funcionario'),
                                      'items' => array(
                                        array('label'=>'Folha de Pagamento',
                                              'url'=>array('/folhapagamento')),
                                        )
                            ),
                            array('label'=>'Contabilidade', 
                                      'url'=>array('/agenciacont'),
                                      'items' => array(
                                        array('label'=>'endereco',
                                              'url'=>array('/endereco')),
                                        )
                                ),
                            array('label'=>'Mural', 
                                      'url'=>array('/mural'),
                                      'items' => array(
                                        array('label'=>'Comentarios',
                                              'url'=>array('/comentario')),
                                        
                                     
                                ),
                             ),
                            
                            
                            
                            array('label'=>'Controle Financeiro',
                                      'url'=>array('/controlefinanceiro'),
                                      'items' => array(
                                        array('label'=>'Despesas',
                                              'url'=>array('/publisher')),
                                        )
                                ),
                            array('label'=>'Arquivos', 'url'=>array('/arquivoDigital')),
                           array('label'=>'Agenda', 
                                        'url'=>array('/agenda'),
                                        'items' => array(
                                        array('label'=>'Alugar Área',
                                              'url'=>array('/alugarArea')),
                                        array('label'=>'Evento',
                                              'url'=>array('/evento')),
                                            
                                            
                                            ),
                                                                    
                               
                               ),
                           
                            array('label'=>'Srbac', 'url'=>array('/srbac'),  'authItemName' => 'Authority'),
                            array('label'=>'cal', 'url'=>array('/cal')),
                            array('label'=>'Encerrar Sessão ('.Yii::app()->usuario->name.')', 'url'=>array('/site/logout'))
                            ),
));
}
?>
</div><!-- mainmenu -->


        

        
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
