<?php

class EmployeeController extends Controller {

    public function actionInfoEmployee() 
    {
        $Employee = Employee::getEmployee(Yii::app()->user->id);
        if (is_null($Employee)){ 
            $Employee = new Employee; 
            $Address = new Address;
        }else{
            $Address = Address::getAddressByEmployee($Employee->id);
        }
        
        if (isset($_POST['Employee'])) {
            $Employee->attributes = $_POST['Employee'];
            if ($Employee->save()) {
                User::assignEmployee(Yii::app()->user->id, $Employee->id);
                
                if (Address::validAddressForm($_POST['Address'])) {
                    
                    $checkAddress = Address::checkAddress($_POST['Address']);
                    
                    if (is_null($checkAddress)) {
                        $NewAddress = new Address;
                        $NewAddress->address_line_1 = $_POST['Address']['address_line_1'];
                        $NewAddress->address_line_2 = $_POST['Address']['address_line_2'];
                        $NewAddress->zip = $_POST['Address']['zip'];
                        $NewAddress->id_city = $_POST['Address']['id_city'];
                        if ($NewAddress->save())
                            $idAddress = $NewAddress->id;
                    }else {
                        $idAddress = $checkAddress;
                    }
                    
                    $checkAddressEmployee = AddressEmployee::checkAddressByEmployee($Employee->id, $idAddress);
                    /* si es */
                    if (is_null($checkAddressEmployee)) {
                        if ($Address->id!= NULL) {
                            $OldAddressEmployee = AddressEmployee::model()->find('id_address =:address', array(':address' => $Address->id));
                            $OldAddressEmployee->end_date = date("Y-m-d");
                            $OldAddressEmployee->save();
                        }
                        $AddressEmployee = new AddressEmployee;
                        $AddressEmployee->id_employee = $Employee->id;
                        $AddressEmployee->id_address = $idAddress;
                        $AddressEmployee->start_date = date("Y-m-d");
                        if ($AddressEmployee->save()) {
                            
                        }
                        $this->redirect(array('infoEmployee', 'id' => $Employee->id));
                    } else {
                        
                    }
                }
            }
        }
        $this->render('infoEmployee', array('Employee' => $Employee, 'Address' => $Address));
    }

    public function filters() {
        // return the filter configuration for this controller, e.g.:
        return array(
            'accessControl', // perform access control for CRUD operations
        );
    }

    public function accessRules() {
        return array(
            array(
                'allow',
                'actions' => Rol::getActions('User_Employee', Yii::app()->user->id),
                'users' => array(
                    Yii::app()->user->name
                )
            )
        );
    }

    public function actionStateByCountry() {

        $dato = '<option value="empty">Seleccione uno</option>';
        $data = State::getListStateCountry($_POST['Employee']['country']);
        foreach ($data as $value => $name) {
            $dato.= "<option value='$value'>" . CHtml::encode($name) . "</option>";
        }
        echo $dato;
    }

    public function actionCityByState() {

        $dato = '<option value="empty">Seleccione uno</option>';
        $data = City::getListCityState($_POST['Employee']['state']);
        foreach ($data as $value => $name) {
            $dato.= "<option value='$value'>" . CHtml::encode($name) . "</option>";
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
        
        
        /**
         * 
         * funcion para guardar la imagen del empleado
         */
        
        function actionPhoto() {

        $Employee = Employee::getEmployee(Yii::app()->user->id);
        if ($Employee != NULL) {
            
            $direccion = "themes/metronic/img/profile/".Yii::app()->user->name. "/";

            if (file_exists($direccion)) {
                if (isset($_FILES["myfile"])) {
                    $ret = array();
                    $error = $_FILES["myfile"]["error"];
                    if (!is_array($_FILES["myfile"]["name"])) { //single file
                        $fileName = uniqid() . '-' . $_FILES["myfile"]["name"];
                        move_uploaded_file($_FILES["myfile"]["tmp_name"], $direccion . $fileName);
                        $Employee->image_rute = $direccion.$fileName;
                        if($Employee->save()){ 
                            $namephoto[]='successUpdate'; 
                            $namephoto[]=$direccion.$fileName; 
                            echo json_encode($namephoto);
                            
                        } 
                            
                        else{ 
                            $namephoto[]='imageRuteFail'; 
                            $namephoto[]=$direccion.$fileName; 
                            echo json_encode($namephoto);
                        }
                    }
                }
            } else {
                mkdir($direccion, 0700);
                if (isset($_FILES["myfile"])) {
                    $ret = array();
                    $error = $_FILES["myfile"]["error"];
                    if (!is_array($_FILES["myfile"]["name"])) { //single file
                        $fileName = uniqid() . '-' . $_FILES["myfile"]["name"];
                        move_uploaded_file($_FILES["myfile"]["tmp_name"], $direccion . $fileName);
                        $Employee->image_rute = $direccion.$fileName;
                        if($Employee->save()){
                            $namephoto[]='successNew'; 
                            $namephoto[]=$direccion.$fileName; 
                            echo json_encode($namephoto);
                           
                        }
                    else
                        { 
                            $namephoto[]='imageRuteFail'; 
                            $namephoto[]=$direccion.$fileName; 
                            echo json_encode($namephoto);
                       
                        }
                    }
                }
            }

        }else{
            echo json_encode('dataFail');
        }
    }

    public function actionDeletejquery()
    {
        $output_dir = "themes/metronic/img/profile/";
        if(isset($_POST["op"]) && $_POST["op"] == "delete" && isset($_POST['name']))
        {
            $fileName =$_POST['name'];
            $filePath = $output_dir. $fileName;
            if (file_exists($filePath)) 
            {
            	unlink($filePath);
            }
        	echo "Deleted File ".$fileName."<br>";
        }
    }
}

   


