<?php

class EmployeeController extends Controller
{
	public function actionInfoEmployee()
	{
        $id=Yii::app()->user->id;
        $Employee = Employee::model()->findByPk($id);
        $Address = Address::getAddressByUser($id);
        $address= new Address;
      
          if (isset($_POST['Employee'])){
             
            $address->address_line_1=$_POST['Employee']['line1'];
            $address->address_line_2=$_POST['Employee']['line2'];
            $address->zip=$_POST['Employee']['zip'];
            $address->id_city=$_POST['Employee']['city'];
            if($address->save()){
                $addressEmployee= new AddressEmployee;
                $addressEmployee->id_employee = $id;
                $addressEmployee->id_address = $address->id;
                $addressEmployee->start_date = date("Y-m-d");
                if($addressEmployee->save()){}
                 $this->redirect(array('infoEmployee','id'=>$Employee->id));
            }
              
//            $address->id_employee=1;     
//            $address->address_line_1="hola";
//            $address->address_line_2="como estas";
//            $address->id_city=1;
//            $address->zip=0121;
           // $address->save();
          
            

           
//             $model->attributes=$_POST['Employee'];
//             if ($model->save())
//                    $this->redirect(array('index','id'=>$model->id));
         }
        $this->render('infoEmployee', array('Employee'=>$Employee,'Address'=>$Address));
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