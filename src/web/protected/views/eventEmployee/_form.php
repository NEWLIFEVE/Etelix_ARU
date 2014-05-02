<?php //
/* @var $this EventEmployeeController */
/* @var $model EventEmployee */
/* @var $form CActiveForm */
?>

   <?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'event-employee-form',
	'enableAjaxValidation'=>true,
)); ?>


<?php date_default_timezone_set("America/Caracas" ) ;?>
<?php




 $div = "";
 foreach ($model as $key => $value)
                   {
                     $evento= $value['event'];
                     $hora= $value['hour'];
                 
                     $div.="<div class='form-group'>
                             <label class='control-label col-md-3 letra_empleado'>".$model[$key]['hour']."</label>
                            </div> ";
//                    var_dump($value);
                   
                   }

?>

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
                                  <div class="progress-bar progress-bar-success" ></div>
                              </div>

                              <div class="tab-content">

<!--                                 <div class="tab-pane active" id="tab1">

                        <div class="form">
    
                                <?php //echo $form->errorSummary($model); ?>

                                    <div class="row">
                                            <?php //echo $form->labelEx($model,'id_employee'); ?>
                                            <?php //echo $form->hiddenField($model,'id_employee', array('value'=>Yii::app()->user->id)); ?>
                                            <?php //echo $form->error($model,'id_employee'); ?>
                                    </div>

                                    <div class="row">
                                            <?php //echo $form->labelEx($model,'date'); ?>
                                            <?php //echo $form->hiddenField($model,'date', array('value'=>date('Ymd'))); ?>
                                            <?php //echo $form->error($model,'date'); ?>
                                    </div>

                       </div> form 

                                 </div>

                                 <div class="tab-pane" id="tab2">
                                     <label class="control-label col-md-3 letra_empleado"><?php  //echo $model[0]['hour']; ?></label>
                                   
                                 </div>
                                 <div class="tab-pane" id="tab3">
                                     <div class="form-group">
                                         <label class="control-label col-md-3 letra_empleado"><?php  //echo $model[0]['hour']; ?></label>
    
                                     </div> 
                                     <div class="form-group">
                                         <label class="control-label col-md-3 letra_empleado"><?php  //echo $model[1]['hour']; ?></label>
 
                                     </div> 
                                 </div>-->
                                 <div class="" id="">
                                     <?php echo $div;?>
<!--                                      <div class="form-group">
                                         <label class="control-label col-md-3 letra_empleado"><?php  //echo $model[0]['hour']; ?></label>
                                        
                                     </div> 
                                     <div class="form-group">
                                         <label class="control-label col-md-3 letra_empleado"><?php  //echo $model[1]['hour']; ?></label>
                                         
                                     </div> 
                                       <div class="form-group">
                                         <label class="control-label col-md-3 letra_empleado"><?php  //echo $model[2]['hour']; ?></label>
                                
                                        </div> 
                                        
                                      <div class="form-group">
                                         <label class="control-label col-md-3 letra_empleado"><?php  //echo $model[1]['hour']; ?></label>
                                      
                                        </div> -->
                                 </div>

                                 </div>

                           </div>
                           <div class="form-actions fluid">
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="col-md-offset-3 col-md-9">
                                        <a id="declare" class="btn blue " data-toggle="modal" href="#responsive"><i class="">Declarar</i>
                                           
                                        </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                      <div id="responsive" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                 <h4 class="modal-title">Verificar Inicio de Jornada Laboral</h4>
                              </div>
                              <div class="modal-body">
                                 <div class="scroller" style="height:100px" data-always-visible="1" data-rail-visible1="1" tabindex="-1">
                                    <div class="row">
                                       <div class="col-md-6">
                                      
                                    
                                       
                                       </div>
                                    
                                    </div>
                                 </div>
                              </div>
                              <div class="modal-footer">
                                  <a href="javascript:;"><i class=""></i><input type="button" value="Atras"  class="btn blue button-previous"  data-dismiss="modal"/></a>
                                  <a href="javascript:;"><i class=""></i><input type="button" value="Cancelar"  class="btn green button-cancelar"  data-dismiss="modal"/></a>
                                  <a href="javascript:;"><i class=""></i><input type="button" value="Puesto de Trabajo" id="puesto_trabajo" class="btn blue button-next declare"  data-dismiss="modal"/></a>
                                  <a href="javascript:;"><i class=""></i><input type="button" value="Remoto" id="remoto" class="btn blue button-next declare"  data-dismiss="modal"/></a>  
                                 
                                            <?php //echo CHtml::submitButton($model->isNewRecord ? 'Puesto de Trabajo' : 'Save', array('class'=>'btn blue button-next', 'onclick'=>'getdatos(1)')); ?>
                                            <?php //echo CHtml::submitButton($model->isNewRecord ? 'Remoto' : 'Save', array('class'=>'btn blue button-next', 'onclick'=>'getdatos(2)')); ?>
                                            <?php //echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Save', array('class'=>'btn green button-submit')); ?>
                                            
                                            
                                            
                                           
                              </div>            
                           </div>
                        </div>
                     </div>
                        
                        </div>

     
                  </div>
               </div>
            </div>
             

             
           <?php $this->endWidget(); ?></div>