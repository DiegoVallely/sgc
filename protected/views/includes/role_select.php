<div id="role_list">
 <b>Não Atribuidos</b><br/>
 <?php echo CHtml::activeDropDownList($usuario,'role',
    SHtml::listData(
      $usuario->getUnassignedRoles(), 'name', 'name'),
 array('size'=>5, 'class'=>'dropdown')); ?>
 <br/>
 <input class="assign" type="button" 
    onClick="assign('<?php
       echo Yii::app()->controller->createUrl(
         "/usuario/assignRole",
    array("id"=>$usuario->id_usuario)); ?>','<?php
       echo Yii::app()->controller->createUrl(
         "/usuario/reloadRoles",
    array("id"=>$usuario->id_usuario)); ?>')"
    value="Adicionar"/>
</div>