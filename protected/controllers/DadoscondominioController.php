<?php

class DadoscondominioController extends Controller
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
		$model=new Dadoscondominio;
                $endereco=new Endereco;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Dadoscondominio'],$_POST['Endereco']))
		{
			$model->attributes=$_POST['Dadoscondominio'];
                         $endereco->attributes=$_POST['Endereco'];
                         
			 $valid=$model->validate();
                        $valid=$endereco->validate() && $valid;	
                       
			
                        if($valid){
                            $endereco->save(false);
                            $model->id_end=$endereco->id_end;
                            $model->save(false);
                                              

			$this->redirect(array('view','id'=>$model->id_cond));
                   }          
                }
		$this->render('create',array(
			'model'=>$model,
                        'endereco'=>$endereco,
		));
	}
        
        
        public function actionDadoscondominio() {
             $model=new Dadoscondominio;
                $endereco=new Endereco;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Dadoscondominio'],$_POST['Endereco']))
		{
			$model->attributes=$_POST['Dadoscondominio'];
                         $endereco->attributes=$_POST['Endereco'];
                         
			 $valid=$model->validate();
                        $valid=$endereco->validate() && $valid;	
                       
			
                        if($valid){
                            $endereco->save(false);
                            $model->id_end=$endereco->id_end;
                            $model->save(false);
                                              

			$this->redirect(array('view','id'=>$model->id_cond));
                   }          
                }
		$this->render('create',array(
			'model'=>$model,
                        'endereco'=>$endereco,
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
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Dadoscondominio'],$_POST['Endereco']))
		{
			$model->attributes=$_POST['Dadoscondominio'];
                        $endereco->attributes=$_POST['Endereco'];
                     
                        $valid=$model->validate();
                        $valid=$endereco->validate() && $valid;	
                        
			
                        if($valid){
                            $endereco->save(false);
                            $model->id_end=$endereco->id_end;
                            $model->save(false);
                                      
                            $this->redirect(array('view','id'=>$model->id_cond));
                   }             
            }	            

		$this->render('update',array(
			'model'=>$model,
                        'endereco'=>$endereco,
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
		$dataProvider=new CActiveDataProvider('Dadoscondominio');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Dadoscondominio('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Dadoscondominio']))
			$model->attributes=$_GET['Dadoscondominio'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Dadoscondominio the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Dadoscondominio::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

        
	/**
	 * Performs the AJAX validation.
	 * @param Dadoscondominio $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='dadoscondominio-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
