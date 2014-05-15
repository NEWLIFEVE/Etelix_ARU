 <div class="row">
            <div class="col-md-12">
               <!-- BEGIN PAGE TITLE & BREADCRUMB-->
               <h3 class="page-title">
                  Datos Básicos<small>  Información del Empleado</small>
               </h3>
               <ul class="page-breadcrumb breadcrumb">
                  <li>
                     <i class="icon-home"></i>
                     <a href="index.html">Inicio</a> 
                     <i class="icon-angle-right"></i>
                  </li>
                  <li>
                     <a href="#">Formulario de Datos Básicos</a>
                  </li>
               </ul>
               <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
         </div>
         <!-- END PAGE HEADER-->
         <!-- BEGIN PAGE CONTENT-->
         <div class="row">
            <div class="col-md-12">
               <div class="portlet box blue" id="form_wizard_1">
                  <div class="portlet-title">
                     <div class="caption">
                        <i class="icon-reorder"></i> Bienvenidos - <span class="step-title">Paso 1 de 3</span>
                     </div>
                     <div class="tools hidden-xs">
                        <a href="javascript:;" class="collapse"></a>
                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                        <a href="javascript:;" class="reload"></a>
                        <a href="javascript:;" class="remove"></a>
                     </div>
                  </div>
                  <div class="portlet-body form">
                                 <?php $form=$this->beginWidget('CActiveForm', array(
				'id'=>'firstview',
				'enableClientValidation'=>true,
				'clientOptions'=>array(
					'validateOnSubmit'=>true,
					),
                                               'htmlOptions'=>array(
                                                    'class'=>'form-horizontal'
                                                )
				)
			);
			?>
                        <div class="form-wizard">
                           <div class="form-body">
                              <ul class="nav nav-pills nav-justified steps">
                                 <li>
                                    <a href="#tab1" data-toggle="tab" class="step">
                                    <span class="number">1</span>
                                    <span class="desc"><i class="icon-ok"></i>Datos Personales</span>   
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#tab2" data-toggle="tab" class="step">
                                    <span class="number">2</span>
                                    <span class="desc"><i class="icon-ok"></i>Dirección</span>   
                                    </a>
                                 </li>
                                
                                 <li>
                                    <a href="#tab4" data-toggle="tab" class="step">
                                    <span class="number">3</span>
                                    <span class="desc"><i class="icon-ok"></i> Confirmar</span>   
                                    </a> 
                                 </li>
                              </ul>
                              <div id="bar" class="progress progress-striped" role="progressbar">
                                 <div class="progress-bar progress-bar-success"></div>
                              </div>
                              <div class="tab-content">
                                 <div class="alert alert-danger display-none">
                                    <button class="close" data-dismiss="alert"></button>
                                    Errores en el formulario
                                 </div>
                                 <div class="alert alert-success display-none">
                                    <button class="close" data-dismiss="alert"></button>
                                    Your form validation is successful!
                                 </div>
                                 <div class="tab-pane active" id="tab1">
                                    <div class="tab-pane active" id="tab1">
                                             <h3 class="form-section">Información Personal</h3>
                                             
                                             
                                             <div class="div_tabla_editar_empleados">
                                                <div class="contenidos_columnas">
                                                  <div class="secundario form-group">
                                                        <label class="control-label letra_empleado">Primer Nombre</label>
                                                         <?php echo $form->textField($model,'first_name', array('class'=>'form-control input-medium')); ?>  
                                                         <!--<span class="help-block">Proporcione el Primer Nombre</span>-->
                                                    </div>
                                                  <div class="secundario form-group">
                                                        <label class="control-label letra_empleado">Segundo Nombre</label>
                                                        <?php echo $form->textField($model,'second_name', array('class'=>'form-control input-medium')); ?>
                                                        <!--<span class="help-block">Proporcione el Segundo Nombre</span>-->
                                                  </div>
                                                </div>
                                                 <div class="contenidos_columnas">
                                                  <div class="secundario form-group">
                                                        <label class="control-label letra_empleado">Primer Apellido</label>
                                                          <?php echo $form->textField($model,'last_name', array('class'=>'form-control input-medium')); ?>
                                                          <!--<span class="help-block">Proporcione el Primer Apellido</span>-->
                                                  </div>
                                                  <div class="secundario form-group">
                                                        <label class="control-label letra_empleado">Segundo Apellido</label>
                                                        <?php echo $form->textField($model,'second_last_name', array('class'=>'form-control input-medium')); ?>
                                                        <!--<span class="help-block">Proporcione el Segundo Apellido</span>-->
                                                  </div>
                                                </div>
                                                 <div class="contenidos_columnas">
                                                  <div class="secundario form-group">
                                                        <label class="control-label letra_empleado">Fecha de Nacimiento</label>
                                                          <?php echo $form->textField($model,'date_birth', array('class'=>'form-control input-medium date-picker')); ?>
                                                          <!--<span class="help-block">Proporcione el Primer Apellido</span>-->
                                                  </div>
                                                  <div class="secundario form-group">
                                                        <label class="control-label letra_empleado">Documento de identidad</label>
                                                        <?php echo $form->textField($model,'identity_card', array('class'=>'form-control input-medium')); ?>
                                                        <!--<span class="help-block">Proporcione el Segundo Apellido</span>-->
                                                  </div>
                                                </div>
                                                 <div class="contenidos_columnas">
                                                  <div class="secundario form-group">
                                                        <label class="control-label letra_empleado">Nacionalidad</label>
                                                          <?php echo $form->dropDownList($model,'nationality',$model->getNationality(), array("class"=>"form-control input-medium","empty"=>"Seleccione")); ?>
                                                          <!--<span class="help-block">Proporcione el Primer Apellido</span>-->
                                                  </div>
                                                  <div class="secundario form-group">
                                                        <label class="control-label letra_empleado">Estado Civil</label>
                                                         <?php echo $form->dropDownList($model,'id_marital_status',$model->getMaritalStatus(), array("class"=>"form-control input-medium", "empty"=>"Seleccione")); ?>
                                                        <!--<span class="help-block">Proporcione el Segundo Apellido</span>-->
                                                  </div>
                                                </div>
                                                  <div class="contenidos_columnas">
                                                  <div class="secundario form-group">
                                                        <label class="control-label letra_empleado">Correo Personal</label>
                                                            <?php echo $form->textField($model,'email_personal', array('class'=>'form-control input-medium')); ?>
                                                          <!--<span class="help-block">Proporcione el Primer Apellido</span>-->
                                                  </div>
                                                  <div class="secundario form-group">
                                                        <label class="control-label letra_empleado">Correo Corporativo</label>
                                                           <?php echo $form->textField($model,'email_company', array('class'=>'form-control input-medium')); ?>
                                                        <!--<span class="help-block">Proporcione el Segundo Apellido</span>-->
                                                  </div>
                                                </div>
                                                  <div class="contenidos_columnas">
                                                  <div class="secundario form-group">
                                                        <label class="control-label letra_empleado">Skype</label>
                                                            <?php echo $form->textField($model,'skype', array('class'=>'form-control input-medium')); ?>
                                                          <!--<span class="help-block">Proporcione el Primer Apellido</span>-->
                                                  </div>
                                                  <div class="secundario form-group">
                                                        <label class="control-label letra_empleado">Teléfono Celular</label>
                                                            <?php echo $form->textField($model,'cellphone', array('class'=>'form-control input-medium')); ?>
                                                          <!--<span class="help-block">Proporcione el Primer Apellido</span>-->
                                                  </div>
                                                </div>
                                               <div class="contenidos_columnas">
                                                  <div class="secundario form-group">
                                                        <label class="control-label letra_empleado">Teléfono De Habitación</label>
                                                            <?php echo $form->textField($model,'home_phone', array('class'=>'form-control input-medium')); ?>
                                                          <!--<span class="help-block">Proporcione el Primer Apellido</span>-->
                                                  </div>
                                                  <div class="secundario form-group">
                                                        <label class="control-label letra_empleado">Extensión de Oficina</label>
                                                            <?php echo $form->textField($model,'extension_numeric', array('class'=>'form-control input-medium')); ?>
                                                          <!--<span class="help-block">Proporcione el Primer Apellido</span>-->
                                                  </div>
                                                </div>
                                            </div>     
                                          </div> 
                                 </div>
                                  
                                     <?php 
                                                $ajaxState=array(
                                                    "ajax"=>array(
                                                        "type"=>"POST",
                                                        "url"=>CController::createUrl("Employee/StateByCountry"),
                                                        "data"=>"js:$('#firstview').serialize()",
                                                        "update"=>"#Employee_state",

                                                    ),
                                                    "class"=>"form-control input-xlarge",
                                                    "empty"=>"Seleccione",
                                                );
                                          ?>
                                          
                                           <?php 
                                                $ajaxCity=array(
                                                    "ajax"=>array(
                                                        "url"=>CController::createUrl("Employee/CityByState"),
                                                        "type"=>"POST",
                                                        "data"=>"js:$('#firstview').serialize()",
                                                        "update"=>"#Address_id_city",

                                                    ),
                                                    "class"=>"form-control input-xlarge",
                                                    "empty"=>"Seleccione"
                                                );
                                  
                                  ?>
                                  
                                  
                                  
                                  
                                 <div class="tab-pane" id="tab2">
                                     <h3 class="form-section">Dirección de Habitación</h3>
                                               <div class="contenidos_columnas">
                                                    <div class="secundario form-group">
                                                              <label class="control-label letra_empleado">Apartamento, Suite, Unidad, Edificio, Piso, Etc</label>
                                                              <?php echo $form->textField($Address,'address_line_1', array('class'=>'form-control input-xlarge'));?>
                                                    </div>
                                               </div>
                                               <div class="contenidos_columnas">
                                                    <div class="secundario form-group">
                                                              <label class="control-label letra_empleado">Dirección de Calle, P.O Box, Nombre de la Compañía, C/O</label>
                                                              <?php echo $form->textField($Address,'address_line_2', array('class'=>'form-control input-xlarge'));?>
                                                    </div>
                                               </div>
                                               <div class="contenidos_columnas">
                                                    <div class="secundario form-group">
                                                              <label class="control-label letra_empleado">Códigos Postal</label>
                                                              <?php echo $form->textField($Address,'zip', array('class'=>'form-control input-xlarge'));?>
                                                    </div>
                                               </div>
                                               <div class="contenidos_columnas">
                                                    <div class="secundario form-group">
                                                        <label class="control-label letra_empleado">País</label><br>
                                                              <?php  echo $form->dropDownList($model,'country',Country::getCountry(),$ajaxState);?>
                                                    </div>
                                               </div>
                                                <div class="contenidos_columnas">
                                                    <div class="secundario form-group">
                                                        <label class="control-label letra_empleado">Estado/Provincia/Región</label><br>
                                                             <?php echo $form->dropDownList($model,'state', array(),$ajaxCity);?>
                                                    </div>
                                               </div>
                                                 <div class="contenidos_columnas">
                                                    <div class="secundario form-group">
                                                        <label class="control-label letra_empleado">Ciudad</label><br>
                                                             <?php echo $form->dropDownList($Address,'id_city',array(), array('class'=>'form-control input-xlarge'));?>
                                                    </div>
                                               </div>
                                     
                                     
                                 </div>
                                 <div class="tab-pane" id="tab4">
                                   
                                 </div>
                              </div>
                           </div>
                           <div class="form-actions fluid">
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="col-md-offset-4 col-md-9">
                                       <a href="javascript:;" class="btn default button-previous">
                                       <i class="m-icon-swapleft"></i> Atras 
                                       </a>
                                       <a href="javascript:;" class="btn blue button-next">
                                       Siguiente <i class="m-icon-swapright m-icon-white"></i>
                                       </a>
                                        <input type="submit" value='enviar' class="btn green button-submit" />
                                       </a>                            
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                    <?php $this->endWidget(); ?>
                  </div>
               </div>
            </div>
         </div>