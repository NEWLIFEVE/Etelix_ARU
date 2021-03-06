<?php
/**
 *
 */
class EventEmployeeController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';
     
	/**
     *
     */
    public function filters()
    {
        // return the filter configuration for this controller, e.g.:
        return array(
            'accessControl', /// perform access control for CRUD operations
            array(
                'application.filters.UserLoginFilter + view, create, update, index, admin, check, declarar, informacion',
                ),
            array(
                'application.filters.UserUpdateFilter + view, create, update, index, admin, check, declarar, informacion',
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
                'actions'=>Rol::getActions('EventEmployee', Yii::app()->user->id),
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
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
            $Employee=Employee::getEmployee(Yii::app()->user->id);
            if($Employee!=NULL)
            {        
                $model=  EventEmployee::getMaxDateMinHour($Employee->id);
                if ($model){
                    $eventos=EventEmployee::getWorkday($Employee->id, $model->date);
                    $validate_hour=EventEmployee::getValidate_hour($eventos[0]['hour'], $model->date);
                    if ($validate_hour){
                        $this->render('create',array('eventos'=>$eventos,));
                    }else {
                        $eventos=FALSE;
                        $this->render('create',array('eventos'=>$eventos,));
                    }
                }else{
                    $eventos=FALSE;
                    $this->render('create',array('eventos'=>$eventos,));
                }
            }
            else
            {
                $Employee = new Employee; 
                $Address = new Address;
                $this->render('/employee/infoEmployee',array('Employee' => $Employee, 'Address' => $Address));
            }
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['EventEmployee']))
		{
			$model->attributes=$_POST['EventEmployee'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('EventEmployee');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new EventEmployee('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['EventEmployee']))
			$model->attributes=$_GET['EventEmployee'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return EventEmployee the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=EventEmployee::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param EventEmployee $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='event-employee-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        
    /**
     * funcion para verificar por medio de la fecha los eventos donde esta el usuario 
     */
    public function actionCheck()
    {
    	$id=Yii::app()->user->id;
    	$date=date('Ymd');
    	$getevente=EventEmployee::getWorkday($id, $date);

    	if($getevente!=NULL)
    	{
            $this->render('Check',array(
                    'geteve'=>$getevente,
                    )
            );
    	}
    }
    
    /**
     *
     */    
    public function actionDeclarar()
    {
        if(isset($_GET['location']) && isset($_GET['date_event']) && isset($_GET['time_event']))
        {
            $last = null;
            $idEmployee = Employee::getEmployee(Yii::app()->user->id)->id;
            $date = date('Ymd');
            $model = EventEmployee::getMaxDateMinHour($idEmployee);
            if ($model) {
                $eventosOld = EventEmployee::getWorkday($idEmployee, $model->date);
                $validate_hour = EventEmployee::getValidate_hour($eventosOld[0]['hour'], $model->date);
                if ($validate_hour) {
                    $date = $model->date;
                }

                $eventos = EventEmployee::getWorkday($idEmployee, $date);

                if ($eventos != false) {
                    $last = end($eventos);
                    if ($last['event'] < 4) {
                        $type_event = $last['event'] + 1;
                        $aux = TRUE;
                    }
                } else {
                    $type_event = 1;
                    $aux = TRUE;
                }
            } else {
                $type_event = 1;
                $aux = TRUE;
            }

            if($aux)
            {
                $model = new EventEmployee();
                $model->hour_event = $_GET['time_event'];
                $model->id_type_event = $type_event;
                $model->date = $_GET['date_event'];
                $model->id_employee = $idEmployee;
                $model->id_location = Location::getId($_GET['location']);
                if($model->save())
                    echo json_encode(array('event'=>$model->id_type_event,'hour'=>$model->hour_event,'date'=>$model->date));
                else
                    echo 'fallo';
            }
        }
        else
        {
            echo 'no set';
        }
    }
    
    /**
     *
     */
    public function actionInformacion()
    {
    	$idEmployee = Employee::getEmployee(Yii::app()->user->id)->id;
        $date = date('Ymd');
        $eventos = EventEmployee::getWorkday($idEmployee, $date);
        echo json_encode($eventos);
    }
    

}

