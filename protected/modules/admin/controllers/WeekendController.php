<?php

class WeekendController extends Controller
{
	public function actionIndex()
	{
	   $model = Weekend::model()->findByPk(1);
       $a = explode(", ", $model->day);
       $count = count($a);
       if (isset($_POST['Weekend']))
       {
            $model->attributes = $_POST['Weekend'];
            if ($model->save())
                $this->refresh();
       }
       
		$this->render('index', array('model' => $model, 'count' => $count, 'a' => $a));
	}
}
	