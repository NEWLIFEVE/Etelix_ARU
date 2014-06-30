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

                                     
                    $Division=array("class"=>"form-control input-large select2","empty"=>"División");
                    $Position=array("class"=>"form-control input-large select2","empty"=>"Cargo",);
                    $Employee=array("class"=>"form-control input-large select2","empty"=>"Empleado",);

                      ?>
                      
                      
                        <div class="form-body">
                            <div id="error">   </div>    
                              <div class="div_tabla_editar_empleados">
                                      
                                  <div class="contenidos_columnas">
                                      <div class="secundario form-group">
                                          <label class="control-label letra_empleado">División</label><br>
                                          <table>
                                              <tr>
                                                  <td>
                                                       <div id="selectDivision">
                                                        <?php echo $form->dropDownList($model,'id_division',Division::getDivision(),$Division);?>
                                                        </div>
                                                  </td>
                                                  <td>
                                                      <div id="mensaje"></div>
                                                      <?php echo $form->textField($model,'new_division', array('class'=>'form-control input-large dependencia')); ?>
                                                       <!--<input type="text" id="new_division" class="dependencia form-control input-large"  value="" name="new_division"/>-->
                                                   </td>
                                                   <td><div id="dependencia"></div>
                                                       <div id="seleDepen">
                                                       <?php echo $form->dropDownList($model,'id_dependencia',Division::getDivision(),$Division);?>
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <p id="test" class="newGroup">+</p>    
                                                   </td>
                                              </tr>
                                          </table>
                                      </div>
                                      
                                  </div>
                                  <div class="contenidos_columnas">
                                      <div class="secundario form-group">
                                          <label class="control-label letra_empleado">Cargo</label><br>
                                            
                                          <table>
                                              <tr>
                                                  <td>
                                                      <div id="selectCargo">
                                                          <?php echo $form->dropDownList($model,'id_position',Position::getPosition(),$Position);?>
                                                      </div>
                                                  </td>
                                                  <td>
                                                       <div id="mensajeCargo"></div>
                                                       <input type="text" id="new_position" class="cargo form-control input-large"  value="" name="new_position"/>
                                                  </td>
                                                  <td>
                                                      
                                                      <div id="checkbox">
                                                          <div id="mensajeLider" ></div>
                                                          <input type="checkbox" id="leader" name="leader" value="1"   />
                                                      </div>
                                                     
                                                  </td>
                                                  <td>
                                                      <p id="cargo" class="newGroup">+</p>
                                                  </td>
                                              </tr>
                                          </table>
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



