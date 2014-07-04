    <div class="row">
            <div class="col-md-12">
               <!-- BEGIN PAGE TITLE & BREADCRUMB-->
               <h3 class="page-title">
                  Creación de Posición Organizacional
               </h3>
               <ul class="page-breadcrumb breadcrumb">
                  <li>
                     <i class="icon-home"></i>
                     <a href="#">Inicio</a> 
                     <i class="icon-angle-right"></i>
                  </li>
                  <li>
                     <a href="#">Posición Organizacional</a>
                     <i class="icon-angle-down"></i>
                  </li>
                 
               </ul>
               <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
         </div>


 <div class="row">
            <div class="col-md-12">
               <!-- BEGIN INLINE NOTIFICATIONS PORTLET-->
               <div class="portlet box blue">
                  <div class="portlet-title">
                     <div class="caption"><i class="icon-cogs"></i>Crear Nuevo Código de Posición</div>
                     <div class="tools">
                        <a href="javascript:;" class="collapse"></a>
                        <a href="javascript:;" class="reload"></a>
                        <a href="javascript:;" class="remove"></a>
                     </div>
                  </div>
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
                  <div class="portlet-body">
                     <div>
                      <?php  echo $form->dropDownList($model,'position', Position::getPosition());?> 
                     </div>
                  </div>
                 <?php $this->endWidget(); ?>
               </div>
            </div>
</div>