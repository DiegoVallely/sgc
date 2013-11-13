<?php
/* @var $this AgenciacontController */
/* @var $data Agenciacont */


$this->widget('application.extensions.fullcalendar.FullcalendarGraphWidget', 
    array(
        'data'=>array(
                'title'=> 'All Day Event',
                'start'=> date('Y-m-j')
        ),
        'options'=>array(
            'editable'=>true,
        ),
        'htmlOptions'=>array(
               'style'=>'width:800px;margin: 0 auto;'
        ),
    )
);