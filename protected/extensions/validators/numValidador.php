<?php

class numValidador extends CValidator
{
	
	protected function validateAttribute( $object, $attribute ){
		if ( !$this->validaNum( $object->$attribute ) )
            $this->addError($object, $attribute, Yii::t('yii','O número digitado não é válido.'));
	}
    
    public function clientValidateAttribute($object,$attribute) {
    
    }

    private function validaNum($num){
        $num = str_pad(preg_replace('/[^0-9_]/', '', $num), 3, '0', STR_PAD_LEFT);
        //Verifica se o que foi digitado sao apenas numeros
         if (ctype_digit($num)) 
            return true;

         else  return false;
       
    }
    
}