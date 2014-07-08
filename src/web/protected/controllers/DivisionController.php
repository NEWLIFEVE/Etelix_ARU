<?php
class DivisionController extends Controller
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
                'application.filters.UserLoginFilter + index',/*cuando no estas logeado*/
                ),
            array(
                'application.filters.UserUpdateFilter + index',
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
                'actions'=>Rol::getActions('Division', Yii::app()->user->id),
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
    public function actionIndex()
    {
        $this->render('index');
    }

    /**
     * funcion para calcular la dependencia entre las division
     * @access public
     * @param int $division
     */

    public function actionGetDependencia()
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
                $sql = "SELECT cast(regexp_replace(pc.position_code, '".$codePosition.".' , '') as int)+1 as position_code
                        FROM position_code as pc
                        INNER JOIN division as d ON d.id = pc.id_division
                        INNER JOIN position as p ON p.id = pc.id_position
                        INNER JOIN employee as e ON e.id = pc.id_employee
                        WHERE pc.position_code LIKE '".$codePosition.".%' 
                        AND e.first_name != 'Vacante'
                        ORDER BY cast(regexp_replace(pc.position_code, '".$codePosition.".' , '') as int) DESC LIMIT 1;";
                
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
    
    
}