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

    public static function actionGetDependencia()
    {
        $division = $_GET['id_division'];
        $position = $_GET['id_position'];
        $check = $_GET['check'];
        
        $dependecy = Division::model()->findBySql("select id_dependency from division where id = $division;")->id_dependency;
        $levelPosition = Position::model()->findBySql("select leader 
                                                       from position 
                                                       where id = $position;")->leader;

        
        if($dependecy == NULL){ $comparador = 'IS'; $dependecy = 'NULL';}
        else{ $comparador = '='; $dependecy = $dependecy;}

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
            $sql = "SELECT COUNT(pc.id)+1 as position_code
                    FROM position_code as pc
                    INNER JOIN division as d ON d.id = pc.id_division
                    INNER JOIN position as p ON p.id = pc.id_position
                    WHERE pc.position_code LIKE '$codePosition._';";
            $modelEnd = PositionCode::model()->findBySql($sql)->position_code;
            $position_code = $codePosition.'.'.$modelEnd;
        }
        
        if($check == true){

           // echo $position_code;
            echo json_encode($position_code);
        }else{
            return $position_code;
        }
        
        
//        $model = Division::verificarDependencia($division); //dependencia directa
//        $array = array();
//        if($model->id_dependency != NULL)
//        {
//            $contador = $model->id_dependency;
//            $id = $model->id;
//
//            while($contador != NULL):
//                $otraDependencia = Division::verificarDependencia($contador);
//                $idDivision = Division::verificarId($id, $contador);
//                $contador = $otraDependencia->id_dependency;
//                $id = $otraDependencia->id; //ultimo id que se le pasa depedencia raiz
//                $array[] = $idDivision;
//            endwhile;
//
//            $contadorotro=count($array)-1;
//                    
//            for ($i=$contadorotro; $i>=0; $i--)
//            {
//               $position[]=$array[$i];
//
//            }
//
//            $LevelPosition = Position::verficarPosition($division);
//            if ($LevelPosition!=null){
//                foreach($LevelPosition as $value)
//                {
//                    $leader[]=$value->leader;
//                    $numeroPosicion1=count($leader);
//                    $numeroPosicion= ".".$numeroPosicion1;
//                }
//            }
//            else 
//            {
//                $numeroPosicion="";
//            }
//
//            $allArray= implode(".", $position); 
//            $mergeDependencia=$id.".".$allArray.$numeroPosicion;
//            return $mergeDependencia;//codigo de posicion para los empleados
//        }
//        else
//        {
//            return $mergeDependencia="1";
//        }

    }
}