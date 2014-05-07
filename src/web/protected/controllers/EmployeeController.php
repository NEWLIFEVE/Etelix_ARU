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


        public function actionStateByCountry()
        {
            
            $dato = '<option value="empty">Seleccione uno</option>';
            $data = State::getListStateCountry($_POST['Employee']['country']);
            foreach($data as $value=>$name)
            {
                $dato.= "<option value='$value'>".CHtml::encode($name)."</option>";
            }
            echo $dato;
       
        }
                
        public function actionCityByState(){
            
            $dato = '<option value="empty">Seleccione uno</option>';
            $data = City::getListCityState($_POST['Employee']['state']);
            foreach($data as $value=>$name)
            {
                $dato.= "<option value='$value'>".CHtml::encode($name)."</option>";
            }
            echo $dato;
           
           
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