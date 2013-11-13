<?php
//Yii::setPathOfAlias( dirname(__FILE__) . '/../extensions/GCalendar.php');
/* @var $this AgendaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Agendas',
);

$this->menu=array(
	array('label'=>'Create Agenda', 'url'=>array('create')),
	array('label'=>'Manage Agenda', 'url'=>array('admin')),
);
?>

<h1>Agendas</h1>
