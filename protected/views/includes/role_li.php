<?php
 echo "<li id=\"role-" . $assignment->itemname. "\">" .
 $assignment->itemname .
 " <input class=\"revoke\" type=\"button\" " .
    "onClick=\"revoke('" .
        Yii::app()->controller->createUrl("/usuario/revokeRole",
            array("id" => $usuario->id_usuario,
                  "role_name"=>$assignment->itemname,
                  "ajax"=>1)) . "', '" .
                  $assignment->itemname . "', '" .
                  Yii::app()->controller->createUrl("/usuario/reloadRoles",
                    array("id" => $usuario->id_usuario)) .
            "')\" " .
        "value=\"Revoke\" " .
 "/>" .
 "</li>";