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
    
    
//    public function actionCrearPosition()
//     {
//        $verificarLeader=  Position::verficarPosition($_GET['id_division'] );
//        
//        if ($verificarLeader!=NULL){
//                        if ($verificarLeader[0]->leader!=0){
//                           
//                            
//                            $pedendenciaDivision= DivisionController::getDependencia($_GET['id_division']);
//                            $PositionCode= new PositionCode;
//                            $PositionCode->position_code="1.3";
//                            $PositionCode->id_employee=$_GET['id_employee'];
//                            $PositionCode->id_division=$_GET['id_division'];
//                            $PositionCode->id_position=$_GET['id_position'];
//                            $PositionCode->start_date=$_GET['start_date'];
//                            if ($PositionCode->save()) echo json_encode("true");else echo json_encode("false");
//                        }
//                        
//                        else {
//                            echo json_encode("sinlider");
//                        }
//     
//                    }
//                    
//     else {
//         
//       $verificarCargo= Position::verficarCargo($_GET['id_position']);
//                if ($verificarCargo->leader!=0){
//                            $PositionCode= new PositionCode;
//                            $PositionCode->position_code="1.3";
//                            $PositionCode->id_employee=$_GET['id_employee'];
//                            $PositionCode->id_division=$_GET['id_division'];
//                            $PositionCode->id_position=$_GET['id_position'];
//                            $PositionCode->start_date=$_GET['start_date'];
//                            if ($PositionCode->save()) echo json_encode("true");else echo json_encode("false");
//                }
//                else
//                    {
//                    echo json_encode("sinlider");
//                    }
//     } 
//     }
     
     public function actionCrearPosition()
    {
        if($_GET['id_division'] != NULL) $idDivision = $_GET['id_division']; else $idDivision = Division::getNewDivision($_GET['new_division'], $_GET['id_dependencia']);
        if($_GET['id_position'] != NULL) $idPosition = $_GET['id_position']; else $idPosition = Position::getNewPosition($_GET['new_position'], $_GET['leader']);

        $LevelPosition = Position::verficarPosition($idDivision);
        $pedendenciaDivision = DivisionController::getDependencia($idDivision);
        if($LevelPosition != NULL)
        {
            if($LevelPosition[0]->leader != 0)
            {
                $createPositionCode = PositionCode::getCreatePositionCode($idDivision, $idPosition, $_GET['id_employee'], $_GET['start_date']);
                echo json_encode($createPositionCode);
            }
            else echo json_encode("sinlider");
        }
        else
        {
            $verificarCargo = Position::verficarCargo($idPosition);
            if($verificarCargo->leader != 0)
            {
                $createPositionCode = PositionCode::getCreatePositionCode($idDivision, $idPosition, $_GET['id_employee'], $_GET['start_date']);
                echo json_encode($createPositionCode);
            }
            else echo json_encode("sinlider");
        }
    }
}