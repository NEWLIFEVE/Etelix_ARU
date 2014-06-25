<?php

class PositionCodeController extends Controller
{
    
      public function filters()
    {
        // return the filter configuration for this controller, e.g.:
        return array(
            'accessControl', /// perform access control for CRUD operations
            array(
                'application.filters.UserLoginFilter + index ',/*cuando no estas logeado*/
                ),
            array(
                'application.filters.UserUpdateFilter + index + CrearPosition',
                )
            );
    }
    
      public function accessRules()
    {
        return array(
            array(
                'allow',
                'actions'=>Rol::getActions('PositionCode', Yii::app()->user->id),
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
    
    
    
    
    
	public function actionIndex()
	{
        
        if (isset($_POST['PositionCode']))
            {
            
            
          
                $PositionCode= new PositionCode;
                $PositionCode->position_code="1.3";
                $PositionCode->id_employee=$_POST['PositionCode']['id_employee'];
                $PositionCode->id_division=$_POST['PositionCode']['id_division'];
                $PositionCode->id_position=$_POST['PositionCode']['id_position'];
                $PositionCode->start_date=$_POST['PositionCode']['start_date'];
             
                if ($PositionCode->save())
                    {
                   $this->redirect(array('index', 'id' => $PositionCode->id));
                    }
                
               
            
            }
        
        $model= new PositionCode;
		$this->render('index',array('model'=>$model));
	}
    
    
    public function actionCrearPosition()
     {
        
                $PositionCode= new PositionCode;
                $PositionCode->position_code="1.3";
                $PositionCode->id_employee=$_GET['id_employee'];
                $PositionCode->id_division=$_GET['id_division'];
                $PositionCode->id_position=$_GET['id_position'];
                $PositionCode->start_date=$_GET['start_date'];
                if ($PositionCode->save()) echo json_encode("true");else echo json_encode("false");
        
     }

	
}