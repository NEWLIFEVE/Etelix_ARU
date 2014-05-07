<?php

class EmployeeController extends Controller
{
	public function actionInfoEmployee()
	{
        $idEmployee=Yii::app()->user->id;
        $Employee = Employee::model()->findByPk($idEmployee);
        /*Funcion que valida que el empleado tenga una direccion asignada, y devuelve los datos de la misma*/
        $Address = Address::getAddressByUser($idEmployee);
        /*Reviso que el form este seteado*/
          if (isset($_POST['Employee'])){
              /*Funcion que se encarga de validar que la direccion ya exista*/
              $checkAddress = Address::checkAddress($_POST['Employee']['line1'], $_POST['Employee']['line2'], $_POST['Employee']['zip'], $_POST['Employee']['city']);
             /*si no existe la cre y guardo el id, si ya existe guardo el id, retornado en la funcion*/
              if (is_null($checkAddress)){
                $NewAddress= new Address;
                $NewAddress->address_line_1=$_POST['Employee']['line1'];
                $NewAddress->address_line_2=$_POST['Employee']['line2'];
                $NewAddress->zip=$_POST['Employee']['zip'];
                $NewAddress->id_city=$_POST['Employee']['city'];
                if($NewAddress->save())$idAddress=$NewAddress->id;
             }else{
                 $idAddress=$checkAddress;
             }
             /**/
             /*Funcion que valida que el usuario efectivamente tenga asignada esa direccion en especifico*/
            $checkAddressEmployee = AddressEmployee::checkAddressByUser($idEmployee, $idAddress);
            /*si es */
            if (is_null($checkAddressEmployee)){
                if ($Address!=NULL){
                $OldAddressEmployee = AddressEmployee::model()->find('id_address =:address',array(':address'=>$Address->id));
                $OldAddressEmployee->end_date = date("Y-m-d");
                $OldAddressEmployee->save();
                }
                $AddressEmployee= new AddressEmployee;
                $AddressEmployee->id_employee = $idEmployee;
                $AddressEmployee->id_address = $idAddress;
                $AddressEmployee->start_date = date("Y-m-d");
                if($AddressEmployee->save())
                 $this->redirect(array('infoEmployee','id'=>$Employee->id));
            }else{
//                $checkAddressEmployee->end_date = date("Y-m-d");
//                if($checkAddressEmployee->save()){
//                    $addressEmployee= new AddressEmployee;
//                    $addressEmployee->id_employee = $idEmployee;
//                    $addressEmployee->id_address = $idAddress;
//                    $addressEmployee->start_date = date("Y-m-d");
//                    if($addressEmployee->save())
//                    $this->redirect(array('infoEmployee','id'=>$Employee->id));
//                }
            } 

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