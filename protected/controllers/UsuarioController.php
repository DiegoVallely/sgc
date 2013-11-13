<?php

class UsuarioController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';
        
	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			//'accessControl', // perform access control for CRUD operations
			//'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	/*public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('delete'),
				'users'=>array('admin'),
                        ),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}/*

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$usuario=new Usuario('senhaset');
                $morador=new Morador;
                $agenciacont=new Agenciacont;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Usuario']))
		{
			$usuario->attributes=$_POST['Usuario'];
                         if(isset($_POST['ativo']))
                              $usuario->ativo = 1;
                         
			if($usuario->save())
				$this->redirect(array('view','id'=>$usuario->id_usuario));
		}
                $criteria = new CDbCriteria();
                $criteria->order = "nome ASC";
                $morador = CHtml::listData(Morador::model()->findAll($criteria), 'id_m', 'nome');
		
                $criteria = new CDbCriteria();
                $criteria->order = "razao_social ASC";
                $agenciacont = CHtml::listData(Agenciacont::model()->findAll($criteria), 'id_ac', 'razao_social');
                
                
                
                $this->render('create',array(
			'usuario'=>$usuario,
                        'morador'=>$morador,
                        'agenciacont'=>$agenciacont,		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$usuario=$this->loadModel($id);
                
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Usuario']))
		{       
			$usuario->attributes=$_POST['Usuario'];
                        if ($usuario->senha || $usuario->senha_repeat)
                            $usuario->scenario = 'senhaset';

			if($usuario->save())
				$this->redirect(array('view','id'=>$usuario->id_usuario));
		}

                $criteria = new CDbCriteria();
                $criteria->order = "nome ASC";
                $morador = CHtml::listData(Morador::model()->findAll($criteria), 'id_m', 'nome');
		
           
                $criteria = new CDbCriteria();
                $criteria->order = "razao_social ASC";
                $agenciacont = CHtml::listData(Agenciacont::model()->findAll($criteria), 'id_ac', 'razao_social');
                
                $this->render('update',array(
			'usuario'=>$usuario,
                        'morador'=>$morador,
                        'agenciacont'=>$agenciacont,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
	}

	
	
	/**
	 * Manages all models.
	 */
	public function actionIndex()
	{
		$model=new Usuario('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Usuario']))
			$model->attributes=$_GET['Usuario'];

		$this->render('index',array(
			'model'=>$model,
		));
	}
        public function actionAssignRole($id)
        {
        // request must be made via ajax
        if(isset($_GET['ajax']) && isset($_GET['role'])) {
                $model=$this->loadModel($id);
                $auth = Yii::app()->authManager;
                $role = CHttpRequest::getParam('role');
                $auth->assign($role, $id, '', '');
                $role=Assignments::model()->find("itemname='" .$role . "'");
                $this->renderPartial('//includes/role_li',array(
                'usuario'=>$model,
                'assignment'=>$role,
                 ), false, true);
        }
        else
        throw new CHttpException(400,'Invalid request.');
        }
        
        public function actionRevokeRole($id)
        {// request must be made via ajax
            if(isset($_GET['ajax'])) {
            $auth = Yii::app()->authManager;
            $auth->revoke($_GET['role_name'], $id);
            }
            else
            throw new CHttpException(400,'Invalid request.');
        } 

        public function actionReloadRoles($id)
        {
          if(isset($_GET['ajax'])) {
              $model=$this->loadModel($id);
              $this->renderPartial 
                    ('//includes/role_select',array(
                'usuario'=>$model,
              ), false, true);
            }
            else
             throw new CHttpException(400,'Invalid request.');
        }
        
        
        
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Usuario the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Usuario::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Usuario $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='usuario-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
