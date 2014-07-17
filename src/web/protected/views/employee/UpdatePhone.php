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
                     <a href="#">Actualización de Números Teléfonicos</a>
                  </li>
               </ul>
               <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
         </div>


  <div class="row">
            <div class="col-md-12">
               <div class="portlet box blue" id="form_wizard_1">
                  <div class="portlet-title">
                     <div class="caption">
                        <i class="icon-reorder"></i> Bienvenidos - <span class="step-title">Paso 1 de 2</span>
                     </div>
                     <div class="tools hidden-xs">
                        <a href="javascript:;" class="collapse"></a>
                    
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
                                    <span class="desc"><i class="icon-ok"></i>Números Teléfonicos</span>   
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#tab3" data-toggle="tab" class="step">
                                    <span class="number">2</span>
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
                                    
                                             <h3 class="form-section">Hola "<?php echo Yii::app()->user->name?>", por favor Actualiza tus Números Teléfonicos para continuar utilizando ARU</h3>
                                             
                                             
                                             <div class="div_tabla_editar_empleados">
                                              
                                                  <div class="contenidos_columnas">
                                                
                                                  <div class="secundario form-group">    
                                                      <label class="control-label letra_empleado ">Código de Número Telefónico</label><br>
                                                           <?php echo $form->dropDownList($model,'cod_phone',Country::getCodePhoneCountry(),  array('class'=>'form-control input-medium', 'empty'=>' ') );?>
                                                          
                                                 </div>
                                                 
                                                </div>
                                               <div class="contenidos_columnas">
                                                   
                                                    <div class="secundario form-group">
                                                        <label class="control-label letra_empleado">Teléfono Celular</label>
                                                            <?php echo $form->textField($model,'cellphone', array('class'=>'form-control input-medium')); ?>
                                                          <!--<span class="help-block">Proporcione el Primer Apellido</span>-->
                                                  </div>
                                                   
                                                   
                                             
                                                  
                                                </div>
                                                  <div class="contenidos_columnas">
                                                       <label class="control-label letra_empleado">Teléfono De Habitación</label>
                                                            <?php echo $form->textField($model,'home_phone', array('class'=>'form-control input-medium')); ?>
                                                          <!--<span class="help-block">Proporcione el Primer Apellido</span>-->
                                                     </div>
                                                   <div class="contenidos_columnas">
                                                       <div class="secundario form-group">
                                                        <label class="control-label letra_empleado">Extensión de Oficina</label>
                                                            <?php echo $form->textField($model,'extension_numeric', array('class'=>'form-control input-medium')); ?>
                                                          <!--<span class="help-block">Proporcione el Primer Apellido</span>-->
                                                        </div>
                                                     </div>
                                            </div>     
                                         
                                 </div>
                                  
                                 
                             
                                 <div class="tab-pane" id="tab3">
                                   
                                     
                                    <h3 class="block">Confirmar Datos</h3>
                                    <h4 class="form-section">Números Teléfonicos</h4>
                                    
                                    
                                     <div class="form-group">
                                             
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
                                        
                                    </div>
                                    <div class="form-group">
                                               <div class="col-md-4">
                                                  <label class="control-label col-md-6">Extensión de Oficina:</label>
                                                  <p class="form-control-static" data-display="Employee[extension_numeric]"></p>
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
                                        <input type="submit" value='enviar' class="btn green button-submitcp" style="display: none" />
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
