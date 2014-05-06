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
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); ?>


	<?php echo $form->errorSummary($model); ?>

                    <div id="contenedor">
                          <div id="contenidos">
                                <div id="secundario">
                                  <?php echo $form->labelEx($model,'Contraseña Actual', array('class'=>'letra_empleado')); ?>
                                </div>
                                <div id="principal">
                                    <?php echo $form->passwordField($model,'confir_pass', array('class'=>'form-control input-medium')) ?>
                                </div>
                          </div>
                          <div id="contenidos">
                                <div id="secundario">
                                  <?php echo $form->labelEx($model,'Contraseña Nueva', array('class'=>'letra_empleado')); ?>
                                </div>
                                <div id="principal">
                                  <?php echo $form->passwordField($model,'password', array('class'=>'form-control input-medium')); ?> 
                                </div>
                          </div>
                           <div id="contenidos">
                                <div id="secundario">
                                  <?php echo $form->labelEx($model,'Repita la Contraseña', array('class'=>'letra_empleado')); ?>
                                </div>
                                <div id="principal">
                                  <?php echo $form->passwordField($model,'confir_pass1', array('class'=>'form-control input-medium')); ?> 
                                </div>
                          </div>
                         <div id="contenidos">
                                <div id="secundariosed">
                                  <?php echo CHtml::submitButton('Cambiar Contraseña', array('class'=>'btn blue')); ?>
                                </div>
                          </div>
                    </div>


	

<?php $this->endWidget(); ?>
</div>