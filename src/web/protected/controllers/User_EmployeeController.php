s<?php

class User_EmployeeController extends Controller
{
	dpublic function actionIndex()
	{
        $id=Yii::app()->user->id;
        $model = Employee::model()->findByPk($id);
          if (isset($_POST['Employee'])){
            
             $model->attributes=$_POST['Employee'];
             if ($model->save())
                    $this->redirect(array('index','id'=>$model->id));
         }
        
        $this->render('index', array('model'=>$model));
        
       
    	}

	
	
	d{
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
        
        
        public function actionStateByCountry(){
              $moyt->attributes=$_POST['Employee'];
              echo $moyt;
           $listado_states= States::model()->findAll("id_country=:country",array(':country'=>1));
           foreach ($listado_states as $data)
               echo "<option value=\"{$data->id}\">{$data->name}</option>";
           
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