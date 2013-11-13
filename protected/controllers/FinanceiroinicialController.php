<?php

class FinanceiroinicialController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	
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
		$model=new Financeiroinicial;
                $mes = new Mes;
		$dadoscondominio = new Dadoscondominio; 
                // Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Financeiroinicial']))
		{
			$model->attributes=$_POST['Financeiroinicial'];
                        if($model->save())
				$this->redirect(array('view','id'=>$model->id_finan_ini));
		}
                
                $criteria = new CDbCriteria();
                $criteria->order = "nome_fantasia ASC";
                $dadoscondominio = CHtml::listData(Dadoscondominio::model()->findAll($criteria), 'id_cond', 'nome_fantasia');
                
                $criteria = new CDbCriteria();
                $mes = CHtml::listData(Mes::model()->findAll($criteria), 'id_mes', 'mes');
                

                

		$this->render('create',array(
			'model'=>$model,
                        'mes'=>$mes,
                        'dadoscondominio'=>$dadoscondominio,
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

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Financeiroinicial']))
		{
			$model->attributes=$_POST['Financeiroinicial'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_finan_ini));
		}
                
                $criteria = new CDbCriteria();
                $criteria->order = "nome_fantasia ASC";
                $dadoscondominio = CHtml::listData(Dadoscondominio::model()->findAll($criteria), 'id_cond', 'nome_fantasia');
                
                
                
                $criteria = new CDbCriteria();
                //$criteria->order = "id_mes ASC";
                $mes = CHtml::listData(Mes::model()->findAll($criteria), 'id_mes', 'mes');
                

                

		$this->render('create',array(
			'model'=>$model,
                        'dadoscondominio'=>$dadoscondominio,
                        'mes'=>$mes,
                        
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
		$dataProvider=new CActiveDataProvider('Financeiroinicial');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Financeiroinicial('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Financeiroinicial']))
			$model->attributes=$_GET['Financeiroinicial'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Financeiroinicial the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Financeiroinicial::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Financeiroinicial $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='financeiroinicial-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
