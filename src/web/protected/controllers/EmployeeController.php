<?php

class EmployeeController extends Controller
{
	public function actionIndex()
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

    /**
     *
     */    
    public function actionStateByCountry()
    {
       $country = $_POST['Employee']['code'];
       $listado_states= States::model()->findAll("id_country=:country",array(':country'=>$country));
       foreach ($listado_states as $data)
           echo "<option value=\"{$data->id}\">{$data->name}</option>";
       
    }
        
         public function actionCountryByCity(){
           $states = $_POST['Employee']['id_states'];
       
           $listado_city= City::model()->findAll("id_states=:states",array(':states'=>$states));
           foreach ($listado_city as $data)
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