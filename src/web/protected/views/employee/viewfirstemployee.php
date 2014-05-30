 <div class="row">
            <div class="col-md-12">
               <!-- BEGIN PAGE TITLE & BREADCRUMB-->
               <h3 class="page-title">
                  Datos Básicos<small>  Información del Empleado</small>
               </h3>
               <ul class="page-breadcrumb breadcrumb">
                  <li>
                     <i class="icon-home"></i>
                     <a href="#">Inicio</a> 
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
				'id'=>'submit_form',
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
                                    <a href="#tab3" data-toggle="tab" class="step">
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
                                                        <?php echo $form->textField($model,'identity_card', array('class'=>'form-control input-medium','id'=>'mask_number')); ?>
                                                        <!--<span class="help-block">Proporcione el Segundo Apellido</span>-->
                                                  </div>
                                                </div>
                                                 <div class="contenidos_columnas">
                                                  <div class="secundario form-group">
                                                      <label class="control-label letra_empleado">Nacionalidad</label><br>
                                                            <?php if(empty($model->id_nationality)) echo $form->dropDownList($model,'nationality',$model->getNationality(), array('empty'=>'Seleccione una Opción','class'=>'form-control input-medium')); else echo $form->dropDownList($model,'nationality',$model->getNationality(), array('class'=>'form-control input-medium')); ?>
                                                          <?php //echo $form->dropDownList($model,'nationality',$model->getNationality(), array("class"=>"form-control input-medium","empty"=>"Seleccione")); ?>
                                                          <!--<span class="help-block">Proporcione el Primer Apellido</span>-->
                                                  </div>
                                                  <div class="secundario form-group">
                                                      <label class="control-label letra_empleado">Estado Civil</label><br>
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
                                  
                                    <?php  if (!empty($Address->idCity->idState->idCountry->name)){
                                    $pais=$Address->idCity->idState->idCountry->name;
                                            }
                                        else {
                                            $pais="seleccione País";
                                            }   
                                    ?>
                                  
                                  
                                     <?php 
                                                $ajaxState=array(
                                                    "ajax"=>array(
                                                        "type"=>"POST",
                                                        "url"=>CController::createUrl("Employee/StateByCountry"),
                                                        "data"=>"js:$('#submit_form').serialize()",
                                                        "update"=>"#Employee_state",

                                                    ),
                                                    "class"=>"form-control input-xlarge",
                                                    "empty"=>$pais,
                                                );
                                          ?>
                                          
                                           <?php 
                                                $ajaxCity=array(
                                                    "ajax"=>array(
                                                        "url"=>CController::createUrl("Employee/CityByState"),
                                                        "type"=>"POST",
                                                        "data"=>"js:$('#submit_form').serialize()",
                                                        "update"=>"#Address_id_city",

                                                    ),
                                                    "class"=>"form-control input-xlarge",
                                                    
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
                                                         <?php if(empty($Address->idCity->idState->name))
                                                             {echo $form->dropDownList($model,'state', array("seleccione"),$ajaxCity);}
                                                             else {echo $form->dropDownList($model,'state', array($Address->idCity->idState->name),$ajaxCity);   }
                                                             ?>
                                                            
                                                    </div>
                                               </div>
                                                 <div class="contenidos_columnas">
                                                    <div class="secundario form-group">
                                                        <label class="control-label letra_empleado">Ciudad</label><br>
                                                         <?php 
                                                            if(empty($Address->idCity->name)){echo $form->dropDownList($Address,'id_city',array("Seleccione"), array("class"=>"form-control input-xlarge"));}
                                                            else{echo $form->dropDownList($Address,'id_city',array($Address->id_city=>$Address->idCity->name), array("class"=>"form-control input-xlarge"));}
                                                             ?>
                                                    </div>
                                               </div>
                                     
                                     
                                 </div>
                                 <div class="tab-pane" id="tab3">
                                   
                                     
                                    <h3 class="block">Confirmar Datos</h3>
                                    <h4 class="form-section">Datos Personales</h4>
                                    <div class="form-group">
                                               <div class="col-md-4">
                                                  <label class="control-label col-md-6">Primer Nombre:</label>
                                                  <p class="form-control-static" data-display="Employee[first_name]"></p>
                                               </div>
                                               <div class="col-md-4">
                                                  <label class="control-label col-md-6">Segundo Nombre:</label>
                                                  <p class="form-control-static" data-display="Employee[second_name]"></p>
                                               </div>
                                    </div>
                                    <div class="form-group">
                                               <div class="col-md-4">
                                                  <label class="control-label col-md-6">Primer Apellido:</label>
                                                  <p class="form-control-static" data-display="Employee[last_name]"></p>
                                               </div>
                                               <div class="col-md-4">
                                                  <label class="control-label col-md-6">Segundo Apellido:</label>
                                                  <p class="form-control-static" data-display="Employee[second_last_name]"></p>
                                               </div>
                                    </div>
                                    
                                    <div class="form-group">
                                               <div class="col-md-4">
                                                  <label class="control-label col-md-6">Fecha de Nacimiento:</label>
                                                  <p class="form-control-static" data-display="Employee[date_birth]"></p>
                                               </div>
                                               <div class="col-md-4">
                                                  <label class="control-label col-md-6">Documento de identidad:</label>
                                                  <p class="form-control-static" data-display="Employee[identity_card]"></p>
                                               </div>
                                    </div>
                                    
                                     <div class="form-group">
                                               <div class="col-md-4">
                                                  <label class="control-label col-md-6">Nacionalidad:</label>
                                                  <p class="form-control-static" data-display="Employee[nationality]"></p>
                                               </div>
                                               <div class="col-md-4">
                                                  <label class="control-label col-md-6">Estado Civil:</label>
                                                  <p class="form-control-static" data-display="Employee[id_marital_status]"></p>
                                               </div>
                                    </div>
                                     <div class="form-group">
                                               <div class="col-md-4">
                                                  <label class="control-label col-md-6">Correo Personal:</label>
                                                  <p class="form-control-static" data-display="Employee[email_personal]"></p>
                                               </div>
                                               <div class="col-md-4">
                                                  <label class="control-label col-md-6">Correo Corporativo:</label>
                                                  <p class="form-control-static" data-display="Employee[email_company]"></p>
                                               </div>
                                    </div>
                                    <div class="form-group">
                                               <div class="col-md-4">
                                                  <label class="control-label col-md-6">Skype:</label>
                                                  <p class="form-control-static" data-display="Employee[skype]"></p>
                                               </div>
                                               <div class="col-md-4">
                                                  <label class="control-label col-md-6">Teléfono Celular:</label>
                                                  <p class="form-control-static" data-display="Employee[cellphone]"></p>
                                               </div>
                                    </div>
                                    
                                    <div class="form-group">
                                               <div class="col-md-4">
                                                  <label class="control-label col-md-6">Teléfono De Habitación:</label>
                                                  <p class="form-control-static" data-display="Employee[home_phone]"></p>
                                               </div>
                                               <div class="col-md-4">
                                                  <label class="control-label col-md-6">Extensión de Oficina:</label>
                                                  <p class="form-control-static" data-display="Employee[extension_numeric]"></p>
                                               </div>
                                    </div>
                                   
                                    <h4 class="form-section">Dirección de Habitación</h4>
                                    
                                            <div class="form-group">
                                               <div class="col-md-9">
                                                  <label class="control-label col-md-4">Apartamento, Suite, Unidad, Edificio, Piso, Etc:</label>
                                                  <p class="form-control-static" data-display="Address[address_line_1]"></p>
                                               </div>
                                             
                                            </div>
                                             <div class="form-group"> 
                                               <div class="col-md-9">
                                                  <label class="control-label col-md-4">Dirección de Calle, P.O Box, Nombre de la Compañía, C/O:</label>
                                                  <p class="form-control-static" data-display="Address[address_line_2]"></p>
                                               </div>
                                            </div>
                                            <div class="form-group"> 
                                               <div class="col-md-9">
                                                  <label class="control-label col-md-4">Códigos Postal:</label>
                                                  <p class="form-control-static" data-display="Address[zip]"></p>
                                               </div>
                                            </div>
                                            <div class="form-group"> 
                                               <div class="col-md-9">
                                                  <label class="control-label col-md-4">Cuidad:</label>
                                                  <p class="form-control-static" data-display="Employee[country]"></p>
                                               </div>
                                            </div>
                                            <div class="form-group"> 
                                               <div class="col-md-9">
                                                  <label class="control-label col-md-4">Estado/Provincia/Región:</label>
                                                  <p class="form-control-static" data-display="Employee[state]"></p>
                                               </div>
                                            </div>
                                            <div class="form-group"> 
                                               <div class="col-md-9">
                                                  <label class="control-label col-md-4">Ciudad:</label>
                                                  <p class="form-control-static" data-display="Address[id_city]"></p>
                                               </div>
                                            </div>
                                    
                                  
                                  
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