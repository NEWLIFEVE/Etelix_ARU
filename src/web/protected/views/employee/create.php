

<div class="row">
            <div class="col-md-12">
               <!-- BEGIN PAGE TITLE & BREADCRUMB-->
               <h3 class="page-title">
                  Agregar Nuevo Empleado <!--<small>statistics and more</small>-->
               </h3>
               <ul class="page-breadcrumb breadcrumb">
                  <li>
                     <i class="icon-home"></i>
                     <a href="/">Inicio</a> 
                     <i class="icon-angle-right"></i>
                  </li>
                  <li><a href="/employee/">Datos Empleado</a></li>
                  <li class="pull-right">
                     <div id="dashboard-report-range" class="dashboard-date-range tooltips" data-placement="top" data-original-title="Change dashboard date range">
                        <i class="icon-calendar"></i>
                        <span></span>
                        <i class="icon-angle-down"></i>
                     </div>
                  </li>
               </ul>
               <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
         </div>

             
 <!-- BEGIN PAGE HEADER-->   
       
         <!-- END PAGE HEADER-->
         <!-- BEGIN PAGE CONTENT-->
         <div class="row">
            <div class="col-md-12">
               <div class="portlet box blue" id="form_wizard_1">
                  <div class="portlet-title">
                     <div class="caption">
                        <i class="icon-reorder"></i> Asistente para formularios - <span class="step-title">Paso 1 de 9</span>
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
                                    <span class="desc"><i class="icon-ok"></i>Relación familiar</span>   
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#tab4" data-toggle="tab" class="step active">
                                    <span class="number">4</span>
                                    <span class="desc"><i class="icon-ok"></i>Datos Bancarios</span>   
                                    </a>
                                 </li>
                                  <li>
                                    <a href="#tab5" data-toggle="tab" class="step">
                                    <span class="number">5</span>
                                    <span class="desc"><i class="icon-ok"></i>Asig. Organizacional</span>   
                                    </a> 
                                 </li>
                                  <li>
                                    <a href="#tab6" data-toggle="tab" class="step">
                                    <span class="number">6</span>
                                    <span class="desc"><i class="icon-ok"></i>Horario Teórico</span>   
                                    </a> 
                                 </li>
                                 <li>
                                    <a href="#tab7" data-toggle="tab" class="step">
                                    <span class="number">7</span>
                                    <span class="desc"><i class="icon-ok"></i>Servicio Médico</span>   
                                    </a> 
                                 </li>
                                  <li>
                                    <a href="#tab8" data-toggle="tab" class="step">
                                    <span class="number">8</span>
                                    <span class="desc"><i class="icon-ok"></i>Medidas Laborales</span>   
                                    </a> 
                                 </li>
                                 <li>
                                    <a href="#tab9" data-toggle="tab" class="step">
                                    <span class="number">9</span>
                                    <span class="desc"><i class="icon-ok"></i>Confirmar</span>   
                                    </a> 
                                 </li>
                              </ul>
                              <div id="bar" class="progress progress-striped" role="progressbar">
                                 <div class="progress-bar progress-bar-success"></div>
                              </div>
                              <div class="tab-content">
                                 <div class="alert alert-danger display-none">
                                    <button class="close" data-dismiss="alert"></button>
                                    Usted tiene algunos errores en el formulario. Por favor, consulte más abajo.
                                 </div>
                                 <div class="tab-pane active" id="tab1">
                                    <h3 class="form-section">Información Personal</h3>
                                    <div class="form-group">
                                        <label class="control-label col-md-2">Nombre<span class="required">*</span></label>
                                           <div class="col-md-3"> 
                                               <?php echo $form->textField($model,'first_name', array('class'=>'form-control')); ?>  
                                               <span class="help-block">Proporcione el Nombre del Empleado</span>
                                           </div>
                                        <label class="control-label col-md-2">Apellido<span class="required">*</span></label>
                                           <div class="col-md-3">
                                            <?php echo $form->textField($model,'last_name', array('class'=>'form-control')); ?>
                                             <span class="help-block">Proporcione el Apellido del Empleado</span>
                                          </div>
                                    </div>
                                     <div class="form-group">
                                         <label class="control-label col-md-2">Genero<span class="required">*</span></label>
                                           <div class="col-md-3"> 
                                               <div class="radio-list">
                                                    <label control-label> 
                                                        <?php echo $form->radioButton($model, 'id_gender', array('value'=>'1','uncheckValue'=>null)); ?>
                                                         Masculino       
                                                    </label>
                                                    <label control-label>
                                                        <?php echo $form->radioButton($model, 'id_gender', array('value'=>'2','uncheckValue'=>null)); ?>
                                                        Femenino
                                                    </label>  
                                               </div>
                                           </div>
                                         <label class="control-label col-md-2">Cédula<span class="required">*</span></label>
                                           <div class="col-md-3"> 
                                               <?php echo $form->textField($model,'identity_card', array('class'=>'form-control', 'id'=>'mask_ci')); ?>
                                               <span class="help-block">Proporcione la Cédula del Empleado</span>
                                           </div>
                                        
                                    </div>
                                     <div class="form-group">
                                          <label class="control-label col-md-2">Fecha de Nacimiento<span class="required">*</span></label>
                                            <div class="col-md-3"> 
                                                <?php echo $form->textField($model,'date_birth', array('class'=>'form-control form-control-inline input-medium date-picker', 'id'=>'mask_ci')); ?>
                                                <span class="help-block">Seleccione la Fecha de Nacimiento del Empleado</span>
                                            </div>
                                          <label class="control-label col-md-2">Nacionalidad<span class="required">*</span></label>
                                            <div class="col-md-3"> 
                                                  <?php echo $form->dropDownList($model,'nationality',$model->getNationality(), array("class"=>"form-control")); ?>
                                                  <span class="help-block">Nacionalidad del Empleado</span>
                                            </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-2">Estado Civil<span class="required">*</span></label>
                                            <div class="col-md-3"> 
                                                 <?php echo $form->dropDownList($model,'id_marital_status',$model->getMaritalStatus(), array("class"=>"form-control")); ?>
                                                 <span class="help-block">Estado Civil del Empleado</span>
                                            </div>
                                    </div>
                                    
                                   
                                   <h3 class="form-section">Estudios Realizados</h3>
                                   
                                     <div class="form-group">
                                         <label class="control-label col-md-2">Titulo Obtenido<span class="required">*</span></label>
                                            <div class="col-md-2"> 
                                               <?php echo $form->dropDownList(educationEmployee::model(),'id_profession',$model->getProfessions(), array("class"=>"form-control")); ?>
                                                <span class="help-block">Titulo</span>
                                            </div>
                                         <div class="col-md-1">
                                                <label>+</label>
                                            </div>
                                          <label class="control-label col-md-1 ">Desde<span class="required">*</span></label>
                                            <div class="col-md-2"> 
                                                <?php echo $form->textField(educationEmployee::model(),'date_start', array('class'=>'form-control form-control-inline input-small date-picker', 'id'=>'mask_ci')); ?>
                                                <span class="help-block">Fecha Inicio</span>
                                            </div>
                                          <label class="control-label col-md-1">Hasta<span class="required">*</span></label>
                                            <div class="col-md-2"> 
                                                <?php echo $form->textField(educationEmployee::model(),'date_end', array('class'=>'form-control form-control-inline input-small date-picker', 'id'=>'mask_ci')); ?>
                                                <span class="help-block">Fecha Fin</span>
                                            </div>
                                            <div class="newGroup">
                                                <label>+</label>
                                            </div>                          
                                    </div>
                                 
                                  
                                    <h3 class="form-section">Cursos Realizados</h3>
                                      <div class="form-group">
                                         <label class="control-label col-md-2">Nombre del Curso</label>
                                            <div class="col-md-2"> 
                                                <?php echo $form->dropDownList(educationEmployee::model(),'id_course',$model->getCourses(), array("class"=>"form-control")); ?>
                                                <span class="help-block">Nombre del Curso</span>
                                            </div>
                                          <div class="col-md-1">
                                                <label>+</label>
                                            </div>
                                          <label class="control-label col-md-1 ">Desde</label>
                                            <div class="col-md-2"> 
                                                <?php echo $form->textField(educationEmployee::model(),'date_start_cur', array('class'=>'form-control form-control-inline input-small date-picker')); ?>
                                                <span class="help-block">Fecha Inicio</span>
                                            </div>
                                          <label class="control-label col-md-1">Hasta</label>
                                            <div class="col-md-2"> 
                                                <?php echo $form->textField(educationEmployee::model(),'date_end_cur', array('class'=>'form-control form-control-inline input-small date-picker')); ?>
                                                 <span class="help-block">Fecha Fin</span>
                                            </div>
                                            <div class="newGroup">
                                                <label>+</label>
                                            </div>
                                        </div>
                                   
                                   
                                    <h3 class="form-section">Idiomas</h3>
                               
                                    <div class="form-group">
                                      
                                             <label class="control-label col-md-2">Idioma</label>
                                            <div class="col-md-2"> 
                                             <?php echo $form->dropDownList(LanguageEmployee::model(),'id_language',$model->getLanguaje(), array("class"=>"form-control")); ?>
                                              <span class="help-block">Indique el Idioma</span>
                                            </div>
                                               <div class="col-md-1">
                                                <label>+</label>
                                               </div>
                                        
                                        <div class="div_tabla">
                                            <div class="principal">
                                                
                                                <label>
                                                  Nivel de Comprensión
                                                </label>
                                                
                                              
                                            </div>
                                            <div class="contenidos_columnas">
                                                
                                                <div class="secundario">
                                                  Auditiva
                                                </div>
                                                <div class="secundario">
                                                  Lectura
                                                </div>
                                                 <div class="secundario">
                                                  Escritura
                                                </div>
                                              
                                            </div>
                                             <div class="contenidos_columnas">
                                                
                                                <div class="separador_cell">
                                                    <label>
                                                        <?php echo $form->radioButton(LanguageEmployee::model(), 'reading', array('value'=>'1','uncheckValue'=>null)); ?>
                                                    </label>
                                                    <label>
                                                        Básico
                                                    </label>
                                                </div>
                                                <div class="separador_cell">
                                                    <label>
                                                          <?php echo $form->radioButton(LanguageEmployee::model(), 'writing', array('value'=>'1','uncheckValue'=>null)); ?>
                                                    </label>
                                                    <label> 
                                                        Básico
                                                    </label>
                                                </div>
                                                 <div class="separador_cell">
                                                    <label>
                                                         <?php echo $form->radioButton(LanguageEmployee::model(), 'hearing', array('value'=>'1','uncheckValue'=>null)); ?>
                                                    </label>
                                                    <label> 
                                                        Básico
                                                    </label>
                                                </div>
                                              
                                            </div>
                                            <div class="contenidos_columnas">
                                                
                                                <div class="separador_cell">
                                                    <label>
                                                        <?php echo $form->radioButton(LanguageEmployee::model(), 'reading', array('value'=>'2','uncheckValue'=>null)); ?>
                                                    </label>
                                                    <label>
                                                        Intermedio
                                                    </label>
                                                </div>
                                                <div class="separador_cell">
                                                  <label>
                                                        <?php echo $form->radioButton(LanguageEmployee::model(), 'writing', array('value'=>'2','uncheckValue'=>null)); ?>
                                                    </label>
                                                    <label>
                                                        Intermedio
                                                    </label>
                                                </div>
                                                 <div class="separador_cell">
                                                  <label>
                                                        <?php echo $form->radioButton(LanguageEmployee::model(), 'hearing', array('value'=>'2','uncheckValue'=>null)); ?>
                                                    </label>
                                                    <label>
                                                        Intermedio
                                                    </label>
                                                </div>
                                              
                                            </div>
                                            
                                             <div class="contenidos_columnas">
                                                
                                                <div class="separador_cell">
                                                    <label>
                                                       <?php echo $form->radioButton(LanguageEmployee::model(), 'reading', array('value'=>'3','uncheckValue'=>null)); ?>
                                                    </label>
                                                    <label>
                                                        Avanzado
                                                    </label>
                                                </div>
                                                <div class="separador_cell">
                                                   <label>
                                                         <?php echo $form->radioButton(LanguageEmployee::model(), 'writing', array('value'=>'3','uncheckValue'=>null)); ?>
                                                    </label>
                                                    <label>
                                                        Avanzado
                                                    </label>
                                                </div>
                                                 <div class="separador_cell">
                                                   <label>
                                                        <?php echo $form->radioButton(LanguageEmployee::model(), 'hearing', array('value'=>'3','uncheckValue'=>null)); ?>
                                                    </label>
                                                    <label>
                                                        Avanzado
                                                    </label>
                                                </div>
                                              
                                            </div>
                                            
                                        </div>
                                       
                                    </div>
                                    
                                    
                                    
                                    
                                 </div>
                                 <div class="tab-pane" id="tab2">
                                    <h3 class="form-section">Dirección de Habitación</h3>
                                    
                                     <div class="form-group">
                                         
                                       
                                       <label class="control-label col-md-3">País</label>
                                       <div class="col-md-4">
                                           <?php echo $form->dropDownList($model,'id_country',array(""=>"Seleccione el País","1"=>"ar", "2"=>"ve"), $htmlOptions= array("class"=>"form-control" )); ?>
                                        
                                    
                                       </div>
                                    </div>
                                    
                                    <div class="form-group">
                                       <label class="control-label col-md-3">Estado<span class="required">*</span></label>
                                            <div class="col-md-4">
                                                
                                                
                                                 <span class="help-block">Proporcione el Estado de Residencia</span>
                                            </div>
                                    </div>
                                    
                                    <div class="form-group">
                                       <label class="control-label col-md-3">Ciudad<span class="required">*</span></label>
                                            <div class="col-md-4">
                                              
                                               
                                                 <span class="help-block">Proporcione la Ciudad de Residencia</span>
                                            </div>
                                    </div>
                                    
                                    <div class="form-group">
                                       <label class="control-label col-md-3">Calle/Avenida<span class="required">*</span></label>
                                            <div class="col-md-4">
                                                 <?php echo $form->textField($model,'address_room', array('class'=>'form-control')); ?>
                                            
                                                 <span class="help-block">Proporcione la Calle o Avenida de la Residencia</span>
                                            </div>
                                    </div>
                                    
                                    
                                      <div class="form-group">
                                       <label class="control-label col-md-3">Correo Personal<span class="required">*</span></label>
                                       <div class="col-md-4">
                                           <?php echo $form->textField($model,'email_personal', array('class'=>'form-control')); ?>
                                         
                                          <span class="help-block">Proporcione la dirección de Correo de Personal</span>
                                       </div>
                                    </div>
                                    
                                      <div class="form-group">
                                       <label class="control-label col-md-3">Skype<span class="required">*</span></label>
                                            <div class="col-md-4">
                                                <?php echo $form->textField($model,'skype', array('class'=>'form-control')); ?>
                                               
                                                 <span class="help-block">Proporcione el Skype del Empleado</span>
                                            </div>
                                     </div>
                                    
                                 
                                     <div class="form-group">
                                      <label class="control-label col-md-3">Teléfono Celular</label>
                                          <div class="col-md-4">
                                              <?php echo $form->textField($model,'cellphone', array('class'=>'form-control')); ?>
                                           
                                             <span class="help-block">(04XX) XXX-XXXX</span>
                                          </div>
                                     </div>
                                    
                                    <div class="form-group">
                                      <label class="control-label col-md-3">Teléfono Habitación</label>
                                          <div class="col-md-4">
                                              <?php echo $form->textField($model,'home_phone', array('class'=>'form-control')); ?>
                                           
                                             <span class="help-block">(02XX) XXX-XXXX</span>
                                          </div>
                                     </div>
                                    
                                    
                                     <h3 class="form-section">Dirección Organizacional</h3>
                                    
                                     
                                      <div class="form-group">
                                       <label class="control-label col-md-3">Sucursal<span class="required">*</span></label>
                                            <div class="col-md-4">
                                                
                                                 <span class="help-block">Sucursal donde labora el Empleado</span>
                                            </div>
                                     </div>
                                     
                                      <div class="form-group">
                                       <label class="control-label col-md-3">Gerencia<span class="required">*</span></label>
                                            <div class="col-md-4">
                                               
                                               
                                                 <span class="help-block">Sucursal donde labora el Empleado</span>
                                            </div>
                                     </div>
                                     
                                     <div class="form-group">
                                       <label class="control-label col-md-3">Departamento</label>
                                            <div class="col-md-4">
                                                
                                             
                                                 <span class="help-block">Departamento donde labora el Empleado</span>
                                            </div>
                                     </div>
                                     
                                     <div class="form-group">
                                       <label class="control-label col-md-3">Oficina</label>
                                            <div class="col-md-4">
                                                
                                                
                                                 <span class="help-block">Oficina donde labora el Empleado</span>
                                            </div>
                                     </div>
                                    
                                    <div class="form-group">
                                      <label class="control-label col-md-3">Teléfono de Oficina</label>
                                          <div class="col-md-4">
                                              <input class="form-control" id="officephone" name="officephone" type="text"  />
                                             <span class="help-block">(02XX) XXX-XXXX</span>
                                          </div>
                                     </div>
                                     
                                     <div class="form-group">
                                      <label class="control-label col-md-3">Extensión de Oficina</label>
                                          <div class="col-md-4">
                                              <?php echo $form->textField($model,'extension_numeric', array('class'=>'form-control')); ?>
                                           
                                             <span class="help-block">XXX</span>
                                          </div>
                                     </div>

                                    <div class="form-group">
                                         <label class="control-label col-md-3">Correo Corporativo<span class="required">*</span></label>
                                            <div class="col-md-4">
                                                <?php echo $form->textField($model,'email_company', array('class'=>'form-control')); ?>
                                           
                                                <span class="help-block">Proporcione la dirección de Correo Corporativo</span>
                                            </div>
                                    </div>

                                   
                                    
                                 </div>
                                 <div class="tab-pane" id="tab3">
                                    <h3 class="form-section">familia</h3>
                                    
                                 </div>

                                 <div class="tab-pane" id="tab4">
                                    <h3 class="form-section">Datos bancarios</h3>
                                    <div class="form-group">
                                       <label class="control-label col-md-3">Nombre de la Entidad Bancaria<span class="required">*</span></label>
                                       <div class="col-md-4">
                                          
                                          <input type="text" class="form-control" name="card_name" />
                                          <span class="help-block"></span>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label col-md-3">Número de Cuenta<span class="required">*</span></label>
                                       <div class="col-md-4">
                                          <input type="text" class="form-control" id="mask_acount" name="acount_number"/>
                                          <span class="help-block"></span>
                                       </div>
                                    </div>
                                    
                                     <div class="form-group">
                                      <label class="control-label col-md-3">Tipo de Cuenta<span class="required">*</span></label>
                                          <div class="col-md-4">
                                              <input class="form-control" id="mask_cuenta" type="text" name="type_acount"  />
                                             <span class="help-block">Tipo de Cuenta del Empleado</span>
                                          </div>
                                     </div>
                                   
                                    
                                     <div class="form-group">
                                      <label class="control-label col-md-3">Tipo de Moneda<span class="required">*</span></label>
                                          <div class="col-md-4">
                                              <?php echo $form->dropDownList($model,'id_marital_status',$model->getCurrency(), array("class"=>"form-control")); ?>
<!--                                              <input class="form-control" id="mask_cuenta" type="text" name="type_currency"  />-->
                                         
                                          </div>
                                     </div>
                                  
                                 </div>

                                  <div class="tab-pane" id="tab5">
                                      <h3 class="form-section">Asignación Organizacional</h3>
                                  </div>
                                  
                                   <div class="tab-pane" id="tab6">
                                      <h3 class="form-section">Horario Teórico</h3>
                                  </div>
                                  
                                  <div class="tab-pane" id="tab7">
                                      <h3 class="form-section">Servicios Médico</h3>
                                  </div>
                                    
                                   <div class="tab-pane" id="tab8">
                                      <h3 class="form-section">Medidas Laborales</h3>
                                  </div>

                                 <div class="tab-pane" id="tab9">
                                    <h3 class="block">Confirmar Datos del Empleado</h3>
                                    <h4 class="form-section">Datos Básico</h4>
                                    
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                               <label class="control-label col-md-3">Nombre:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="first_name"></p>
                                                </div>
                                            
                                        </div>
                                       <div class="form-group">
                                            
                                                   <label class="control-label col-md-3">Apellido:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="last_name"></p>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            
                                                   <label class="control-label col-md-3">Género:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="gender"></p>
                                                </div>
                                        </div>

                                         <div class="form-group">
                                            
                                                   <label class="control-label col-md-3">Estado Civil:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="state_marital"></p>
                                                </div>
                                        </div>
                                    </div>
                                    
                             
                                        <div class="col-md-6">
                                        <div class="form-group">
                                               <label class="control-label col-md-6">Cédula:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="identity_card"></p>
                                                </div>
                                            
                                        </div>
                                        <div class="form-group">
                                            
                                                   <label class="control-label col-md-6">Fecha de Nacimiento:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="date_birth"></p>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            
                                                   <label class="control-label col-md-6">Nacionalidad:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="nationality"></p>
                                                </div>
                                        </div>
                                            
                                             <div class="form-group">
                                            
                                                   <label class="control-label col-md-6">Grado de Educación:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="level_education"></p>
                                                </div>
                                        </div>
                                
                                        </div>
                                    

                                    <h4 class="form-section">Dirección de Habitación</h4>
                                    
                                      <div class="col-md-6">
                                        <div class="form-group">
                                               <label class="control-label col-md-3">País:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="country"></p>
                                                </div>
                                            
                                        </div>
                                        <div class="form-group">
                                            
                                                   <label class="control-label col-md-3">Estado:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="emplo_state"></p>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            
                                                   <label class="control-label col-md-3">Ciudad:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="city"></p>
                                                </div>
                                        </div>
                                            
                                             <div class="form-group">
                                            
                                                   <label class="control-label col-md-3">Calle/Avenida:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="address_room"></p>
                                                </div>
                                            </div>
                                
                                        </div>
                                    
                                    
                                     <div class="col-md-6">
                                        <div class="form-group">
                                               <label class="control-label col-md-6">Correo Personal:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="email"></p>
                                                </div>
                                            
                                        </div>
                                        <div class="form-group">
                                            
                                                   <label class="control-label col-md-6">Skype:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="skype"></p>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            
                                                   <label class="control-label col-md-6">Teléfono (Personal):</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="cellphone"></p>
                                                </div>
                                        </div>
                                            
                                             <div class="form-group">
                                            
                                                   <label class="control-label col-md-6">&nbsp;&nbsp;</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="&nbsp;&nbsp;"></p>
                                                </div>
                                            </div>
                                
                                        </div>
                                    
                                      <h4 class="form-section">Dirección Organizacional</h4>
                                    
                                      <div class="col-md-6">
                                        <div class="form-group">
                                               <label class="control-label col-md-3">Sucursal:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="branch_office"></p>
                                                </div>
                                            
                                        </div>
                                        <div class="form-group">
                                            
                                                   <label class="control-label col-md-3">Gerencia:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="management"></p>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            
                                                   <label class="control-label col-md-3">Departamento:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="departament"></p>
                                                </div>
                                        </div>
                                            
                                             <div class="form-group">
                                            
                                                   <label class="control-label col-md-3">Oficina:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="office"></p>
                                                </div>
                                        </div>
                                
                                        </div>
                                    
                                    
                                     <div class="col-md-6">
                                        <div class="form-group">
                                               <label class="control-label col-md-6">Teléfono de Oficina:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="officephone"></p>
                                                </div>
                                            
                                        </div>
                                        <div class="form-group">
                                            
                                                   <label class="control-label col-md-6">Extensión de Oficina:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="extension_numeric"></p>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            
                                                   <label class="control-label col-md-6">Correo Corporativo:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="email_company"></p>
                                                </div>
                                        </div>
                                            
                                       <div class="form-group">
                                            
                                                   <label class="control-label col-md-6">&nbsp;&nbsp;</label>
                                              
                                        </div>

                                        </div>

                                      <h4 class="form-section">Datos Bancarios</h4>
                                    
                                      <div class="col-md-6">
                                        <div class="form-group">
                                               <label class="control-label col-md-4">Entidad Bancaria:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="card_name"></p>
                                                </div>
                                        </div>
                                       <div class="form-group">
                                              <label class="control-label col-md-4">Número de Cuenta :</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="acount_number"></p>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                              <label class="control-label col-md-4">Tipo de Cuenta:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="type_acount"></p>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                              <label class="control-label col-md-4">Tipo de Nómina:</label>
                                                 <div class="col-md-4">
                                                    <p class="form-control-static" data-display="type_currency"></p>
                                                </div>
                                        </div>
                                       </div>
                                    
                                    
                                     <div class="col-md-6">
                                        <div class="form-group">
                                               <label class="control-label col-md-6">&nbsp;</label>
                                        </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-6">&nbsp;</label>
                                            </div>
                                                <div class="form-group">
                                                   <label class="control-label col-md-6">&nbsp;</label>
                                                </div>
                                            <div class="form-group">
                                                   <label class="control-label col-md-6">&nbsp;</label>
                                             </div>

                                        </div>

                                      <h4 class="form-section">&nbsp;&nbsp;</h4>

                                 </div>
                                 </div>                                    
                              </div>
                           </div>
                           <div class="form-actions fluid">
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="col-md-offset-3 col-md-9">
                                       <a href="javascript:;" class="btn default button-previous">
                                       <i class="m-icon-swapleft"></i> Atrás
                                       </a>
                                       <a href="javascript:;" class="btn blue button-next">
                                       Siguiente <i class="m-icon-swapright m-icon-white"></i>
                                       </a>
                                        
                                          
                                       <input type="submit" value="enviar" class="btn blue button-submit"/>                           
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
       
  
   <!-- END PAGE LEVEL SCRIPTS -->
   
   
     
