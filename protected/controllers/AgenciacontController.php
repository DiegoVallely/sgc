<?php

class AgenciacontController extends Controller
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
/*	public function accessRules()
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
				'actions'=>array('admin','delete'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}*/

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
		$model=new Agenciacont;
                $endereco =new Endereco;
                $usuario = new Usuario('senhaset');
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Agenciacont'],$_POST['Endereco'],$_POST['Usuario']))
		{
			$model->attributes=$_POST['Agenciacont'];
                        $endereco->attributes=$_POST['Endereco'];
                        $usuario->attributes = $_POST['Usuario'];
                        $usuario->tipo = 3;
               
                         if(isset($_POST['ativo']))
                        $usuario->ativo = 1;
                        
                        $valid=$model->validate();
                        $valid=$endereco->validate() && $valid;	
                        $valid=$usuario->validate() && $valid;
			
                        if($valid){
                            $endereco->save(false);
                            $model->id_end=$endereco->id_end;
                            $model->save(false);
                            $usuario->id_ac= $model->id_ac;
                            $usuario->save(false);                  

			$this->redirect(array('view','id'=>$model->id_ac));
                   }             
            }	            

		$this->render('create',array(
			'model'=>$model,
                        'endereco'=>$endereco,
                        'usuario'=>$usuario,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
                $endereco = Endereco::model()->find(array('condition'=>'id_end=:id_end','params'=>array(':id_end'=>$id)));
		$usuario = Usuario::model()->find(array('condition'=>'id_ac=:id_ac','params'=>array(':id_ac'=>$id)));

		if(isset($_POST['Agenciacont'],$_POST['Endereco'],$_POST['Usuario']))
		{
			$model->attributes=$_POST['Agenciacont'];
                        $endereco->attributes=$_POST['Endereco'];
                        $usuario->attributes = $_POST['Usuario'];
                       if ($usuario->senha || $usuario->senha_repeat)
                            $usuario->scenario = 'senhaset';
                        
                        $usuario->tipo = 3;
               
                         if(isset($_POST['ativo']))
                        $usuario->ativo = 1;
                        
                        $valid=$model->validate();
                        $valid=$endereco->validate() && $valid;	
                        $valid=$usuario->validate() && $valid;
			
                        if($valid){
                            $endereco->save(false);
                            $model->id_end=$endereco->id_end;
                            $model->save(false);
                            $usuario->id_ac= $model->id_ac;
                            $usuario->save(false);                  

			$this->redirect(array('view','id'=>$model->id_ac));
                   }             
            }	            

		$this->render('update',array(
			'model'=>$model,
                        'endereco'=>$endereco,
                        'usuario'=>$usuario,
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
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Agenciacont');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Agenciacont('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Agenciacont']))
			$model->attributes=$_GET['Agenciacont'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Agenciacont the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Agenciacont::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Agenciacont $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='agenciacont-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
