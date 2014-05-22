<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="row">
            <div class="col-md-12">
               <h3 class="page-title">
                  Cambio de Contraseña
               </h3>
               <ul class="page-breadcrumb breadcrumb">
                  <li>
                     <i class="icon-home"></i>
                     <a href="/">Inicio</a> 
                  </li>
               </ul>
            </div>
         </div>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'submit_form',
	'enableAjaxValidation'=>false,
)); ?>
	<?php echo $form->errorSummary($model); ?>
                    <div id="tab_2-2" class="tab-pane">
                           <div class="form-group">
                                  <?php echo $form->labelEx($model,'Contraseña Actual', array('class'=>'letra_empleado')); ?>
                                  <?php echo $form->passwordField($model,'validar_pass', array('class'=>'form-control input-medium')) ?>
                                  <?php echo $form->error($model,'validar_pass'); ?>
                            </div>
                    </div>
                     <div id="tab_2-2" class="tab-pane">
                           <div class="form-group">
                                  <?php echo $form->labelEx($model,'Contraseña Nueva', array('class'=>'letra_empleado')); ?>
                                  <?php echo $form->passwordField($model,'pass', array('class'=>'form-control input-medium')) ?>
                            </div>
                     </div>
                     <div id="tab_2-2" class="tab-pane">
                           <div class="form-group">
                                  <?php echo $form->labelEx($model,'Repita la Contraseña', array('class'=>'letra_empleado')); ?>
                                  <?php echo $form->passwordField($model,'confir_pass', array('class'=>'form-control input-medium')) ?>
                            </div>
            
                     </div>
                     <div id="tab_2-2" class="tab-pane">
                           <div class="form-group">
                                  <?php echo CHtml::Button('Cambiar Contraseña', array('class'=>'btn blue', 'id'=>'changepass')); ?><a data-toggle="modal" href="#cambio_photo" id="photo"></a>
                            </div>
                     </div>
                     <div id="error_contra"></div>
    

    
      
    
<?php $this->endWidget(); ?>
</div>


  <div id="cambio_pass" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                 <h4 class="modal-title">Cambio de Contraseña</h4>
                              </div>
                              <div class="modal-body" align="center">
                                  <div class="modalemployee" data-always-visible="1" data-rail-visible1="1">
                                    <div class="row">
                                       <div class="col-md-6" style="width:100%;"> 
                                      <form action="#" role="form">
                                            <div class="form-group">
                                               <div class="cambiocontra" style="width: 310%;">
                                                      
                                                    <div class="margin-top-10 ">
                                                       <div class="input-group input-group-fixed">
                                                       </div>
                                                    </div>
                                                        <div id="only-open">
                                                            <div id="mensaje"></div>
                                                        </div>
                                                    </div>
                                                 <div class="modal-footer">
                                                     <a href="/EventEmployee/Create"/><button type="button" class="btn green">Aceptar</button></a>
                                                     <div id></div>  
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