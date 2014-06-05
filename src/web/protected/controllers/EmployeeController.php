<?php
/**
 *
 */
class EmployeeController extends Controller
{
    /**
     *
     */
    public function filters()
    {
        // return the filter configuration for this controller, e.g.:
        return array(
            'accessControl', /// perform access control for CRUD operations
            array(
                'application.filters.UserLoginFilter + infoEmployee, firstView, searchEmployee',/*cuando no estas logeado*/
                ),
            array(
                'application.filters.UserUpdateFilter + infoEmployee, searchEmployee',
                )
            );
    }

    /**
     *
     */
    public function accessRules()
    {
        return array(
            array(
                'allow',
                'actions'=>Rol::getActions('Employee', Yii::app()->user->id),
                'users'=>array(
                    Yii::app()->user->name
                    )
                ),
            array(
                'deny', // deny all users
                'users'=>array('*'),
                ),
            );
    }

    /**
     *
     */
    public function actionInfoEmployee() 
    {
        $Employee=Employee::getEmployee(Yii::app()->user->id);
        if(is_null($Employee))
        {
            $Employee = new Employee;
            $Address = new Address;
        }
        else
        {
            $Address = Address::getAddressByEmployee($Employee->id);
        }

        if(isset($_POST['Employee']))
        {
            $Employee->attributes = $_POST['Employee'];
            if($Employee->save())
            {
                Users::assignEmployee(Yii::app()->user->id, $Employee->id);

                if(Address::validAddressForm($_POST['Address']))
                {
                    $checkAddress = Address::checkAddress($_POST['Address']);

                    if(is_null($checkAddress))
                    {
                        $NewAddress = new Address;
                        $NewAddress->address_line_1 = $_POST['Address']['address_line_1'];
                        $NewAddress->address_line_2 = $_POST['Address']['address_line_2'];
                        $NewAddress->zip = $_POST['Address']['zip'];
                        $NewAddress->id_city = $_POST['Address']['id_city'];
                        if($NewAddress->save())
                            $idAddress = $NewAddress->id;
                    }
                    else
                    {
                        $idAddress = $checkAddress;
                    }

                    $checkAddressEmployee = AddressEmployee::checkAddressByEmployee($Employee->id, $idAddress);
                        /* si es */
                    if(is_null($checkAddressEmployee))
                    {
                        if($Address->id!= NULL)
                        {
                            $OldAddressEmployee = AddressEmployee::model()->find('id_address =:address', array(':address' => $Address->id));
                            $OldAddressEmployee->end_date = date("Y-m-d");
                            $OldAddressEmployee->save();
                        }
                        $AddressEmployee = new AddressEmployee;
                        $AddressEmployee->id_employee = $Employee->id;
                        $AddressEmployee->id_address = $idAddress;
                        $AddressEmployee->start_date = date("Y-m-d");
                        if($AddressEmployee->save())
                        {

                        }
                        $this->redirect(array('infoEmployee', 'id' => $Employee->id));
                    }
                    else
                    {

                    }
                }
            }
        }
        $this->render('infoEmployee', array('Employee' => $Employee, 'Address' => $Address));
    }
    
    /**
     *
     */
    public function actionStateByCountry()
    {
        $dato = '<option value="">Seleccione uno</option>';
        $data = State::getListStateCountry($_POST['Employee']['country']);
        foreach ($data as $value => $name)
        {
            $dato.= "<option value='$value'>" . CHtml::encode($name) . "</option>";
        }
        echo $dato;
    }

    /**
     *
     */
    public function actionCityByState()
    {    
        $dato = '<option value="">Seleccione uno</option>';
        $data = City::getListCityState($_POST['Employee']['state']);
        foreach ($data as $value => $name)
        {
            $dato.= "<option value='$value'>" . CHtml::encode($name) . "</option>";
        }
        echo $dato;
    }

    /**
     *
     * funcion para guardar la imagen del empleado
     */
    public function actionPhoto()
    {
        $Employee = Employee::getEmployee(Yii::app()->user->id);
        if($Employee != NULL)
        {    
            $direccion = "themes/metronic/img/profile/".Yii::app()->user->name. "/";

            if(file_exists($direccion))
            {
                if(isset($_FILES["myfile"]))
                {
                    $ret = array();
                    $error = $_FILES["myfile"]["error"];
                    if(!is_array($_FILES["myfile"]["name"]))
                    { //single file
                        $fileName = uniqid() . '-' . $_FILES["myfile"]["name"];
                        move_uploaded_file($_FILES["myfile"]["tmp_name"], $direccion . $fileName);
                        $Employee->image_rute = $direccion.$fileName;
                        if($Employee->save())
                        { 
                            $namephoto[]='successUpdate'; 
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
            else
            {
                mkdir($direccion, 0700);
                if(isset($_FILES["myfile"]))
                {
                    $ret = array();
                    $error = $_FILES["myfile"]["error"];
                    if(!is_array($_FILES["myfile"]["name"]))
                    { //single file
                        $fileName = uniqid() . '-' . $_FILES["myfile"]["name"];
                        move_uploaded_file($_FILES["myfile"]["tmp_name"], $direccion . $fileName);
                        $Employee->image_rute = $direccion.$fileName;
                        if($Employee->save())
                        {
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
        }
        else
        {
            echo json_encode('dataFail');
        }
    }

    /**
     *
     */
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
    
    
    /**
     * 
     * funcion de prueba para armar la primera vista del usuario
     */
    public function actionFirstView()
    {    
        
         
          $model=Employee::getEmployee(Yii::app()->user->id);
        
          if (is_null($model)){
              $model=new Employee;
              $Address=new Address;
              if(isset($_POST['Employee']))
        {
            $model->id_nationality=$_POST['Employee']['nationality'];
            $model->attributes = $_POST['Employee'];
    
            if($model->save())
            {
                Users::updateStatus(Yii::app()->user->id);
                Users::assignEmployee(Yii::app()->user->id, $model->id);

                if(Address::validAddressForm($_POST['Address']))
                {
                    $checkAddress = Address::checkAddress($_POST['Address']);

                    if(is_null($checkAddress))
                    {
                         $idAddress= Address::newAddress($_POST['Address']['address_line_1'],$_POST['Address']['address_line_2'],$_POST['Address']['zip'],$_POST['Address']['id_city'] ); 
                    }
                    else
                    {
                        $idAddress = $checkAddress;
                    }

                    $checkAddressEmployee = AddressEmployee::checkAddressByEmployee($model->id, $idAddress);
                        /* si esdddddd */
                    if(is_null($checkAddressEmployee))
                    {
                        if($Address->id!= NULL)
                        {
                            $OldAddressEmployee = AddressEmployee::model()->find('id_address =:address', array(':address' => $Address->id));
                            $OldAddressEmployee->end_date = date("Y-m-d");
                            $OldAddressEmployee->save();
                        }
                        $AddressEmployee = new AddressEmployee;
                        $AddressEmployee->id_employee = $model->id;
                        $AddressEmployee->id_address = $idAddress;
                        $AddressEmployee->start_date = date("Y-m-d");
                        if($AddressEmployee->save())
                        {

                        }
                        $this->redirect(array('infoEmployee', 'id' => $model->id));
                    }
                    else
                    {
                            return false;
                    }
                }
            }
        }
              
              
          }
          
          else{
             
             $Address=Address::employee(AddressEmployee::loadAddressByEmployee($model->id)->id_address);
        
                if(isset($_POST['Employee']))
                {
                    $model->id_nationality=$_POST['Employee']['nationality'];
                    $model->attributes = $_POST['Employee'];
    
                    if($model->save())
                    {
                        Users::updateStatus(Yii::app()->user->id);
                        Users::assignEmployee(Yii::app()->user->id, $model->id);

                        if(Address::validAddressForm($_POST['Address']))
                        {
                            $checkAddress = Address::checkAddress($_POST['Address']);

                            if(is_null($checkAddress))
                            {
                                $idAddress= Address::newAddress($_POST['Address']['address_line_1'],$_POST['Address']['address_line_2'],$_POST['Address']['zip'],$_POST['Address']['id_city'] ); 
                            }
                            else
                            {
                                $idAddress = $checkAddress;
                            }

                            $checkAddressEmployee = AddressEmployee::checkAddressByEmployee($model->id, $idAddress);
                                /* si esdddddd */
                            if(is_null($checkAddressEmployee))
                            {
                                if($Address->id!= NULL)
                                {
                                    $OldAddressEmployee = AddressEmployee::model()->find('id_address =:address', array(':address' => $Address->id));
                                    $OldAddressEmployee->end_date = date("Y-m-d");
                                    $OldAddressEmployee->save();
                                }
                                $AddressEmployee = new AddressEmployee;
                                $AddressEmployee->id_employee = $model->id;
                                $AddressEmployee->id_address = $idAddress;
                                $AddressEmployee->start_date = date("Y-m-d");
                                if($AddressEmployee->save())
                                {

                                }
                                $this->redirect(array('infoEmployee', 'id' => $model->id));
                            }
                            else
                            {
                               $this->redirect(array('infoEmployee', 'id' => $model->id));
                            }
                        }
                    }
                }
    
          }
        
        $this->render('viewfirstemployee', array('model'=>$model,'Address'=>$Address));
    }
    
   
    /**
     * 
     * funcion para mostrar los usuarios
     */
    
    
    public function actionSearchEmployee()
    {
//        $search=  Employee::getIdEmployee();
//        if ($search!=null)
//        {
            $this->render('SearchEmployee');
//            $this->render('SearchEmployee', array('search'=>$search));
//        }
//        else
//        {
//            return false;
//        }
    }
    
    public function actionDynamicEmployee()
    {
       
       $model=Employee::getDynamicEmployee($_GET['id_employee']);
       $Address=Address::getAddressByEmployee($_GET['id_employee']);
       
       if ($model!=null){
                
                       $datos[]= array(
                            'name'=>$model->first_name,
                            'second_name'=>$model->second_name,
                            'last_name'=>$model->last_name,
                            'second_last_name'=>$model->second_last_name,
                            'date_birth'=>$model->date_birth,
                            'identity_card'=>$model->identity_card,
                            'email_personal'=>$model->email_personal,
                            'email_company'=>$model->email_company,
                            'cellphone'=>$model->cellphone,
                            'homephone'=>$model->home_phone,
                            'extension_numeric'=>$model->extension_numeric,
                            'nationality'=>$model->idNationality->name,
                            'maritalstatus'=>$model->idMaritalStatus->name,
                            'imagen_rute'=>$model->image_rute,
                           
                            );
                       
                       if ($Address!=NULL){
                           if ($Address->id_city!=NULL)
                               {
                                    $city=$Address->idCity->name;
                                    $state=$Address->idCity->idState->name; 
                                    $country=$Address->idCity->idState->idCountry->name;
                                }
                           else
                             {
                               $city="";
                               $state="";
                               $country="";
                             }

                           
                        $datos[]= array(
                               'address_line_1'=>$Address->address_line_1,
                                'address_line_2'=>$Address->address_line_2,
                                'zip'=>$Address->zip,
                                'country'=>$country,
                                'state'=>$state,
                                'city'=>$city,
                               );
                       }
                       else{return false;};
                      
                     echo json_encode($datos);            
                }
       else{return false;} ;
    }
    
    
   
    public function actionAdmiControllers()
    {  
        $rol= Rol::getRol();
        $this->render('AdminControllers',  array('rol'=>$rol));
    }
    
    public function actionAdminPermit()
     {
        $idrol=$_GET['idRol'];
         $rol= Rol::getRol();
         $model= ActionRol::getActionRol($idrol);
        
         $controllers= Controllers::getControllers();
         $this->render('AdminPermit',array('model'=>$model, 'controllers'=>$controllers,'rol'=>$rol,'idrol'=>$idrol));
     }
    
    
}