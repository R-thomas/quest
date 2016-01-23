<?php

class QuestsController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='/layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','index','view','create','update', 'times'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

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
		$model=new Quests;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Quests']))
		{
			$model->attributes=$_POST['Quests'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
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

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
        
        

		if(isset($_POST['Quests']))
		{
		    //$criteria = new CDbCriteria();
            //$criteria->addInCondition('id',array(1,2));
            //Model::model()->updateAll(array('data'=>'test'),$criteira);
          
			$model->attributes=$_POST['Quests'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}
    
    public function actionTimes($id)
	{
	   // извлекаем элементы, которые будем обновлять в пакетном режиме,
    // предполагая, что каждый элемент является экземпляром класса модели 'Item'
    $items=Time::model()->findAll('quest_id = :quest_id', array(':quest_id'=>$id));
    if(isset($_POST['Time']))
    {
        $valid=true;
        
        foreach($items as $i=>$item)
        {
            
            if(isset($_POST['Time'][$i]))
                $item->attributes=$_POST['Time'][$i];
            $valid=$item->validate() && $valid;
            
            
            if($valid)  // все элементы корректны
            {
                if($item->save())
                Yii::app()->user->setFlash('status','Изменения сохранены');
            }
        }
        
    }
    
    $model = new Time;
    if (isset ($_POST['add']))
    {
        $model->time1 = $_POST['Time']['time1'];
        $model->time2 = $_POST['Time']['time2'];
        $model->price = $_POST['Time']['price'];
        $model->quest_id = $id;
        if($model->save())
            $this->refresh();
    }
    // отображаем представление с формой для ввода табличных данных
    $this->render('times',array('items'=>$items, 'model'=>$model));
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
        if(isset($_POST['id'])){
            if(Time::model()->deleteByPk($_POST['id'])){
                Yii::app()->user->setFlash('status','Выбранное время удалено');
                }                
        }
		$dataProvider=new CActiveDataProvider('Quests');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
        if (isset($_POST['del']))
        {
            $model = Quests::model()->deleteByPk($_POST['id']);
        }
		$model=new Quests('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Quests']))
			$model->attributes=$_GET['Quests'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Quests the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Quests::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Quests $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='quests-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
