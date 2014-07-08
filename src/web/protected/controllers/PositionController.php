<?php

class PositionController extends Controller
{
    
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
    
    
    
    public function accessRules()
    {
        return array(
            array(
                'allow',
                'actions'=>Rol::getActions('Position', Yii::app()->user->id),
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
        $model= new Position;
        $this->render('index', array('model'=>$model));
    }
    
    
    /**
     * funcion para crear nuevos cargos
     */
//    public function actionAddPosition()
//    {
//         if (($_GET['nuevoCargo']!=null) && ($_GET['leader']!=null))
//         {
//            $model=new Position;
//            $model->name=$_GET['nuevoCargo'];
//            $model->leader=$_GET['leader'];
//            if($model->save())echo json_encode(true); else echo json_encode(false); 
//         }
//
//    }
     
     
    

	
}