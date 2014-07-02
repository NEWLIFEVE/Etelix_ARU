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
        $model=Division::verificarDependencia($division);//dependencia directa
        if($model->id_dependency!=NULL)
        {
            $idDivision=Division::verificarId($model->id, $model->id_dependency);  //escala de pedendencia
            //var_dump($model->id_dependency.".".$idDivision);
        }
        else
        {
            //var_dump("dependencia directa con presidencia");
        }
        $escalaDependencia=Division::escala($division);
    }
}