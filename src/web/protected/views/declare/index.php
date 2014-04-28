<?php date_default_timezone_set("America/Caracas" ) ;?>
<div class="row">
            <div class="col-md-12">
               <!-- BEGIN PAGE TITLE & BREADCRUMB-->
               <h3 class="page-title">
                  Jornada Laboral <!--<small>statistics and more</small>-->
               </h3>
               <ul class="page-breadcrumb breadcrumb">
                  <li>
                     <i class="icon-home"></i>
                     <a href="/">Inicio</a> 
<!--                     <i class="icon-angle-right"></i>-->
                  </li>
<!--                  <li><a href="/employee/">Horario</a></li>-->
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
                        <i class="icon-reorder"></i>Jornada Laboral - <span class="step-title">Paso 1 de 4</span>
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
                                    <span class="desc"><i class="icon-ok"></i>Inicio de Jornada Laboral</span>   
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#tab2" data-toggle="tab" class="step">
                                    <span class="number">2</span>
                                    <span class="desc"><i class="icon-ok"></i>Descanso</span>   
                                    </a>
                                 </li>
                                  <li>
                                    <a href="#tab3" data-toggle="tab" class="step">
                                    <span class="number">3</span>
                                    <span class="desc"><i class="icon-ok"></i>Descanso fin</span>   
                                    </a>
                                 </li>

                                 <li>
                                    <a href="#tab4" data-toggle="tab" class="step">
                                    <span class="number">4</span>
                                    <span class="desc"><i class="icon-ok"></i>Fin de Jornada Laboral</span>   
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
                                  
                                  
<!--                                 COLOCAR  INICIO DEL FORMULARIO EN AJAX PARA GUARDAR DATOS Y PODER MODIFICAR LAS HORAS DE CADA ACCION -->
                                  
                                   <?php 
                                    $htmlOptions=array(
                                        "ajax"=>array(
                                            "url"=>$this->createUrl("StateByCountry"),
                                            "type"=>"POST",
                                            "data"=>"js:$('#submit_form').serialize()",
                                            "update"=>"#Employee_id_states",
                                        
                                        ),
                                        "class"=>"form-control",
                                    );
                                  
                                  ?>
                                  
                                  
                                 <div class="tab-pane active" id="tab1">

                                 </div>
                                 <div class="tab-pane" id="tab2">
                                     <label class="control-label col-md-3 letra_empleado">Inicio de Jornada Laboral</label>
                                     <?php echo $form->textField(EventEmployee::model(),'time_start_day', array('class'=>'form-control input-medium')); ?>
                                     <!--<input class="form-control input-medium" id="inicio_jornada" type="text" value="" name="inicio_jornada" />-->

                                 </div>
                                 <div class="tab-pane" id="tab3">
                                     <div class="form-group">
                                         <label class="control-label col-md-3 letra_empleado">Inicio de Jornada Laboral</label>
                                          <?php //echo $form->textField(EventEmployee::model(),'time_start_day', array('class'=>'form-control input-small')); ?>
                                         <input class="form-control input-medium" id="jornada1" type="text" value="" name="jornada1" />
                                        
                                     </div> 
                                     <div class="form-group">
                                         <label class="control-label col-md-3 letra_empleado">Inicio de Descanso</label>
                                         <?php echo $form->textField(EventEmployee::model(),'time_start_rest', array('class'=>'form-control input-medium')); ?>
                                         <!--<input class="form-control input-medium" id="descanso" type="text" value="" name="descanso" />-->
                                         
                                     </div> 
                                 </div>
                                 <div class="tab-pane" id="tab4">
                                      <div class="form-group">
                                         <label class="control-label col-md-3 letra_empleado">Inicio de Jornada Laboral</label>
                                        <input class="form-control input-medium" id="jornada2" type="text" value="" name="jornada2" />
                                         <!--<p class="form-control-static" data-display="jornada1"></p>-->
                                     </div> 
                                     <div class="form-group">
                                         <label class="control-label col-md-3 letra_empleado">Inicio de Descanso</label>
                                          <input class="form-control input-medium" id="desc1" type="text" value="" name="desc1" />
                                          <!--<p class="form-control-static" data-display="descanso"></p>-->
                                     </div> 
                                       <div class="form-group">
                                         <label class="control-label col-md-3 letra_empleado">Fin de Descanso</label>
                                          <?php echo $form->textField(EventEmployee::model(),'time_end_rest', array('class'=>'form-control input-medium')); ?>
                                         <!--<input class="form-control input-medium" id="fin_descanso" type="text" value="" name="fin_descanso" />-->
                                         <!--<p class="form-control-static" data-display="fin_descanso"></p>-->
                                        </div> 
                       
<!--                                     <a class="btn blue" data-toggle="modal" href="#responsive">Detalle de Jornada Laboral</a>-->
                                 </div>
                                  
                                  
                                 
                                 </div>
                                                         
                
                           </div>
                           <div class="form-actions fluid">
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="col-md-offset-3 col-md-9">
<!--                                       <a href="javascript:;" class="btn default button-previous">
                                       <i class="m-icon-swapleft"></i> Atrás
                                       </a>-->
                                        <a href="javascript:;"><i class=""></i>
                                            <input type="button" value="Siguiente" onclick="gettime()" class="btn blue button-next"/>
                                             
                                       </a>
                                         
                                               
                                        
                                          
                                       <input type="submit" value="Guardar" class="btn blue button-submit"/>                          
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
   
   
   <div id="responsive" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                 <h4 class="modal-title">Confirmar Jornada Laboral</h4>
                              </div>
                              <div class="modal-body">
                                 <div class="scroller" style="height:300px" data-always-visible="1" data-rail-visible1="1">
                                    <div class="row">
                                       <div class="col-md-6">
                                           
                                           
<!--                                            <form action="#" role="form">
                                       <div class="form-group">
                                        
                                       
                                      
                                    
                                       </div>
                                   
                                    </form>
                                         -->
                                        
                                       </div>
                                       
                                 </div>
                              </div>
                              <div class="modal-footer">
                                 <button type="button" data-dismiss="modal" class="btn default">Cerrar</button>
<!--                                 <button type="button" class="btn green">Guardar</button>-->
                              </div>
                           </div>
                        </div>
                     </div>
          </div>