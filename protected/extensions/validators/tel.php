<?php

class tel extends CValidator
{
	
	protected function validateAttribute( $object, $attribute ){
		if ( !$this->validaTel( $object->$attribute ) )
            $this->addError($object, $attribute, Yii::t('yii','O Telefone digitado não é válido.'));
	}
    
    public function clientValidateAttribute($object,$attribute) {
    
    }

    
 

    private function validaTel($tel){
       $tel = str_pad(preg_replace('/[^0-9_]/', '', $tel), 14, '0', STR_PAD_LEFT);  
    //Verifica se o que foi digitado sao apenas numeros
         if (ctype_digit($tel)) 
            return true;

         else  return false;
       
    }
    
}