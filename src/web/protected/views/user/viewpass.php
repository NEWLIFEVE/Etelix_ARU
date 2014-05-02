<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="row">
            <div class="col-md-12">
<!--                BEGIN PAGE TITLE & BREADCRUMB-->
               <h3 class="page-title">
                  Cambio de Contraseña
               </h3>
               <ul class="page-breadcrumb breadcrumb">
                  <li class="btn-group">
                     <button type="button" class="btn blue dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
                     <span>Actions</span> <i class="icon-angle-down"></i>
                     </button>
<!--                     <ul class="dropdown-menu pull-right" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                     </ul>-->
                  </li>
                  <li>
                     <i class="icon-home"></i>
                     <a href="/">Inicio</a> 
<!--                     <i class="icon-angle-right"></i>-->
                  </li>
              
                  
               </ul>
<!--                END PAGE TITLE & BREADCRUMB-->
            </div>
         </div>



<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>


	<?php echo $form->errorSummary($model); ?>

        <div class="row">
		<?php echo $form->labelEx($model,'Contraseña Nueva'); ?>
		<?php echo $form->passwordField($model,'password', array('class'=>'form-control input-medium')); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Repita la Contraseña'); ?>
		<?php echo $form->passwordField($model,'password', array('class'=>'form-control input-medium')); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>




	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>
</div>