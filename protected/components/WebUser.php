<?php

class WebUser extends CWebUser {
	// Store model to not repeat query.
	private $_model;
	
         public function __get($name)
         {
            if ($this->hasState('__userInfo')) {
                $usuario=$this->getState('__userInfo',array());
                if (isset($usuario[$name])) {
                    return $usuario[$name];
                }
            }

               return parent::__get($name);
          }
        
        
        
	public function getLogin()
	{
		return $this->_nome_usuario;
	}
        
        function getId_M(){
              $usuario = $this->loadUsuario(Yii::app()->usuario->id);
        
              return $usuario->id_m;
        }
        
        function getTipo(){
              $usuario = $this->loadUsuario(Yii::app()->usuario->id);
		return $usuario->tipo;
        }
        
        function getRole(){
		$usuario = $this->loadUsuario(Yii::app()->usuario->id);
		return $usuario->tipo;
	}
	
 
	// verificamos o valor do atributo role com a constante
	// ROLE_ADMIN para sabermos se o usuário é administrador
	function isAdmin(){
                 $usuario = $this->loadUsuario(Yii::app()->usuario->id);
                 return intval($usuario->tipo) == 1;
        }
 
        public function isMorador(){
              $usuario = $this->loadUser(Yii::app()->usuario->id);
         return intval($usuario->tipo) == 2;
        }
        
        public function isAgencia(){
              $usuario = $this->loadUser(Yii::app()->usuario->id);
         return intval($usuario->tipo) == 3;
        }
	// verificamos o valor do atributo role com a constante
	// ROLE_USUARIO para sabermos se o usuário é administrador
	function isUsuario(){
		$usuario = $this->loadUsuario(Yii::app()->usuario->id);
		if ($usuario!==null)
			return intval($usuario->role) == Usuario::ROLE_USUARIO;
		else return false;
	}
 
	// carrega o model do usuário
	protected function loadUsuario($id=null) {
		if($this->_model===null)
		{
			if($id!==null)
				$this->_model=  Usuario::model()->findByPk($id);
		}
		return $this->_model;
	}
}

?>
