<?php

class PositionCodeController extends Controller
{
    
    public function filters()
    {
        // return the filter configuration for this controller, e.g.:
        return array(
            'accessControl', /// perform access control for CRUD operations
            array(
                'application.filters.UserLoginFilter + index, AdminPositionCode, CrearPosition ',/*cuando no estas logeado*/
                ),
            array(
                'application.filters.UserUpdateFilter + index, AdminPositionCode, CrearPosition',
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
        if($_GET['check']!= NULL) $check = $_GET['check'];

        $LevelPosition = Position::verficarPosition($idDivision);

        //$pedendenciaDivision = DivisionController::actionGetDependencia();
        $pedendenciaDivision = $_GET['codePosition'];
        
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
<<<<<<< HEAD

    public function actionAdminPositionCode(){
        

        $positionCode = PositionCode::model()->findAllBySql("SELECT pc.id, pc.position_code, pc.id_position, pc.id_division, d.id_dependency, pc.id_employee, pc.start_date, pc.end_date
                                                            FROM position_code pc
                                                            INNER JOIN division as d ON d.id = pc.id_division
                                                            INNER JOIN position as p ON p.id = pc.id_position
                                                            INNER JOIN employee as e ON e.id = pc.id_employee
                                                            ORDER BY pc.position_code ASC;");
      
        $this->render('AdminPc',array('model'=>$positionCode));
    }
    
    public function actionGetPositionCode()
    {
        $division = $_GET['id_division'];
        $position = $_GET['id_position'];
        $check = $_GET['check'];
        

        $vacantPositionCode = self::actionGetVacantPositionCode();
        
        if($vacantPositionCode == false){
        
            $dependecy = Division::model()->findBySql("select id_dependency from division where id = $division;")->id_dependency;
            $levelPosition = Position::model()->findBySql("select leader from position where id = $position;")->leader;

            if($dependecy == NULL){ $comparador = 'IS'; $dependecy = 'NULL'; }
            else{ $comparador = '='; $dependecy = $dependecy; }

            if($levelPosition == 1){

                $sql = "SELECT pc.position_code as position_code
                    FROM position_code as pc
                    INNER JOIN division as d ON d.id = pc.id_division
                    INNER JOIN position as p ON p.id = pc.id_position
                    WHERE pc.id_division $comparador $dependecy
                    AND p.leader = 1;";
                
            }elseif($levelPosition == 0){

                $sql = "SELECT pc.position_code as position_code
                    FROM position_code as pc
                    INNER JOIN division as d ON d.id = pc.id_division
                    INNER JOIN position as p ON p.id = pc.id_position
                    WHERE pc.id_division = $division
                    AND p.leader = 1;";
            }

            $modelStart = PositionCode::model()->findBySql($sql);
            if($modelStart == NULL){
                $modelStart = NULL;
            }else{
                if($modelStart->position_code == NULL){
                    $codePosition = NULL;
                }else{
                    $codePosition = $modelStart->position_code;
                }
            }

            if($modelStart == NULL){
                $position_code = '1';
            }else{
                
                $sql = "SELECT MAX(cast(regexp_replace(pc.position_code, '".$codePosition.".' , '') as int))+1 as position_code
                        FROM position_code as pc
                        INNER JOIN division as d ON d.id = pc.id_division
                        INNER JOIN position as p ON p.id = pc.id_position
                        INNER JOIN employee as e ON e.id = pc.id_employee
                        WHERE pc.position_code LIKE '".$codePosition."._' 
                        AND pc.end_date IS NULL;";
                
                $modelEnd = PositionCode::model()->findBySql($sql);
                if($modelEnd == NULL){
                    $modelEnd = NULL;
                    $newNumber = 1;
                }else{
                    if($modelEnd->position_code == NULL){
                        $newNumber = 1;
                    }else{
                        $newNumber = $modelEnd->position_code;
                    }
                }        
  
                $position_code = $codePosition.'.'.$newNumber;

            }
        
        }else{
            $position_code = $vacantPositionCode;
        }
        
        if($check == true){
            echo json_encode($position_code);
        }else{
            return $position_code;
        }

    }
    
    public function actionGetVacantPositionCode() 
    {
        $division = $_GET['id_division'];
        $position = $_GET['id_position'];
//        $check = $_GET['check'];
        
        $sql = "SELECT pc.position_code 
                FROM position_code pc
                INNER JOIN division as d ON d.id = pc.id_division
                INNER JOIN position as p ON p.id = pc.id_position
                INNER JOIN employee as e ON e.id = pc.id_employee
                WHERE pc.id_division = $division
                AND pc.id_position = $position    
                AND e.first_name = 'Vacante'
                AND pc.end_date IS NULL;";
        
        $modelPositionCode = PositionCode::model()->findBySql($sql);

        if($modelPositionCode == NULL){
            $oldPositionCode = NULL;
        }else{
            if($modelPositionCode->position_code == NULL){
                 $oldPositionCode = NULL;
            }else{
                 $oldPositionCode = $modelPositionCode->position_code;
            }
        }
        
        if($oldPositionCode == NULL){
            return false;
        }else{
            return $oldPositionCode;
        }

    }
    
    public function actionAdminPositionCode()
     {
        $positionCode = PositionCode::model()->findAll();
        $this->render('AdminPc',array('model'=>$positionCode));
     }
}