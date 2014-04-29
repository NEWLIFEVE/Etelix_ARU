<?php

class DeclareController extends Controller
{
	public function actionIndex()
	{
                $id=Yii::app()->user->id;
<<<<<<< HEAD
                $date=date('Ymd');
          
                
                $jornada_empleado= EventEmployee::model()->findAll('id_employee=:id AND date=:date', array(':id'=>$id, ':date'=>$date));
                
                
                if ($jornada_empleado==NULL){
                    $model= new EventEmployee();
                    $model->id_employee=$id;
                    $model->date=$date;
                    $model->save();
 
                }
                
                else {
                    
                    foreach ($jornada_empleado as $value){
                        $time_start_day=$value->time_start_day;
                        $time_start_rest=$value->time_start_rest;
                        $time_end_rest=$value->time_end_rest;
                        $time_end_day=$value->time_end_day;
                     
                        
                        if ($time_start_day!=NULL){
//                            var_dump($time_start_day);
                              $this->render('index', array('model'));
                        }
                        else{
                            echo "no hay comienzo de jornada";
                            
                        }
                        
//                        var_dump($time_start_day);
//                        var_dump($time_start_rest);
//                        var_dump($time_end_rest);
//                        var_dump($time_end_day);
                   
                        
                        
                    }
                }
                        
                        
                        
//                var_dump($jornada_empleado);
                 
                 
=======
                $fe=date('Ymd');
             
>>>>>>> 559aa2417ef57aa0108c20e995f2ed07d5c9a523
//                $model = EventEmployee:: getWorkday($id, $fe);
//                var_dump($model);
//		$this->render('index');
                
	}
        
        
        public function actionCreate(){
            $model = new EventEmployee;
            
             $this->performAjaxValidation($model);
             if (isset($_POST['EventEmployee'])){
                 echo "hola";
                 
             }
             else {
                
             }
            
           
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
        
        protected function performAjaxValidation($model) {
            if (isset($_POST['ajax']) && $_POST['ajax'] === 'submit_form') {
                echo CActiveForm::validate($model);
                Yii::app()->end();
            }
        }
}