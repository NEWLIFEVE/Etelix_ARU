    <div class="row">
            <div class="col-md-12">
               <!-- BEGIN PAGE TITLE & BREADCRUMB-->
               <h3 class="page-title">
                  Código de Posición
               </h3>
               <ul class="page-breadcrumb breadcrumb">
                  <li>
                     <i class="icon-home"></i>
                     <a href="#">Inicio</a> 
                     <i class="icon-angle-right"></i>
                  </li>
                  <li>
                     <a href="#">Código de Posición</a>
                     <i class="icon-angle-down"></i>
                  </li>
                 
               </ul>
               <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
         </div>



<div class="row">
            <div class="col-md-12 ">
               <!-- BEGIN SAMPLE FORM PORTLET-->   
               <div class="portlet box blue">
                  <div class="portlet-title">
                     <div class="caption">
                        <i class="icon-reorder"></i> Código de Posición
                     </div>
                     <div class="tools">
                        <a href="" class="collapse"></a>
                        <a href="" class="reload"></a>
                        <a href="" class="remove"></a>
                     </div>
                  </div>
                  <div class="portlet-body form">
                    <?php $form=$this->beginWidget('CActiveForm', array('id'=>'submit_form','enableAjaxValidation'=>true)); 

                                     
                    $Division=array("class"=>"form-control input-large","empty"=>"Division/Departamento",);
                    $Position=array("class"=>"form-control input-large","empty"=>"Cargo",);
                    $Employee=array("class"=>"form-control input-large","empty"=>"Empleado",);

                      ?>
                      
                      
                        <div class="form-body">
                            <div id="error">   </div>    
                              <div class="div_tabla_editar_empleados">
                                      
                                  <div class="contenidos_columnas">
                                      <div class="secundario form-group">
                                          <label class="control-label letra_empleado">División</label><br>
                                             <?php echo $form->dropDownList($model,'id_division',Division::getDivision(),$Division);?>
                                            
                                      </div>
                                  </div>
                                  <div class="contenidos_columnas">
                                      <div class="secundario form-group">
                                          <label class="control-label letra_empleado">Cargo</label><br>
                                            <?php echo $form->dropDownList($model,'id_position',Position::getPosition(),$Position);?>
                                          
                                      </div>
                                    </div>
                                  <div class="contenidos_columnas">
                                      <div class="secundario form-group">
                                          <label class="control-label letra_empleado">Empleado</label><br>
                                             <?php echo $form->dropDownList($model,'id_employee',Employee::getEmployeeAll(),$Employee);?>
                                          
                                      </div>
                                       <div class="secundario form-group">
                                          <label class="control-label letra_empleado">Fecha de Inicio</label><br>
                                             <?php echo $form->textField($model,'start_date', array('class'=>'form-control input-medium date-picker')); ?>
                                          <p></p>
                                      </div>
                                    </div>
                                  
                              </div>
                            <div class="centrar">
                                <a id="positioncode"><input type="button" value='enviar' class="btn green" /></a>
                            </div>
                          
                                     
                        </div>  
                 
                    <?php $this->endWidget(); ?>
                  </div>
               </div>
            </div>
</div>