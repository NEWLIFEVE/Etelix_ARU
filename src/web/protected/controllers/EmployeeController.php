<?php

class EmployeeController extends Controller
{
	public function actionIndex()
	{
		
        $model=  Employee::model();
        $employee=$model->findAll();
        $this->render('index', array('employee'=>$employee));
        
            
           // $this->render('index');
	}
        
        
        public function actionView($id){
            $model = Employee::model()->findByPk($id);
            $this->render('detalle', array('model'=>$model));
        }
        
        public function actionCreate(){
            $model= new Employee();

                if (isset($_POST['Employee'])){
                    $model->attributes=$_POST['Employee'];
       
          
                    if($model->save())
                        $this->redirect(array('view','id'=>$model->id));
                }
         
            $this->render('create',array('model'=>$model));
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
}