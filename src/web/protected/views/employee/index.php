<div class="row">
            <div class="col-md-12">
               <!-- BEGIN PAGE TITLE & BREADCRUMB-->
               <h3 class="page-title">
                  Perfil
               </h3>
               <ul class="page-breadcrumb breadcrumb">
<!--                  <li class="btn-group">
                     <button type="button" class="btn blue dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
                     <span>Actions</span> <i class="icon-angle-down"></i>
                     </button>
                     <ul class="dropdown-menu pull-right" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                     </ul>
                  </li>-->
                  <li>
                     <i class="icon-home"></i>
                     <a href="index.html">Inicio</a> 
                     <i class="icon-angle-right"></i>
                  </li>
                  <li>
                     <a href="#">Empleado</a>
                     <i class="icon-angle-right"></i>
                  </li>
                  
               </ul>
               <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
         </div>
         <!-- END PAGE HEADER-->
         <!-- BEGIN PAGE CONTENT-->
         <div class="row profile">
            <div class="col-md-12">
               <!--BEGIN TABS-->
               <div class="tabbable tabbable-custom tabbable-full-width">
                  <ul class="nav nav-tabs">
                     <li class="active"><a href="#tab_1_1" data-toggle="tab">Datos del Perfil</a></li>
                     <li><a href="#tab_1_3" data-toggle="tab">Modificar Perfil</a></li>
<!--                     <li><a href="#tab_1_4" data-toggle="tab">Dirección de Habitación</a></li>-->
                     
                  </ul>
                  <div class="tab-content">
                     <div class="tab-pane active" id="tab_1_1">
                        <div class="row">
                           <div class="col-md-3">
                              <ul class="list-unstyled profile-nav">
                                 <li><img src="/themes/metronic/img/profile/profile-img.png" class="img-responsive" alt="" /> 
                                      <a data-toggle="modal" href="#responsive">Cambiar Imagen</a>
                                    
                                 </li>
<!--                                 <li><a href="#">Projects</a></li>
                                 <li><a href="#">Messages <span>3</span></a></li>
                                 <li><a href="#">Friends</a></li>
                                 <li><a href="#">Settings</a></li>-->
                              </ul>
                           </div>
                           <div class="col-md-9">
                              <div class="row">
                                 <div class="col-md-8 profile-info">
                                    <h1><?php echo $model->first_name;?> <?php echo $model->last_name;?></h1>
                              
                                 
                                    <ul class="list-inline">
                                       <li><i class="icon-map-marker"></i><?php //echo $model->idCountry->name;?></li>
                                       <li><i class="icon-calendar"></i><?php echo $model->date_birth;?></li>
                                       <li><i class="icon-briefcase"></i> Design</li>
                                       <li><i class="icon-envelope"></i><?php echo $model->email_personal;?></li>
                                        <li><i class="icon-skype"></i><?php echo $model->skype;?></li>
                                       <!--<li><i class="icon-heart"></i> BASE Jumping</li>-->
                                    </ul>
                                 </div>
                                 <!--end col-md-8-->
<!--                                 <div class="col-md-4">
                                    <div class="portlet sale-summary">
                                       <div class="portlet-title">
                                          <div class="caption">Sales Summary</div>
                                          <div class="tools">
                                             <a class="reload" href="javascript:;"></a>
                                          </div>
                                       </div>
                                       <div class="portlet-body">
                                          <ul class="list-unstyled">
                                             <li>
                                                <span class="sale-info">TODAY SOLD <i class="icon-img-up"></i></span> 
                                                <span class="sale-num">23</span>
                                             </li>
                                             <li>
                                                <span class="sale-info">WEEKLY SALES <i class="icon-img-down"></i></span> 
                                                <span class="sale-num">87</span>
                                             </li>
                                             <li>
                                                <span class="sale-info">TOTAL SOLD</span> 
                                                <span class="sale-num">2377</span>
                                             </li>
                                             <li>
                                                <span class="sale-info">EARNS</span> 
                                                <span class="sale-num">$37.990</span>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>-->
                                 <!--end col-md-4-->
                              </div>
                              <!--end row-->
                              <div class="tabbable tabbable-custom tabbable-custom-profile">
                                 <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tab_1_11" data-toggle="tab">Datos Básicos</a></li>
                                    <li ><a href="#tab_1_22" data-toggle="tab">Dirección de Habitación</a></li>
                                 </ul>
                                 <div class="tab-content">
                                    <div class="tab-pane active" id="tab_1_11">
                                       <div class="portlet-body">
                                          <table class="table table-striped table-bordered table-advance table-hover">
<!--                                             <thead>
                                                <tr>
                                                   <th><i class="icon-briefcase"></i> Company</th>
                                                   <th class="hidden-xs"><i class="icon-question-sign"></i> Descrition</th>
                                                   <th><i class="icon-bookmark"></i> Amount</th>
                                                   <th></th>
                                                </tr>
                                             </thead>-->
                                             <tbody>
                                                <tr>
                                                    <td class="letra_empleado">Primer Nombre</td>
                                                   <td><?php echo $model->first_name;?></td>
                                                   <td class="letra_empleado">Segundo Nombre</td>
                                                   <td><?php echo $model->secon_name;?></td>
                                                </tr>
                                                <tr>
                                                   <td class="letra_empleado">Primer Apellido</td>
                                                   <td><?php echo $model->last_name;?></td>
                                                   <td class="letra_empleado">Segundo Apellido</td>
                                                   <td><?php echo $model->secon_last_name;?></td>
                                                  
                                                </tr>
                                                <tr>
                                                   <td class="letra_empleado">Fecha de Nacimiento</td>
                                                   <td><?php echo $model->date_birth;?></td>
                                                   <td class="letra_empleado">Documento de Identidad</td>
                                                   <td><?php echo $model->identity_card;?></td>
                                                </tr>
                                                
                                                 <tr>
                                                   <td class="letra_empleado">Nacionalidad</td>
                                                   <td><?php echo $model->idNationality->name;?></td>
                                                   <td class="letra_empleado">Estado Civil</td>
                                                   <td><?php echo $model->idMaritalStatus->name;?></td>
                                                </tr>
                                                <tr>
                                                   <td class="letra_empleado">Correo Personal</td>
                                                   <td><?php echo $model->email_personal;?></td>
                                                   <td class="letra_empleado">Correo Corporativo</td>
                                                   <td><?php echo $model->email_company;?></td>
                                                </tr>
                                                
                                                 <tr>
                                                   <td class="letra_empleado">Skype</td>
                                                   <td><?php echo $model->skype;?></td>
                                                   <td></td>
                                                   <td></td>
                                                </tr>
                                                
                                                <tr>
                                                   <td class="letra_empleado">Teléfono Celular</td>
                                                   <td><?php echo $model->cellphone;?></td>
                                                   <td class="letra_empleado">Teléfono De Habitación</td>
                                                   <td><?php echo $model->home_phone;?></td>
                                                </tr>
                                                <tr>
                                                   <td class="letra_empleado">Extensión de Oficina</td>
                                                   <td><?php echo $model->extension_numeric;?></td>
                                                   <td></td>
                                                   <td></td>
                                                </tr>
                                               
                                             </tbody>
                                          </table>
                                       </div>
                                    </div>
                                    <!--tab-pane-->
                                    <div class="tab-pane" id="tab_1_22">
                                       <div class="tab-pane active" id="tab_1_1_1">
                                          <div class="scroller" data-height="290px" data-always-visible="1" data-rail-visible1="1">
                                             <table class="table table-striped table-bordered table-advance table-hover">
<!--                                             <thead>
                                                <tr>
                                                   <th><i class="icon-briefcase"></i> Company</th>
                                                   <th class="hidden-xs"><i class="icon-question-sign"></i> Descrition</th>
                                                   <th><i class="icon-bookmark"></i> Amount</th>
                                                   <th></th>
                                                </tr>
                                             </thead>-->
                                             <tbody>
                                                <tr>
                                                    <td class="letra_empleado">Pais</td>
                                                   <td><?php //echo $model->idCountry->name;?></td>
                                                   <td class="letra_empleado">Estado</td>
                                                   <td><?php //echo $model->idStates->name;?></td>
                                                </tr>
                                                <tr>
                                                   <td class="letra_empleado">Cuidad</td>
                                                   <td><?php //echo $model->idCity->name;?></td>
                                                   <td></td>
                                                   <td></td>
                                                  
                                                </tr>
                                                <tr>
                                                   <td class="letra_empleado">Calle/Avenida</td>
                                                   <td><?php //echo $model->address_room;?></td>
                                                   <td class="letra_empleado">Edificio</td>
                                                   <td><?php //echo $model->edifice;?></td>    
                                                </tr>
                                                <tr>
                                                   <td class="letra_empleado">Piso</td>
                                                   <td><?php //echo $model->floor;?></td>
                                                   <td class="letra_empleado">Casa/Nro de Casa</td>
                                                    <td><?php //echo $model->house;?></td>   
                                                </tr>
                                             </tbody>
                                          </table>
                                          </div>
                                       </div>
                                    </div>
                                    <!--tab-pane-->
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--tab_1_2-->
                     <div class="tab-pane" id="tab_1_3">
                        <div class="row profile-account">
                           <div class="col-md-3">
                              <ul class="ver-inline-menu tabbable margin-bottom-10">
                                 <li class="active">
                                    <a data-toggle="tab" href="#tab_1-1">
                                    <i class="icon-cog"></i> 
                                    Datos Básicos
                                    </a> 
                                    <span class="after"></span>                                    
                                 </li>
                                 <li ><a data-toggle="tab" href="#tab_2-2"><i class="icon-picture"></i>Dirección de Habitación</a></li>
<!--                                 <li ><a data-toggle="tab" href="#tab_2-2"><i class="icon-picture"></i>Cambiar Imagen de Perfil</a></li>-->
                                
                               
                              </ul>
                           </div>
                           <div class="col-md-9">
                              <div class="tab-content">
                                 <div id="tab_1-1" class="tab-pane active">
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
                                     
                                     
                                     
                                     <div class="div_tabla_editar_empleados">
                                            <div class="principal">
                                             
                                            </div>
                                            <div class="contenidos_columnas">
                                                
                                                  <div class="secundario">
                                                    <label class="control-label letra_empleado">Primer Nombre</label>
                                                        <?php echo $form->textField($model,'first_name', array('class'=>'form-control input-xmedium ', 'value'=>$model->first_name)); ?>
                                                  </div>
                                                  <div class="secundario letra_empleado">
                                                    <label class="control-label">Segundo Nombre</label>
                                                        <?php echo $form->textField($model,'secon_name', array('class'=>'form-control input-xmedium', 'value'=>$model->secon_name)); ?>
                                                  </div>
                                            </div>
                                             <div class="contenidos_columnas ">
                                                 <div class="secundario letra_empleado">
                                                    <label class="control-label">Primer Apellido</label>
                                                         <?php echo $form->textField($model,'last_name', array('class'=>'form-control input-xmedium', 'value'=>$model->last_name)); ?>
                                                 </div>
                                                 <div class="secundario letra_empleado">
                                                    <label class="control-label">Segundo Apellido</label>
                                                         <?php echo $form->textField($model,'secon_last_name', array('class'=>'form-control input-xmedium', 'value'=>$model->secon_last_name)); ?>
                                                 </div>
                                            </div>
                                            <div class="contenidos_columnas">
                                                
                                                 <div class="secundario letra_empleado">
                                                     <label class="control-label">Fecha de Nacimiento</label>
                                                         <?php echo $form->textField($model,'date_birth', array('class'=>'form-control form-control-inline input-xmedium date-picker', 'id'=>'mask_ci')); ?>
                                                        <?php //echo $form->textField($model,'date_birth', array('class'=>'form-control', 'value'=>$model->date_birth)); ?>
                                                 </div>
                                                <div class="secundario letra_empleado">
                                                     <label class="control-label">Documento de Identidad</label>
                                                        <?php echo $form->textField($model,'identity_card', array('class'=>'form-control input-xmedium', 'value'=>$model->identity_card,'id'=>'mask_number')); ?>
                                                 </div>
                                              
                                            </div>
                                            
                                             <div class="contenidos_columnas">
                                                 <div class="secundario letra_empleado">
                                                     <label class="control-label">Nacionalidad</label>
                                                        <?php echo $form->dropDownList($model,'id_nationality',$model->getNationality(), array("class"=>"form-control")); ?>
                                                        <?php //echo $form->textField($model,'nationality', array('class'=>'form-control', 'value'=>$model->nationality)); ?>
                                                 </div>
                                                <div class="secundario letra_empleado">
                                                      <label class="control-label">Estado Civil</label>
                                                      <?php echo $form->dropDownList($model,'id_marital_status',$model->getMaritalStatus(), array("class"=>"form-control")); ?>
                                                        <?php //echo $form->textField($model,'id_marital_status', array('class'=>'form-control', 'value'=>$model->idMaritalStatus->name)); ?>
                                                 </div>
                                            </div>
                                         
                                            <div class="contenidos_columnas">
                                                 <div class="secundario letra_empleado">
                                                     <label class="control-label">Correo Personal</label>
                                                        <?php echo $form->textField($model,'email_personal', array('class'=>'form-control', 'value'=>$model->email_personal)); ?>
                                                 </div>
                                                <div class="secundario letra_empleado">
                                                    <label class="control-label">Correo Corporativo</label>
                                                        <?php echo $form->textField($model,'email_company', array('class'=>'form-control', 'value'=>$model->email_company)); ?>
                                                 </div>
                                            </div>
                                             <div class="contenidos_columnas">
                                                 <div class="secundario letra_empleado">
                                                    <label class="control-label">Skype</label>
                                                        <?php echo $form->textField($model,'skype', array('class'=>'form-control', 'value'=>$model->skype)); ?>
                                                 </div>
                                                <div class="secundario letra_empleado">
                                                    <label class="control-label">Teléfono Celular</label>
                                                        <?php echo $form->textField($model,'cellphone', array('class'=>'form-control', 'value'=>$model->cellphone)); ?>
                                                 </div>
                                            </div>
                                             <div class="contenidos_columnas">
                                                 <div class="secundario letra_empleado">
                                                     <label class="control-label">Teléfono de Habitación</label>
                                                        <?php echo $form->textField($model,'home_phone', array('class'=>'form-control', 'value'=>$model->home_phone)); ?>
                                                 </div>
                                                <div class="secundario letra_empleado">
                                                    <label class="control-label">Extensión de Oficina</label>
                                                        <?php echo $form->textField($model,'extension_numeric', array('class'=>'form-control', 'value'=>$model->extension_numeric)); ?>
                                                 </div>
                                            </div>
                                            
                                        </div>
                                      
                                    
                                 </div>
                                  
                                  <?php 
                                    $ajaxState=array(
                                        "ajax"=>array(
                                            "type"=>"POST",
                                            "url"=>CController::createUrl("Employee/StateByCountry"),
                                            "data"=>"js:$('#submit_form').serialize()",
                                            "update"=>"#Employee_state",
                                        
                                        ),
                                        "class"=>"form-control",
                                    );
                                  
                                  ?>
                                  
                                   <?php 
                                    $ajaxCity=array(
                                        "ajax"=>array(
                                            "url"=>CController::createUrl("Employee/CityByState"),
                                            "type"=>"POST",
                                            "data"=>"js:$('#submit_form').serialize()",
                                            "update"=>"#Employee_city",
                                        
                                        ),
                                        "class"=>"form-control",
                                    );
                                  
                                  ?>
                                  
                                 <div id="tab_2-2" class="tab-pane">
                                         <div class="form-group">
                                          <label class="control-label letra_empleado">Apartment, suite, unit, building, floor, etc.</label>
                                          <?php echo $form->textField($model,'line1', array('class'=>'form-control', 'value'=>$model->line1)); ?>
                                       </div>
                                     
                                     <div class="form-group">
                                          <label class="control-label letra_empleado">Street address, P.O. box, company name, c/o</label>
                                          <?php echo $form->textField($model,'line2', array('class'=>'form-control', 'value'=>$model->line2)); ?>
                                       </div>
                                     
                                      <div class="form-group">
                                          <label class="control-label letra_empleado">Zip code</label>
                                          <?php echo $form->textField($model,'zip', array('class'=>'form-control', 'value'=>$model->zip)); ?>
                                       </div>
                                       <div class="form-group">
                                          <label class="control-label letra_empleado">Country</label>
                                           <?php echo $form->dropDownList($model,'country',Country::model()->getCountry(),$ajaxState); ?>
                                          <?php //echo $form->textField($model,'id_country', array('class'=>'form-control', 'value'=> $model->idCountry->name)); ?>
                                       </div>
                                     <div class="form-group">
                                          <label class="control-label letra_empleado">State/Province/Region</label>
                                            <?php echo $form->dropDownList($model,'state', array('empty'=>'Select a COuntry'),$ajaxCity); ?>
                                          <?php //echo $form->textField($model,'id_states', array('class'=>'form-control', 'value'=> $model->idStates->name)); ?>
                                       </div>
                                     <div class="form-group">
                                          <label class="control-label letra_empleado">City</label>
                                           <?php echo $form->dropDownList($model,'city',array('empty'=>'Select a State'),array("class"=>"form-control")); ?>
                                          <?php //echo $form->textField($model,'id_city', array('class'=>'form-control', 'value'=>$model->idCity->name)); ?>
                                       </div>   
                                 </div>
                                     <div>
                                          <input type="submit" value="enviar" class="btn blue button-submit centrar_botones"/>  
<!--                                          <a href="#" class="btn default">Cancelar</a>-->
                                       </div>
                                      <?php $this->endWidget(); ?>
                              </div>
                           </div>
                           <!--end col-md-9-->                                   
                        </div>
                     </div>
                  </div>
               </div>
               <!--END TABS-->
            </div>
         </div>
         
          <div id="responsive" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                 <h4 class="modal-title">Cambiar Imagen de Perfil</h4>
                              </div>
                              <div class="modal-body">
                                 <div class="scroller" style="height:300px" data-always-visible="1" data-rail-visible1="1">
                                    <div class="row">
                                       <div class="col-md-6">
                                           
                                           
                                            <form action="#" role="form">
                                       <div class="form-group">
                                          <div class="thumbnail" style="width: 310px;">
                                             <img src="http://www.placehold.it/310x170/EFEFEF/AAAAAA&amp;text=no+image" alt="">
                                          </div>
                                          <div class="margin-top-10 fileupload fileupload-new" data-provides="fileupload">
                                             <div class="input-group input-group-fixed">
                                                <span class="input-group-btn">
                                                <span class="uneditable-input">
                                                <i class="icon-file fileupload-exists"></i> 
                                                <span class="fileupload-preview"></span>
                                                </span>
                                                </span>
                                                <span class="btn default btn-file">
                                                <span class="fileupload-new"><i class="icon-paper-clip"></i> Select file</span>
                                                <span class="fileupload-exists"><i class="icon-undo"></i> Change</span>
                                                <input type="file" class="default" />
                                                </span>
                                                <a href="#" class="btn red fileupload-exists" data-dismiss="fileupload"><i class="icon-trash"></i> Remove</a>
                                             </div>
                                          </div>
                                      
                                    
                                       </div>
                                       <div class="margin-top-10">
                                          <a href="#" class="btn green">Submit</a>
                                          <a href="#" class="btn default">Cancel</a>
                                       </div>
                                    </form>
                                         
                                        
                                       </div>
                                       
                                 </div>
                              </div>
                              <div class="modal-footer">
                                 <button type="button" data-dismiss="modal" class="btn default">Cerrar</button>
                                 <button type="button" class="btn green">Guardar</button>
                              </div>
                           </div>
                        </div>
                     </div>
          </div>
         
      