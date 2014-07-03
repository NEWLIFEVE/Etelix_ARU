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
     * @param type $division
     */
    public function getDependencia($division)
    {
        $model = Division::verificarDependencia($division); //dependencia directa
        $array = array();
        if($model->id_dependency != NULL)
        {
            $contador = $model->id_dependency;
            $id = $model->id;

            while($contador != NULL):
                $otraDependencia = Division::verificarDependencia($contador);
                $idDivision = Division::verificarId($id, $contador);
                $contador = $otraDependencia->id_dependency;
                $id = $otraDependencia->id; //ultimo id que se le pasa depedencia raiz
                $array[] = $idDivision;

            endwhile;


            $contadorotro=count($array)-1;
                    
                   for ($i=$contadorotro; $i>=0; $i--)
                   {
                       $position[]=$array[$i];
                       
                   }
             
                    $LevelPosition = Position::verficarPosition($division);
                   if ($LevelPosition!=null){
                    foreach($LevelPosition as $value)
                        {
                            $leader[]=$value->leader;
                           $numeroPosicion=count($leader)+1; 
                             
                        }
                   }
                   else 
                       {
                       $numeroPosicion=1;
                       
                       }
                     
                     
                     $allArray= implode(".", $position); 
                     $mergeDependencia=$id.".".$allArray.".".$numeroPosicion;
                     return $mergeDependencia;//codigo de posicion para los empleados
        }
        
      
    }
}