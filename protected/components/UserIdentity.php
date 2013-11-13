<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
        private $_id;
        private $id_m;
        public $nome_usuario;
        public $senha;
        public $remenberMe;
	
        
        
	public function authenticate()
	{
		$usuario = Usuario::model()->findByAttributes(array(
                'nome_usuario' => $this->nome_usuario
                ));
                      
                if($usuario===null)
                      $this->errorCode=self::ERROR_USERNAME_INVALID;
                else
                    if ($usuario->senha_hash!==md5($this->senha))
                    {   $this->_id=$usuario->id_usuario;
                        if($usuario->id_m !=null)
                        $this->setState('id_m', $usuario->id_m);
                        $this->setState('nome_usuario', $usuario->nome_usuario);
                        $this->errorCode=self::ERROR_NONE;
                        
                    }
                        else
                            $this->errorCode=self::ERROR_PASSWORD_INVALID;
                return !$this->errorCode;
        }
       
       public function getId()
        {
        return $this->id_m;
        }
}