<?php

class CapchaController extends Controller
{
	public function actionIndex()
	{
		$model=Capcha::model()->findByPk(1);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Capcha']))
		{
			$model->attributes=$_POST['Capcha'];
			if($model->save())
            {
                Yii::app()->user->setFlash('status','Изменения сохранены');                           
            }            
				
		}

		$this->render('index',array(
			'model'=>$model,
		));
	}

}