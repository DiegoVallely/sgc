<?php

class nomeValidator extends CValidator
{
	
	protected function validateAttribute( $object, $attribute ){
		if ( !$this->validaNome( $object->$attribute ) )
            $this->addError($object, $attribute, Yii::t('yii','O nome digitado possui caracter(es) não válido(s).'));
	}
    
    public function clientValidateAttribute($object,$attribute) {
    
    }

    private function validaNome($nome){
        $nome =str_replace(' ', '', $nome);
         if (ctype_alpha($nome)) 
                 return true;
         else    return false; 
    }
    
}
