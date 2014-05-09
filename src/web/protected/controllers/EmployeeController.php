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
}
