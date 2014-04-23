<?php

class User_EmployeeController extends Controller
{
	public function actionIndex()
	{
        $id=Yii::app()->user->id;	
        $model = Employee::model()->findByPk($id);
        $this->render('index', array('model'=>$model));
    	}

	// Uncomment the following methods and override them if needed
	
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'accessControl', // perform access control for CRUD operations
			
		);
	}
        
        
        public function accessRules()
	{
           
		return array(        
                   array(
                       'allow',
                       'actions'=>Rol::getActions('User_Employee', Yii::app()->user->id),
                       'users'=>array(
                           Yii::app()->user->name
                            )
                       )
		);
	}
        
        
        
        
      
        
        
            /*
	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}