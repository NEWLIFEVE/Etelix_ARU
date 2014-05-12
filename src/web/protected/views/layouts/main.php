<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo Yii::app()->charset;?>" />
	<meta name="language" content="en" />

<!--	 blueprint CSS framework 
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/stylo.css" />-->
    
   <meta charset="utf-8" />

   
   <meta name="MobileOptimized" content="320">
   <!-- BEGIN GLOBAL MANDATORY STYLES -->   
   <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/metronic/plugins/font-awesome/css/font-awesome.min.css" />
   <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/metronic/plugins/bootstrap/css/bootstrap.min.css" />
   <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/metronic/plugins/uniform/css/uniform.default.css" />
   <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/metronic/plugins/select2/select2_metro.css" />
   
   <!-- END GLOBAL MANDATORY STYLES -->
   <!-- BEGIN PAGE LEVEL STYLES --> 
  
   <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/metronic/plugins/select2/select2_metro.css" />
   <!-- END PAGE LEVEL SCRIPTS -->
   <!-- BEGIN THEME STYLES --> 
   <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/metronic/css/style-metronic.css" />
   <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/metronic/css/style.css" />

   <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/metronic/css/style-responsive.css" />
   <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/metronic/css/plugins.css" />
   <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/metronic/css/themes/light.css" />

   <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/metronic/css/pages/login-soft.css" />
   <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/metronic/css/custom.css" />

   
   
   
      <link rel="stylesheet" type="text/css" href="/themes/metronic/plugins/clockface/css/clockface.css" />
   <link rel="stylesheet" type="text/css" href="/themes/metronic/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
   <link rel="stylesheet" type="text/css" href="/themes/metronic/plugins/bootstrap-datepicker/css/datepicker.css" />
   <link rel="stylesheet" type="text/css" href="/themes/metronic/plugins/bootstrap-timepicker/compiled/timepicker.css" />
   <link rel="stylesheet" type="text/css" href="/themes/metronic/plugins/bootstrap-colorpicker/css/colorpicker.css" />
   <link rel="stylesheet" type="text/css" href="/themes/metronic/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" />
   <link rel="stylesheet" type="text/css" href="/themes/metronic/plugins/bootstrap-datetimepicker/css/datetimepicker.css" />
   
   
   
   
   
   

   
   

   <!-- END THEME STYLES -->
   <link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.ico" type="image/x-icon" />

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">



	<div id="mainmenu">
		
            
            <?php
            
                if (!Yii::app()->user->isGuest){
                    $menu="
                        

<div class='header navbar navbar-inverse navbar-fixed-top'>
                            <div class='header-inner'>
                           
                                    <a class='navbar-brand' href='/'>
                                        <font class='Aa'>A</font><font class='RUu'>RU</font>
                                    </a>
   
                                     <a href='javascript:;' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-collapse'>
                                     <img src='/themes/metronic/img/menu-toggler.png' alt='' />
                                   
                                     </a> 

                                     <ul class='nav navbar-nav pull-right'>

                                        <li class='dropdown' id='header_notification_bar'>
                                           <a href='#' class='dropdown-toggle' data-toggle='dropdown' data-hover='dropdown'
                                              data-close-others='true'>
                                           <i class='icon-warning-sign'></i>
                                           <span class='badge'><!--COLOCAR EL NUMERO DE NOTIFICACIONES PENDIENTES --></span>
                                           </a>
                                           <ul class='dropdown-menu extended notification'>
                                              <li>

                                              </li>
                                              <!--<li>
                                                 <ul class='dropdown-menu-list scroller' style='height: 250px;'>
                                                    <li>  
                                                       <a href='#'>
                                                       <span class='label label-sm label-icon label-success'><i class='icon-plus'></i></span>
                                                       New user registered. 
                                                       <span class='time'>Just now</span>
                                                       </a>
                                                    </li>
                                                    <li>  
                                                       <a href='#'>
                                                       <span class='label label-sm label-icon label-danger'><i class='icon-bolt'></i></span>
                                                       Server #12 overloaded. 
                                                       <span class='time'>15 mins</span>
                                                       </a>
                                                    </li>
                                                    <li>  
                                                       <a href='#'>
                                                       <span class='label label-sm label-icon label-warning'><i class='icon-bell'></i></span>
                                                       Server #2 not responding.
                                                       <span class='time'>22 mins</span>
                                                       </a>
                                                    </li>
                                                    <li>  
                                                       <a href='#'>
                                                       <span class='label label-sm label-icon label-info'><i class='icon-bullhorn'></i></span>
                                                       Application error.
                                                       <span class='time'>40 mins</span>
                                                       </a>
                                                    </li>
                                                    <li>  
                                                       <a href='#'>
                                                       <span class='label label-sm label-icon label-danger'><i class='icon-bolt'></i></span>
                                                       Database overloaded 68%. 
                                                       <span class='time'>2 hrs</span>
                                                       </a>
                                                    </li>
                                                    <li>  
                                                       <a href='#'>
                                                       <span class='label label-sm label-icon label-danger'><i class='icon-bolt'></i></span>
                                                       2 user IP blocked.
                                                       <span class='time'>5 hrs</span>
                                                       </a>
                                                    </li>
                                                    <li>  
                                                       <a href='#'>
                                                       <span class='label label-sm label-icon label-warning'><i class='icon-bell'></i></span>
                                                       Storage Server #4 not responding.
                                                       <span class='time'>45 mins</span>
                                                       </a>
                                                    </li>
                                                    <li>  
                                                       <a href='#'>
                                                       <span class='label label-sm label-icon label-info'><i class='icon-bullhorn'></i></span>
                                                       System Error.
                                                       <span class='time'>55 mins</span>
                                                       </a>
                                                    </li>
                                                    <li>  
                                                       <a href='#'>
                                                       <span class='label label-sm label-icon label-danger'><i class='icon-bolt'></i></span>
                                                       Database overloaded 68%. 
                                                       <span class='time'>2 hrs</span>
                                                       </a>
                                                    </li>
                                                 </ul>
                                              </li>-->
                                              <!--<li class='external'>   
                                                 <a href='#'> MESAJE PARA COLORCAR VER TODAS LAS NOTIFICACIONES<i class='m-icon-swapright'></i></a>
                                              </li>-->
                                           </ul>
                                        </li>

                                        <li class='dropdown' id='header_inbox_bar'>
                                           <a href='#' class='dropdown-toggle' data-toggle='dropdown' data-hover='dropdown'
                                              data-close-others='true'>
                                           <i class='icon-envelope'></i>
                                           <span class='badge'><!--COLOCAR EL NUMERO DE NOTIFICACIONES PENDIENTES --></span>
                                           </a>
                                           <ul class='dropdown-menu extended inbox'>
                                              <li>
                                                 <p><!--COLOCAR EL MENSAJE DE NOTIFICACIONES PENDIENTES--></p>
                                              </li>
                                             <!-- <li>
                                                 <ul class='dropdown-menu-list scroller' style='height: 250px;'>
                                                   <li>  
                                                       <a href='inbox.html?a=view'>
                                                       <span class='photo'><img src='.//themes/metronic/img/avatar2.jpg' alt=''/></span>
                                                       <span class='subject'>
                                                       <span class='from'>Lisa Wong</span>
                                                       <span class='time'>Just Now</span>
                                                       </span>
                                                       <span class='message'>
                                                       Vivamus sed auctor nibh congue nibh. auctor nibh
                                                       auctor nibh..
                                                       </span>  
                                                       </a>
                                                    </li>
                                                    <li>  
                                                       <a href='inbox.html?a=view'>
                                                       <span class='photo'><img src='./assets/img/avatar3.jpg' alt=''/></span>
                                                       <span class='subject'>
                                                       <span class='from'>Richard Doe</span>
                                                       <span class='time'>16 mins</span>
                                                       </span>
                                                       <span class='message'>
                                                       Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh
                                                       auctor nibh...
                                                       </span>  
                                                       </a>
                                                    </li>
                                                    <li>  
                                                       <a href='inbox.html?a=view'>
                                                       <span class='photo'><img src='./assets/img/avatar1.jpg' alt=''/></span>
                                                       <span class='subject'>
                                                       <span class='from'>Bob Nilson</span>
                                                       <span class='time'>2 hrs</span>
                                                       </span>
                                                       <span class='message'>
                                                       Vivamus sed nibh auctor nibh congue nibh. auctor nibh
                                                       auctor nibh...
                                                       </span>  
                                                       </a>
                                                    </li>
                                                    <li>  
                                                       <a href='inbox.html?a=view'>
                                                       <span class='photo'><img src='./assets/img/avatar2.jpg' alt=''/></span>
                                                       <span class='subject'>
                                                       <span class='from'>Lia Wong</span>
                                                       <span class='time'>40 mins</span>
                                                       </span>
                                                       <span class='message'>
                                                       Vivamus sed auctor 40% nibh congue nibh...
                                                       </span>  
                                                       </a>
                                                    </li>
                                                    <li>  
                                                       <a href='inbox.html?a=view'>
                                                       <span class='photo'><img src='./assets/img/avatar3.jpg' alt=''/></span>
                                                       <span class='subject'>
                                                       <span class='from'>Richard Doe</span>
                                                       <span class='time'>46 mins</span>
                                                       </span>
                                                       <span class='message'>
                                                       Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh
                                                       auctor nibh...
                                                       </span>  
                                                       </a>
                                                    </li>
                                                 </ul>
                                              </li>-->
                                              <!--<li class='external'>   
                                                 <a href='inbox.html'><!--VER TODOS LAS NOTIFICACIONES<i class='m-icon-swapright'></i></a>
                                              </li>-->
                                           </ul>
                                        </li>

                                        <li class='dropdown' id='header_task_bar'>
                                           <a href='#' class='dropdown-toggle' data-toggle='dropdown' data-hover='dropdown' data-close-others='true'>
                                           <i class='icon-tasks'></i>
                                           <span class='badge'><!--COLOCAR EL NUMERO DE NOTIFICACIONES PENDIENTES --></span>
                                           </a>
                                           <ul class='dropdown-menu extended tasks'>
                                              <li>
                                                 <p><!--COLOCAR EL MENSAJE DE NOTIFICACIONES PENDIENTES--></p>
                                              </li>
                                              <li>
                                                 <!--<ul class='dropdown-menu-list scroller' style='height: 250px;'>
                                                    <li>  
                                                       <a href='#'>
                                                       <span class='task'>
                                                       <span class='desc'>New release v1.2</span>
                                                       <span class='percent'>30%</span>
                                                       </span>
                                                       <span class='progress'>
                                                       <span style='width: 40%;' class='progress-bar progress-bar-success' aria-valuenow='40' aria-valuemin='0' aria-valuemax='100'>
                                                       <span class='sr-only'>40% Complete</span>
                                                       </span>
                                                       </span>
                                                       </a>
                                                    </li>
                                                    <li>  
                                                       <a href='#'>
                                                       <span class='task'>
                                                       <span class='desc'>Application deployment</span>
                                                       <span class='percent'>65%</span>
                                                       </span>
                                                       <span class='progress progress-striped'>
                                                       <span style='width: 65%;' class='progress-bar progress-bar-danger' aria-valuenow='65' aria-valuemin='0' aria-valuemax='100'>
                                                       <span class='sr-only'>65% Complete</span>
                                                       </span>
                                                       </span>
                                                       </a>
                                                    </li>
                                                    <li>  
                                                       <a href='#'>
                                                       <span class='task'>
                                                       <span class='desc'>Mobile app release</span>
                                                       <span class='percent'>98%</span>
                                                       </span>
                                                       <span class='progress'>
                                                       <span style='width: 98%;' class='progress-bar progress-bar-success' aria-valuenow='98' aria-valuemin='0' aria-valuemax='100'>
                                                       <span class='sr-only'>98% Complete</span>
                                                       </span>
                                                       </span>
                                                       </a>
                                                    </li>
                                                    <li>  
                                                       <a href='#'>
                                                       <span class='task'>
                                                       <span class='desc'>Database migration</span>
                                                       <span class='percent'>10%</span>
                                                       </span>
                                                       <span class='progress progress-striped'>
                                                       <span style='width: 10%;' class='progress-bar progress-bar-warning' aria-valuenow='10' aria-valuemin='0' aria-valuemax='100'>
                                                       <span class='sr-only'>10% Complete</span>
                                                       </span>
                                                       </span>
                                                       </a>
                                                    </li>
                                                    <li>  
                                                       <a href='#'>
                                                       <span class='task'>
                                                       <span class='desc'>Web server upgrade</span>
                                                       <span class='percent'>58%</span>
                                                       </span>
                                                       <span class='progress progress-striped'>
                                                       <span style='width: 58%;' class='progress-bar progress-bar-info' aria-valuenow='58' aria-valuemin='0' aria-valuemax='100'>
                                                       <span class='sr-only'>58% Complete</span>
                                                       </span>
                                                       </span>
                                                       </a>
                                                    </li>
                                                    <li>  
                                                       <a href='#'>
                                                       <span class='task'>
                                                       <span class='desc'>Mobile development</span>
                                                       <span class='percent'>85%</span>
                                                       </span>
                                                       <span class='progress progress-striped'>
                                                       <span style='width: 85%;' class='progress-bar progress-bar-success' aria-valuenow='85' aria-valuemin='0' aria-valuemax='100'>
                                                       <span class='sr-only'>85% Complete</span>
                                                       </span>
                                                       </span>
                                                       </a>
                                                    </li>
                                                    <li>  
                                                       <a href='#'>
                                                       <span class='task'>
                                                       <span class='desc'>New UI release</span>
                                                       <span class='percent'>18%</span>
                                                       </span>
                                                       <span class='progress progress-striped'>
                                                       <span style='width: 18%;' class='progress-bar progress-bar-important' aria-valuenow='18' aria-valuemin='0' aria-valuemax='100'>
                                                       <span class='sr-only'>18% Complete</span>
                                                       </span>
                                                       </span>
                                                       </a>
                                                    </li>
                                                 </ul>-->
                                              </li>
                                             <!-- <li class='external'>   
                                                 <a href='#'>VER TODAS LAS NOTIFICACIONES<i class='m-icon-swapright'></i></a>
                                              </li>-->
                                           </ul>
                                        </li>

                                        <li class='dropdown user'>
                                           <a href='#' class='dropdown-toggle' data-toggle='dropdown' data-hover='dropdown' data-close-others='true'>
                                           <img class='sizephotoemployee' alt='' src='/".Employee::getImage(Yii::app()->user->id)."'/>
                                           <span class='username'>".Yii::app()->user->name."</span>
                                           <i class='icon-angle-down'></i>
                                           </a>
                                           <ul class='dropdown-menu'>
                                              <li><a href='/Employee/infoEmployee'><i class='icon-user'></i> Mi Perfil</a>
                                              </li>
                                             <!-- <li><a href='page_calendar.html'><i class='icon-calendar'></i> My Calendar</a>
                                              </li>
                                              <li><a href='inbox.html'><i class='icon-envelope'></i> My Inbox <span class='badge badge-danger'>3</span></a>
                                              </li>
                                              <li><a href='#'><i class='icon-tasks'></i> My Tasks <span class='badge badge-success'>7</span></a>
                                              </li>
                                              <li class='divider'></li>
                                              <li><a href='javascript:;' id='trigger_fullscreen'><i class='icon-move'></i> Full Screen</a>
                                              </li>-->
                                              <li><a href='/User/Updatepass'><i class='icon-lock'></i> Cambiar Contraseña</a>
                                              </li>
                                              <li><a href='/site/logout'><i class='icon-key'></i> Log Out</a>
                                              </li>
                                           </ul>
                                        </li>

                                     </ul>

                                  </div>

                               </div>

                                    <div class='clearfix'></div>
                                       <!-- BEGIN CONTAINER -->
                                       
                                        <div class='page-container'>
                                          <!-- BEGIN SIDEBAR -->
                                          <div class='page-sidebar navbar-collapse collapse'>
                                             <!-- BEGIN SIDEBAR MENU -->        
                                             <ul class='page-sidebar-menu'>
                                                <li>
                                                   <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                                                   <div class='sidebar-toggler hidden-phone'></div>
                                                   <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                                                </li>
                                                <li>
                                                   <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                                                   <form class='sidebar-search' action='extra_search.html' method='POST'>
                                                      <div class='form-container'>
                                                         <div class='input-box'>
                                                            <a href='javascript:;' class='remove'></a>
                                                            <input type='text' placeholder='Search...'/>
                                                            <input type='button' class='submit' value=' '/>
                                                         </div>
                                                      </div>
                                                   </form>
                                                   <!-- END RESPONSIVE QUICK SEARCH FORM -->
                                                </li>
                                                <li class='start active'>
                                                   <a href='/'>
                                                   <i class='icon-home'></i> 
                                                   <span class='title'>Inicio</span>
                                                   <span class='selected'></span>
                                                   </a>
                                                </li>
                                               
                                             <li class='' href='javascript:;'>
                                                   <a href='/EventEmployee/Create'>
                                                   <i class='icon-user'></i> 
                                                   <span class='title'>Declarar</span>
                                                   <span class='selected'></span>
                                                   </a>
                                                </li>
                                             

                                             </ul>
                                             <!-- END SIDEBAR MENU -->
                                          </div>


                                             <div class='page-content'>
                                                    ". $content ."
                                             </div>
                                            
                                               <!-- BEGIN FOOTER -->
                                       <div class='footer'>
                                          <div class='footer-inner'>
                                             Copyright &copy; <?php echo date('Y'); ?> SACET All Rights Reserved.
                                          </div>
                                          <div class='footer-tools'>
                                             <span class='go-top'>
                                             <i class='icon-angle-up'></i>
                                             </span>
                                          </div>
                                       </div>
                                       <!-- END FOOTER -->             




                            ";
                    echo $menu;
                    
                }
            ?>
	</div><!-- mainmenu -->
        
	<!--<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?>
	<?php endif?>-->

	 <?php if (Yii::app()->user->isGuest){ echo $content; }?>

	
     

</div><!-- page -->



<!-- END COPYRIGHT -->
   <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
   <!-- BEGIN CORE PLUGINS -->   
   <!--[if lt IE 9]>
   <script src="themes/metronic/plugins/respond.min.js"></script>
   <script src="themes/metronic/plugins/excanvas.min.js"></script> 
   <![endif]--> 
   
   <script src="<?php echo Yii::app()->baseUrl; ?>/themes/metronic/plugins/jquery-1.10.2.min.js"></script>
   <script src="<?php echo Yii::app()->baseUrl; ?>/themes/metronic/plugins/jquery-migrate-1.2.1.min.js"></script>
   <script src="<?php echo Yii::app()->baseUrl; ?>/themes/metronic/plugins/bootstrap/js/bootstrap.min.js"></script>
   <script src="<?php echo Yii::app()->baseUrl; ?>/themes/metronic/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js"></script>
   <script src="<?php echo Yii::app()->baseUrl; ?>/themes/metronic/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
   <script src="<?php echo Yii::app()->baseUrl; ?>/themes/metronic/plugins/jquery.blockui.min.js"></script>
   <script src="<?php echo Yii::app()->baseUrl; ?>/themes/metronic/plugins/jquery.cookie.min.js"></script>
   <script src="<?php echo Yii::app()->baseUrl; ?>/themes/metronic/plugins/uniform/jquery.uniform.min.js"></script>

  

   <!-- END CORE PLUGINS -->
   <!-- BEGIN PAGE LEVEL PLUGINS -->
   <script src="<?php echo Yii::app()->baseUrl; ?>/themes/metronic/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
   <script src="<?php echo Yii::app()->baseUrl; ?>/themes/metronic/plugins/backstretch/jquery.backstretch.min.js"></script>
   <script src="<?php echo Yii::app()->baseUrl; ?>/themes/metronic/plugins/select2/select2.min.js"></script>
    <script src="<?php echo Yii::app()->baseUrl; ?>/themes/metronic/plugins/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="<?php echo Yii::app()->baseUrl; ?>/themes/metronic/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>

   <!-- END PAGE LEVEL PLUGINS -->
   <!-- BEGIN PAGE LEVEL SCRIPTS -->
   <script src="<?php echo Yii::app()->baseUrl; ?>/themes/metronic/scripts/app.js"></script>
   <script src="<?php echo Yii::app()->baseUrl; ?>/themes/metronic/scripts/login-soft.js"></script>
   
    <script src="<?php echo Yii::app()->baseUrl; ?>/themes/metronic/scripts/form-wizard.js"></script>
    
    
    <script src="<?php echo Yii::app()->baseUrl; ?>/themes/metronic/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    
   
     <!-- END CORE PLUGINS -->
   <!-- BEGIN PAGE LEVEL PLUGINS -->
   
   
   
   <script type="text/javascript" src="/themes/metronic/plugins/fuelux/js/spinner.min.js"></script>
   <script type="text/javascript" src="/themes/metronic/plugins/ckeditor/ckeditor.js"></script>  
   <script type="text/javascript" src="/themes/metronic/plugins/bootstrap-fileupload/bootstrap-fileupload.js"></script>
   <script type="text/javascript" src="/themes/metronic/plugins/select2/select2.min.js"></script>
   <script type="text/javascript" src="/themes/metronic/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script> 
   <script type="text/javascript" src="/themes/metronic/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
   <script type="text/javascript" src="/themes/metronic/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
   <script type="text/javascript" src="/themes/metronic/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
   <script type="text/javascript" src="/themes/metronic/plugins/clockface/js/clockface.js"></script>
   <script type="text/javascript" src="/themes/metronic/plugins/bootstrap-daterangepicker/moment.min.js"></script>
   <script type="text/javascript" src="/themes/metronic/plugins/bootstrap-daterangepicker/daterangepicker.js"></script> 
   <script type="text/javascript" src="/themes/metronic/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>  
   <script type="text/javascript" src="/themes/metronic/plugins/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
   <script type="text/javascript" src="/themes/metronic/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js"></script>   
   <script type="text/javascript" src="/themes/metronic/plugins/jquery.input-ip-address-control-1.0.min.js"></script>
   <script type="text/javascript" src="/themes/metronic/plugins/jquery-multi-select/js/jquery.multi-select.js"></script>
   <script type="text/javascript" src="/themes/metronic/plugins/jquery-multi-select/js/jquery.quicksearch.js"></script>   
   <script src="/themes/metronic/plugins/jquery.pwstrength.bootstrap/src/pwstrength.js" type="text/javascript" ></script>
   
    <script src="/themes/metronic/plugins/jquery.uploadfile.js" type="text/javascript" ></script>
    
    
   <script src="/themes/metronic/plugins/bootstrap-switch/static/js/bootstrap-switch.min.js" type="text/javascript" ></script>
   <script src="/themes/metronic/plugins/jquery-tags-input/jquery.tagsinput.min.js" type="text/javascript" ></script>
   <script src="/themes/metronic/plugins/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript" ></script>
   <script src="/themes/metronic/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript" ></script>
   
   <!-- END PAGE LEVEL PLUGINS -->
   <!-- BEGIN PAGE LEVEL SCRIPTS -->
   <script src="/themes/metronic/scripts/form-components.js"></script>
   <script src="/themes/metronic/scripts/form-validation.js"></script> 
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/aru.js" /> -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/aru.js"></script>

     <!-- END PAGE LEVEL SCRIPTS -->

   
   <script>
      jQuery(document).ready(function() {     
        App.init();
        Login.init();
        FormWizard.init();
        FormComponents.init();
        FormValidation.init();
      });
   </script>
</body>
</html>
