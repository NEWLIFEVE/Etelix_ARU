<div class="row">
            <div class="col-md-12">
               <!-- BEGIN PAGE TITLE & BREADCRUMB-->
               <h3 class="page-title">
                  Perfil
               </h3>
               <ul class="page-breadcrumb breadcrumb">
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
                  </ul>
                  <div class="tab-content">
                     <div class="tab-pane active" id="tab_1_1">
                        <div class="row">
                           <div class="col-md-3">
                              <ul class="list-unstyled profile-nav">
                                  
                                 <?php if (!empty($Employee->image_rute)){ $Employee_load=$Employee->image_rute;} else $Employee_load="themes/metronic/img/profile/profile.jpg"; ?>
                                 <li><img id ="load_photo" src="/<?php echo $Employee_load ?>" class="img-responsive" alt="" /> 
                                      <a data-toggle="modal" href="#cambio_photo" id="photo">Cambiar Imagen</a>
                                    
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
                                    <h1><?php echo $Employee->first_name;?> <?php echo $Employee->last_name;?></h1>
                              
                                 
                                    <ul class="list-inline">
                                       <li><i class="icon-map-marker"></i><?php if (!empty($Address->idCity->idState->idCountry->name)){echo $Address->idCity->idState->idCountry->name;}?></li>
                                       <li><i class="icon-calendar"></i><?php echo $Employee->date_birth;?></li>
<!--                                       <li><i class="icon-briefcase"></i> Design</li>-->
                                       <li><i class="icon-envelope"></i><?php echo $Employee->email_personal;?></li>
                                        <li><i class="icon-skype"></i><?php echo $Employee->skype;?></li>
                                        <li><i class="icon-phone"></i><?php echo $Employee->cellphone;?></li>
                                       <!--<li><i class="icon-heart"></i> BASE Jumping</li>-->
                                    </ul>
                                 </div>
                        
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

                                             <tbody>
                                                <tr>
                                                    <td class="letra_empleado">Primer Nombre</td>
                                                    <td><?php if (is_null($Employee->first_name)){} else{echo $Employee->first_name;}?></td>
                                                   <td class="letra_empleado">Segundo Nombre</td>
                                                   <td><?php if (is_null($Employee->second_name)){} else{echo $Employee->second_name;}?></td>
                                                </tr>
                                                <tr>
                                                   <td class="letra_empleado">Primer Apellido</td>
                                                   <td><?php if (is_null($Employee->last_name)){} else{echo $Employee->last_name;}?></td>
                                                   <td class="letra_empleado">Segundo Apellido</td>
                                                   <td><?php if (is_null($Employee->second_last_name)){} else{echo $Employee->second_last_name;}?></td>
                                                  
                                                </tr>
                                                <tr>
                                                   <td class="letra_empleado">Fecha de Nacimiento</td>
                                                   <td><?php if (is_null($Employee->date_birth)){} else{echo $Employee->date_birth;}?></td>
                                                   <td class="letra_empleado">Documento de Identidad</td>
                                                   <td><?php if (is_null($Employee->identity_card)){} else{echo $Employee->identity_card;}?></td>
                                                </tr>
                                                
                                                 <tr>
                                                   <td class="letra_empleado">Nacionalidad</td>
                                                   <td>
                                                       <?php if (!empty($Employee->idNationality->name)){echo $Employee->idNationality->name;}?>
                                                       
                                                       
                                                   <td class="letra_empleado">Estado Civil</td>
                                                   <td><?php if (!empty($Employee->idMaritalStatus->name)){echo $Employee->idMaritalStatus->name;}?></td>
                                                </tr>
                                                <tr>
                                                   <td class="letra_empleado">Correo Personal</td>
                                                   <td><?php if (is_null($Employee->email_personal)){} else{echo $Employee->email_personal;}?></td>
                                                   <td class="letra_empleado">Correo Corporativo</td>
                                                   <td><?php if (is_null($Employee->email_company)){} else{echo $Employee->email_company;}?></td>
                                                </tr>
                                                
                                                 <tr>
                                                   <td class="letra_empleado">Skype</td>
                                                   <td><?php if (is_null( $Employee->skype)){} else{echo $Employee->skype;}?></td>
                                                   <td class="letra_empleado">Teléfono Celular</td>
                                                   <td><?php if (is_null( $Employee->cellphone)){} else{echo $Employee->cellphone;}?></td>
                                                </tr>
                                                
                                                <tr>
                                                   <td class="letra_empleado">Teléfono De Habitación</td>
                                                   <td><?php if (is_null( $Employee->home_phone)){} else{echo $Employee->home_phone;}?></td>
                                                   <td class="letra_empleado">Extensión de Oficina</td>
                                                   <td><?php if (is_null( $Employee->extension_numeric)){} else{echo $Employee->extension_numeric;}?></td>  
                                                </tr>
<!--                                                <tr>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                </tr>-->
                                               
                                             </tbody>
                                          </table>
                                       </div>
                                    </div>
                                    <!--tab-pane-->
                                    <div class="tab-pane" id="tab_1_22">
                                       <div class="tab-pane active" id="tab_1_1_1">
                                          <div class="scroller" data-height="50%" data-always-visible="1" data-rail-visible1="1">
                                             <table class="table table-striped table-bordered table-advance table-hover">

                                             <tbody>
                                                <tr>
                                                    <td class="letra_empleado">Apartamento, Suite, Unidad, Edificio, Piso, Etc</td>
                                                    <td><?php if (!empty($Address->address_line_1)){echo $Address->address_line_1;}?></td>
                                                </tr>
                                                <tr>
                                                   <td class="letra_empleado">Dirección de Calle, P.O Box, Nombre de la Compañía, C/O</td>
                                                   <td><?php if (!empty($Address->address_line_2)){echo $Address->address_line_2; }?></td>
                                                </tr>
                                                <tr>
                                                   <td class="letra_empleado">Códigos Postal</td>
                                                   <td><?php if (!empty($Address->zip)){echo $Address->zip; } ?></td>
                                                </tr>
                                                <tr>
                                                   <td class="letra_empleado">País</td>
                                                   <td><?php if (!empty($Address->idCity->idState->idCountry->name)){echo $Address->idCity->idState->idCountry->name;}?></td>
                                                </tr>
                                                <tr>
                                                   <td class="letra_empleado">Estado/Provincia/Región</td>
                                                   <td><?php  if (!empty($Address->idCity->idState->name)){echo $Address->idCity->idState->name;}?></td>    
                                                </tr>
                                                <tr>
                                                   <td class="letra_empleado">Ciudad</td>
                                                   <td><?php if (!empty($Address->idCity->name)){echo $Address->idCity->name;}?></td> 
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
                                                      <?php if(empty($Employee->first_name))echo $form->textField($Employee,'first_name', array('class'=>'form-control','value'=>'')); else echo $form->textField($Employee,'first_name', array('class'=>'form-control','value'=>$Employee->first_name)); ?>
                                                  </div>
                                                  <div class="secundario letra_empleado">
                                                    <label class="control-label">Segundo Nombre</label>
                                                      <?php if(empty($Employee->second_name))echo $form->textField($Employee,'second_name', array('class'=>'form-control','value'=>'')); else echo $form->textField($Employee,'second_name', array('class'=>'form-control','value'=>$Employee->second_name));?>
                                                  </div>
                                            </div>
                                             <div class="contenidos_columnas ">
                                                 <div class="secundario letra_empleado">
                                                    <label class="control-label">Primer Apellido</label>
                                                    <?php if(empty($Employee->last_name))echo $form->textField($Employee,'last_name', array('class'=>'form-control','value'=>''));else echo $form->textField($Employee,'last_name', array('class'=>'form-control','value'=>$Employee->last_name));?>
                                                 </div>
                                                 <div class="secundario letra_empleado">
                                                    <label class="control-label">Segundo Apellido</label>
                                                     <?php if(empty($Employee->second_last_name))echo $form->textField($Employee,'second_last_name', array('class'=>'form-control','value'=>''));else echo $form->textField($Employee,'second_last_name', array('class'=>'form-control','value'=>$Employee->second_last_name));?>
                                                 </div>
                                            </div>
                                            <div class="contenidos_columnas">
                                                
                                                 <div class="secundario letra_empleado">
                                                     <label class="control-label">Fecha de Nacimiento</label>
                                                     <?php if(empty($Employee->date_birth))echo $form->textField($Employee,'date_birth', array('class'=>'form-control form-control-inline input-xmedium date-picker', 'id'=>'mask_ci')); else echo $form->textField($Employee,'date_birth', array('class'=>'form-control form-control-inline input-xmedium date-picker', 'id'=>'mask_ci')); ?>
                                                 </div>
                                                <div class="secundario letra_empleado">
                                                     <label class="control-label">Documento de Identidad</label>
                                                      <?php if(empty($Employee->identity_card))echo $form->textField($Employee,'identity_card', array('class'=>'form-control','value'=>'')); else echo $form->textField($Employee,'identity_card', array('class'=>'form-control','value'=>$Employee->identity_card,'id'=>'mask_number')); ?>
                                                 </div>
                                              
                                            </div>
                                            
                                             <div class="contenidos_columnas">
                                                 <div class="secundario letra_empleado">
                                                     <label class="control-label">Nacionalidad</label>
                                                        <?php if(empty($Employee->id_nationality)) echo $form->dropDownList($Employee,'id_nationality',$Employee->getNationality(), array('empty'=>'Seleccione una Opción','class'=>'form-control')); else echo $form->dropDownList($Employee,'id_nationality',$Employee->getNationality(), array("class"=>"form-control")); ?>
                                                 </div>
                                                <div class="secundario letra_empleado">
                                                      <label class="control-label">Estado Civil</label>
                                                       <?php if(empty($Employee->id_marital_status))echo $form->dropDownList($Employee,'id_marital_status',$Employee->getMaritalStatus(), array('empty'=>'Seleccione una Opción','class'=>'form-control')); else echo $form->dropDownList($Employee,'id_marital_status',$Employee->getMaritalStatus(), array("class"=>"form-control"));?>
                                                 </div>
                                            </div>
                                         
                                            <div class="contenidos_columnas">
                                                 <div class="secundario letra_empleado">
                                                     <label class="control-label">Correo Personal</label>
                                                     <?php if(empty($Employee->email_personal))echo $form->textField($Employee,'email_personal', array('class'=>'form-control','value'=>'')); else echo $form->textField($Employee,'email_personal', array('class'=>'form-control','value'=>$Employee->email_personal)); ?>
                                                 </div>
                                                <div class="secundario letra_empleado">
                                                    <label class="control-label">Correo Corporativo</label>
                                                     <?php if(empty($Employee->email_company))echo $form->textField($Employee,'email_company', array('class'=>'form-control','value'=>'')); else echo $form->textField($Employee,'email_company', array('class'=>'form-control','value'=>$Employee->email_company)); ?>
                                                 </div>
                                            </div>
                                             <div class="contenidos_columnas">
                                                 <div class="secundario letra_empleado">
                                                    <label class="control-label">Skype</label>
                                                     <?php  if(empty($Employee->skype)) echo $form->textField($Employee,'skype', array('class'=>'form-control','value'=>''));else echo $form->textField($Employee,'skype', array('class'=>'form-control','value'=>$Employee->skype)); ?>
                                                 </div>
                                                <div class="secundario letra_empleado">
                                                    <label class="control-label">Teléfono Celular</label>
                                                      <?php if(empty($Employee->cellphone))echo $form->textField($Employee,'cellphone', array('class'=>'form-control','value'=>'')); else echo $form->textField($Employee,'cellphone', array('class'=>'form-control','value'=>$Employee->cellphone)); ?>
                                                 </div>
                                            </div>
                                             <div class="contenidos_columnas">
                                                 <div class="secundario letra_empleado">
                                                     <label class="control-label">Teléfono de Habitación</label>
                                                      <?php if(empty($Employee->home_phone))echo $form->textField($Employee,'home_phone', array('class'=>'form-control','value'=>'')); else echo $form->textField($Employee,'home_phone', array('class'=>'form-control','value'=>$Employee->home_phone)); ?>
                                                 </div>
                                                <div class="secundario letra_empleado">
                                                    <label class="control-label">Extensión de Oficina</label>
                                                     <?php if(empty($Employee->extension_numeric))echo $form->textField($Employee,'extension_numeric', array('class'=>'form-control','value'=>'')); else echo $form->textField($Employee,'extension_numeric', array('class'=>'form-control','value'=>$Employee->extension_numeric)); ?>
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
                                        "class"=>"form-control",
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
                                        "class"=>"form-control",
                                        
                                    );
                                  
                                  ?>

                                 <div id="tab_2-2" class="tab-pane">
                                         <div class="form-group">
                                          <label class="control-label letra_empleado">Apartamento, Suite, Unidad, Edificio, Piso, Etc</label>
                                          <?php 
//                                              if(empty($Address->address_line_1))
//                                                echo $form->textField($Address,'address_line_1', array('class'=>'form-control','value'=>''));
//                                              else
                                                echo $form->textField($Address,'address_line_1', array('class'=>'form-control','value'=>$Address->address_line_1));
                                          ?>
                                       </div>
                                     <div class="form-group">
                                          <label class="control-label letra_empleado">Dirección de Calle, P.O Box, Nombre de la Compañía, C/O</label>
                                          
                                           <?php 
//                                              if(empty($Address->address_line_2))
//                                                echo $form->textField($Address,'address_line_1', array('class'=>'form-control','value'=>''));
//                                              else
                                                echo $form->textField($Address,'address_line_2', array('class'=>'form-control','value'=>$Address->address_line_2));
                                             ?>
                                       </div>
                                     
                                      <div class="form-group">
                                          <label class="control-label letra_empleado">Códigos Postal</label>
                                             <?php 
//                                          if(empty($Address->zip))
//                                            echo $form->textField($Address,'zip', array('class'=>'form-control','value'=>''));
//                                          else
                                            echo $form->textField($Address,'zip', array('class'=>'form-control','value'=>$Address->zip));
                                          ?>
                                       </div>
                                       <div class="form-group">
                                          <label class="control-label letra_empleado">País</label>
                                          
                                             <?php 
                                          if(empty($Address->idCity->idState->idCountry->name))
                                            echo $form->dropDownList($Employee,'country',Country::getCountry(),$ajaxState);
                                          else
                                            echo $form->dropDownList($Employee,'country',Country::getCountry(),$ajaxState);
                                          ?>
                                          
                                       </div>
                                     <div class="form-group">
                                          <label class="control-label letra_empleado">Estado/Provincia/Región</label>
                                             <?php 
                                          if(empty($Address->idCity->idState->name))
                                           echo $form->dropDownList($Employee,'state', array('empty'=>'Seleccione un Pais'),$ajaxCity);
                                          else
                                            echo $form->dropDownList($Employee,'state', array('empty'=>$Address->idCity->idState->name),$ajaxCity);
                                          ?>
                                        
                                       </div>
                                     <div class="form-group">
                                          <label class="control-label letra_empleado">Ciudad</label>
                                          
                                             <?php 
                                          if(empty($Address->idCity->name))
                                           echo $form->dropDownList($Address,'id_city',array('empty'=>'Seleccione un Estado'),array("class"=>"form-control"));
                                          else
                                           echo $form->dropDownList($Address,'id_city',array($Address->id_city=>$Address->idCity->name),array("class"=>"form-control"));
                                          ?>
                                         
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
         
          <div id="cambio_photo" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                 <h4 class="modal-title">Cambiar Imagen de Perfil</h4>
                              </div>
                              <div class="modal-body" align="center">
                                  <div class="modalemployee" data-always-visible="1" data-rail-visible1="1">
                                    <div class="row">
                                       <div class="col-md-6" style="width:100%;"> 
                                      <form action="#" role="form">
                                            <div class="form-group">
                                               <div class="thumbnail" style="width: 310%;">
                                                        <?php if (is_null($Employee->image_rute)){$sinfoto="themes/metronic/img/profile/profile.jpg";} else{$sinfoto=$Employee->image_rute;} ?>
                                                        <div name="foto"><img id="foto" src="/<?php echo $sinfoto; ?>" height="200" width="200"/></div>
                                                    <div class="margin-top-10 ">
                                                       <div class="input-group input-group-fixed">
                                                           <div class="option-panel right">
                                                               <div id="mulitplefileuploader">Cargar Foto</div>
                                                            </div>
                                                       </div>
                                                    </div>
<!--                                                  <div id="filename"></div>-->
                                                <div id="only-open">
                                                  <div id="area-add-file"></div>
                                                  <div id="status"></div>
                                                </div>
                                            </div>
                                       </div>
                                    </form>
                                 </div>
                              </div> 
                           </div>
                        </div>
                     </div>
                </div>
          </div>    
