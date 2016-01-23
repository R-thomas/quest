<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}
    
    

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
     
     public function actionIndex()
    {
        $model = Quests::model()->findAll();
        $count = Quests::model()->count();
    		
    	$this->render('index', array('model'=>$model, 'count'=>$count));
    }
    
    
    public function actionSuccess()
    {
    		
    	$this->render('success');
    } 
     
     
	public function actionPresent()
	{
		$model = new Present;
        if(isset($_POST['Present']))
		{
			$model->attributes=$_POST['Present'];
			if($model->save())
            $this->redirect('success');
		}		
		$this->render('present', array('model'=>$model));
	}
    
    
    public function actionOrder()
	{
	   
        $weekend = Weekend::model()->findByPk(1);
        $str_weekend = $weekend->day;
        $c = explode(', ', $str_weekend);
        $count = count($c);
        for($i=0; $i<$count; $i++)
        {
            $c[$i] = '"'.$c[$i].'"';
        }
        $new_str_weekend = implode(', ', $c);
       
       
		$model=new Orders;

		if(isset($_POST['Orders']))
		{
            $order_id = $_POST['Orders']['quest_id'];
            $date_day = $_POST['Orders']['date_day'];
            $this->redirect(array('step2','id'=>$order_id, 'day' => $date_day));
		}
        
        

		$this->render('order',array(
			'model'=>$model,
            'new_str_weekend' => $new_str_weekend,
		));
	}
    
    
    public function actionStep2($id, $day)
	{
	   $models_orders = new Orders();
       if(isset($_POST['Orders']))
       {
            $models_orders->name = $_POST['Orders']['name'];
            $models_orders->tel = $_POST['Orders']['tel'];
            $models_orders->selected_time_id = $_POST['selected_time_id'];
            $models_orders->quest_id = $_GET['id'];
            $models_orders->date_day = $_GET['day'];
            $models_orders->setScenario('insert');
                if($models_orders->save())
				$this->redirect('/site/success');
            
			
               
       }              
	   $this->render('step2',array(
			'model'=>$this->loadModel($id), 'day'=>$date_day, 'models_orders' => $models_orders,
		));
	}
    
    
    public function loadModel($id)
	{
		$model=Quests::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}