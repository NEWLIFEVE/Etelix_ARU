<?php

class EmployeeController extends Controller
{
	public function actionIndex()
	{
        $id=Yii::app()->user->id;
        $model = Employee::model()->findByPk($id);
        $address= Address::model()->findByPk($id);
      
          if (isset($_POST['Employee'])){
              var_dump($_POST['Employee']);
//            $line1=$_POST['Employee']['line1'];
//            $line2=$_POST['Employee']['line2'];
//            $zip=$_POST['Employee']['zip'];
//            $country=$_POST['Employee']['country'];
//            $state=$_POST['Employee']['state'];
//            $city=$_POST['Employee']['city'];
            

           
//             $model->attributes=$_POST['Employee'];
//             if ($model->save())
//                    $this->redirect(array('index','id'=>$model->id));
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
            
            $dato = '<option value="empty">Seleccione uno</option>
                    <option value="new">Nuevo..</option>';
            $data = State::getListStateCountry($_POST['Employee']['country']);
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