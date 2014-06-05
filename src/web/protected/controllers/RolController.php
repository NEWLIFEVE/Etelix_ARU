<?php

class RolController extends Controller
{
	public function actionIndex()
	{
            $model= new Rol;
            if(isset($_POST['Rol']))
              {
                
                $model->attributes=$_POST['Rol'];
               if($model->save())
                    $this->redirect(array('Employee/AdmiControllers'));
               
              }
              
              else
               {
                  $this->render('index',array('model'=>$model));
               }
            
		
	}
        
        
        public function actionCreateRol()
         {
             $name=$_GET['name_rol'];
             $model= new Rol;
             
             if ($name!=NULL)
                 {
                  $model->name_rol=$name;
                  $model->save(); 
                  echo json_encode("1");}
                  else {echo json_encode("2");}
           
         }
         
         public function actionIdRol()
         {
             $array = Array();
             $idcontroller=$_GET['idcontrollers'];
             $idrol=$_GET['rol'];//id del rol
            
             $acionesControladores=  ActionRol::getActionRol($idrol);//id acciones y controladores asociados al rol
            foreach($acionesControladores as $value)
                {
                    $id=$value->id_action_controller;
                    $RolControllers= ActionController::getAControllers($id);
                    
                    foreach ($RolControllers as $value){
                        var_dump($value->idAction->name);//LISTA LAS ACCIONES ASOCIADAS A LOS ROLES
                        var_dump($value->idControllers->name);//LISTA LAS ACCIONES ASOCIADAS A LOS ROLES
                        
                    }
                }
//             $RolControllersAction=  ActionRol::getActionRol($idrol);//FUNCION QUE RETORNA EL id_action_controller
//             $RolControllers= ActionController::getAControllers($RolControllersAction); //FUNCION 
             $consulta="select id_action from action_controller where id_controller=".$idcontroller."";
             $model= ActionController::model()->findAllBySql($consulta);
//             var_dump($RolControllers);
             
             
//             foreach ($model as $key => $value) {
//                 $array[] = $value->idAction->name;
//             }
             
//             foreach ($RolControllers as $key => $value) {
//                 echo  $key;
//             }
//               
//              echo json_encode($array);
         }

}