<?php

class MuralController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/columnmural';
        private $_model;
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
	}/*

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView()
	{       
                $mural=$this->loadModel();
                $comentario=$this->newComentario($mural);
                
		$this->render('view',array(
			'model'=>$mural,
                        'comentario'=>$comentario,
		));
	}

        
        
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Mural;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Mural']))
		{
			$model->attributes=$_POST['Mural'];
                        $model->id_m=Yii::app()->usuario->id_m;
                        
                        if($model->save())
				$this->redirect(array('view','id'=>$model->id_mu));
		}

		$this->render('create',array(
			'model'=>$model,
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
                 if(Yii::app()->usuario->id_m==$model->id_m){
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

        if(isset($_POST['Mural']))
		{
			$model->attributes=$_POST['Mural'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_mu));
		}
                 
		$this->render('update',array(
			'model'=>$model,
		));
                 }
                 else throw new CHttpException(403, 'Acesso Negado!.');
         }

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete()
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel()->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(array('index'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
            $criteria=new CDbCriteria(array(
                'order'=>'atualizado_em DESC',
                'with'=>'commentCount',
            ));
           
 
            $dataProvider=new CActiveDataProvider('Mural', array(
                  'pagination'=>array(
                      'pageSize'=>Yii::app()->params['muraisPerPage'],
                   ),
                     'criteria'=>$criteria,
            ));
 
             $this->render('index',array(
                  'dataProvider'=>$dataProvider,
             ));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Mural('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Mural']))
			$model->attributes=$_GET['Mural'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Mural the loaded model
	 * @throws CHttpException
	 */
        public function actionEditarMural()
	{
		$model=new Mural('searchMural');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Mural']))
			$model->attributes=$_GET['Mural'];

		$this->render('EditarMural',array(
			'model'=>$model,
		));
	}
        
        
        public function actionEditMural()
        {
         $this->actionUpdate(Yii::app()->usuario->id_usuario);
        }
        
        
	public function loadModel()
	{
		if($this->_model===null)
		{
			if(isset($_GET['id']))
			{
				$this->_model=Mural::model()->findByPk($_GET['id']);
			}
			if($this->_model===null)
				throw new CHttpException(404,'The requested page does not exist.');
		}
		return $this->_model;
	}

        protected function newComentario($mural)
        {
            $comentario=new Comentario;
            
            if(isset($_POST['ajax'])&& $_POST['ajax']==='comentario-form')
            {
                echo CActiveForm::validate($comentario);
                    Yii::app()->end();
                
            }
            if(isset($_POST['Comentario']))
            {
                $comentario->attributes=$_POST['Comentario'];
                if($mural->addComentario($comentario))
                {              
                        Yii::app()->usuario->setFlash('commentSubmitted','Comentário enviado com sucesso!');
                    $this->refresh();
                }
            }
            return $comentario;
         }
        
        
	
}
