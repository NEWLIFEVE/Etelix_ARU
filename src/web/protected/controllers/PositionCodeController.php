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
        $model= new PositionCode;
        $this->render('index',array('model'=>$model));
    }
 
    
    
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
                $createPositionCode = PositionCode::getCreatePositionCode($idDivision,$pedendenciaDivision , $idPosition, $_GET['id_employee'], $_GET['start_date']);
                echo json_encode($createPositionCode);
            }
            else echo json_encode("sinlider");
        }
        else
        {
             
            $verificarCargo = Position::verficarCargo($idPosition);
            
            if($verificarCargo->leader != 0)
            {
                $createPositionCode = PositionCode::getCreatePositionCode($idDivision,$pedendenciaDivision, $idPosition, $_GET['id_employee'], $_GET['start_date']);
                echo json_encode($createPositionCode);
            }
            else echo json_encode("sinlider");
        }
        
        
        
    }
}