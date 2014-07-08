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
    
    public function actionGetNewDivision() {
        
         $newDivision = $_GET['new_division'];
         $idDependence = $_GET['id_dependencia'];
         $modelDivision = Division::getNewDivision($newDivision,$idDependence);
         
         return $modelDivision;

    }

    /**
     * funcion para calcular la dependencia entre las division
     * @access public
     * @param int $division
     */


}