<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		if(!Yii::app()->user->isGuest)
		{
            $this->redirect('eventEmployee/Create');
        }
        else
        {
            $model=new LoginForm;
            // if it is ajax validation request
            if(isset($_POST['ajax']) && $_POST['ajax'] === 'login-form')
            {
                echo CActiveForm::validate($model);
                Yii::app()->end();
            }
            // collect user input data
            if(isset($_POST['LoginForm']))
            {
                $model->attributes = $_POST['LoginForm'];
                // validate user input and redirect to the previous page if valid
                if($model->validate() && $model->login()) $this->redirect('EventEmployee/Create');
//                    $this->redirect(Yii::app()->user->returnUrl);
            }
            // display the login form
            $this->render('login', array('model' => $model));
        }
    }
            
            
	

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
//	public function actionLogin()
//	{
//            
//            
//              if(!Yii::app()->user->isGuest)
//        {
//            $this->render('index');
//        }
//        else
//        {
//		$model=new LoginForm;
//
//		// if it is ajax validation request
//		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
//		{
//			echo CActiveForm::validate($model);
//			Yii::app()->end();
//		}
//
//		// collect user input data
//		if(isset($_POST['LoginForm']))
//		{
//			$model->attributes=$_POST['LoginForm'];
//			// validate user input and redirect to the previous page if valid
//			if($model->validate() && $model->login())
//				$this->redirect(Yii::app()->user->returnUrl);
//		}
//		// display the login form
//		$this->render('login',array('model'=>$model));
//        }
//        
//        
//                }

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
        
        public function actionBlockScreen(){
            $model=new LoginForm;
            if(isset($_POST['Users'])){
                 $model->attributes=$_POST['Users'];
                 if($model->validate() && $model->login()) $this->redirect('/EventEmployee/Create');
            }
            
            $datos=$_GET['idUser'];
            if ($datos!=NULL){
                Yii::app()->user->logout();
                $user=Users::getUsers($datos);
                $model=Employee::getEmployee($datos);
                $this->render('lockEmployee',array('model'=>$model,'user'=>$user));
            }
            else {
                Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);  
            }
        }

        public static function CreateMenu($id_rol)
    {
        switch($id_rol)
        {
            case 1:
                $option_menu = "<li id='create' name='create'>
                                                   <a href='/EventEmployee/Create'>
                                                   <i class='icon-map-marker'></i> 
                                                   <span class='title'>Declarar</span>
                                                   <span class='selected'></span>
                                                   </a>
                          </li>
                           <li id ='employee'>
                                   <a href='javascript:;'>
                                           <i class='icon-user'></i> 
                                           <span class='title'>Empleados</span>
                                           <span class='arrow '></span>
                                           <span class='selected'></span>
                                   </a>
                                       <ul class='sub-menu'>
                                              <li>
                                                 <a href='/Employee/infoEmployee'>
                                                 Mi Perfil</a>
                                              </li>
                                              <li>
                                                 <a href='/Employee/SearchEmployee'>
                                                Ver Empleados</a>
                                              </li>
                                             
                                       </ul>
                         </li>
                         <!--<li id='controladores' name='controladores'>
                                                   <a href='/Employee/AdmiControllers'>
                                                   <i class='icon-map-marker'></i> 
                                                   <span class='title'>Administrar</span>
                                                   
                                                   </a>
                          </li>-->
                         <li id='codigoposicion' name='codigoposicion'>
                                                   <a href=''>
                                                   <i class='icon-group'></i> 
                                                   <span class='title'>Código de Posición</span> 
                                                   <span class='arrow '></span>
                                                   <span class='selected'></span>
                                                   </a>
                                                   
                                               <ul class='sub-menu'>
                                              <li>
                                                 <a href='/positionCode/'>
                                                 Crear Cp</a>
                                              </li>
                                              <li>
                                                 <a href='/positionCode/AdminPositionCode'>
                                                Administrar Cp</a>
                                              </li>
                                              
                                       </ul>                  
                          </li>
                          
                            <li id='division' name='division'>
                                                   <a href=''>
                                                   <i class='icon-th-large'></i> 
                                                   <span class='title'>División</span> 
                                                   <span class='arrow '></span>
                                                   <span class='selected'></span>
                                                   </a>
                                                   
                                               <ul class='sub-menu'>
                                              <li>
                                                 <a href='/division/viewDivision'>
                                                 Divisiones</a>
                                              </li>
                                              
                                              
                                       </ul>                  
                          </li>
                            <li id='cargoemploye' name='cargoemployee'>
                                                   <a href=''>
                                                   <i class='icon-briefcase'></i> 
                                                   <span class='title'>Cargo</span> 
                                                   <span class='arrow '></span>
                                                   <span class='selected'></span>
                                                   </a>
                                                   
                                               <ul class='sub-menu'>
                                              <li>
                                                 <a href='/position/viewPosition'>
                                                 Cargos</a>
                                              </li>
                                              
                                              
                                       </ul>                  
                          </li>
                            ";
                return $option_menu;
                break;
            case 2:
                $option_menu = "
                        <li id='create' name='create'>
                           <a href='/EventEmployee/Create'>
                           <i class='icon-map-marker'></i> 
                           <span class='title'>Declarar</span>
                           <span class='selected'></span>
                           </a>
                        </li>
                         <li id ='employee'>
                                   <a href='javascript:;'>
                                           <i class='icon-user'></i> 
                                           <span class='title'>Empleados</span>
                                           <span class='arrow '></span>
                                           <span class='selected'></span>
                                   </a>
                                       <ul class='sub-menu'>
                                              <li>
                                                 <a href='/Employee/infoEmployee'>
                                                 Mi Perfil</a>
                                              </li>
                                              <li >
                                                 <a href='/Employee/SearchEmployee'>
                                                Ver Empleados</a>
                                              </li>
                                       </ul>
                         </li>
                            
                            
                            ";
                return $option_menu;

                break;
        }

           }
           
           
        public function actionExcel()
        {
            $files=array();
            if($_GET['table']=='adminPositionCode')
            {
                $files['positionCode']['name']=$_GET['name'];
                $files['positionCode']['body']=Yii::app()->report->balanceAdmin($_GET['fechas'],$_GET['cabinas'],$_GET['name'],true);
            }

            foreach($files as $key => $file)
            {
                $this->genExcel($file['name'],$file['body'],true);
            }
        }
           
        public function genExcel($name,$html,$salida=true)
        {
            if($salida)
            {
                header('Content-type: application/vnd.ms-excel');
                header("Content-Disposition: attachment; filename={$name}.xls");
                header("Pragma: cache");
                header("Expires: 0");
                echo $html;
            }
            else
            {
                $ruta=Yii::getPathOfAlias('webroot.adjuntos').DIRECTORY_SEPARATOR;
                $fp=fopen($ruta."$name.xls","w+");
                $cuerpo="<!DOCTYPE html>
                            <html>
                                <head>
                                    <meta charset='utf-8'>
                                    <meta http-equiv='Content-Type' content='application/vnd.ms-excel charset=utf-8'>
                                </head>
                                <body>";
                $cuerpo.=$html;
                $cuerpo.="</body>
                </html>";
                fwrite($fp,$cuerpo);
            }
        }     

}