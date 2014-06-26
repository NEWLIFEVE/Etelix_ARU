<?php

class DivisionController extends Controller
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
    
    
	public function actionIndex()
	{
		$this->render('index');
	}

     
    
    
    
    
    
    
    
    
    
    
    
    
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
    
    
    
    /**
     * 
     * funcion para guardar nuevas division organizacionales en la empresa (ej. presidencia, vp presidencia, gerencias)
     */
    
    public function actionAddDivision(){
        
    $dependencia=$_GET['dependencia'];
    $nuevaDivision=$_GET['nuevaDivision'];
    
    if (($nuevaDivision!=null) && ($dependencia!=null) ){
        
        $model= new Division;
        $model->name=$nuevaDivision;
        $model->id_dependency=$dependencia;
        if($model->save())echo json_encode(true); else echo json_encode(false);  
    }
        
    }
    
   
}