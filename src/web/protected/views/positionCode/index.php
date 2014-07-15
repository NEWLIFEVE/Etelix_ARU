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
            <div class="col-md-12">
               <div class="portlet box blue" id="form_wizard_1">
                  <div class="portlet-title">
                     <div class="caption">
                        <i class="icon-reorder"></i> Crear Código de Posición- <span class="step-title">Paso 1 de 2</span>
                     </div>
                     <div class="tools hidden-xs">
                        <a href="javascript:;" class="collapse"></a>
                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                        <a href="javascript:;" class="reload"></a>
                        <a href="javascript:;" class="remove"></a>
                     </div>
                  </div>
                  <div class="portlet-body form">
                    <?php $form=$this->beginWidget('CActiveForm', array('id'=>'submit_form','enableAjaxValidation'=>true)); 
                             $Division=array("class"=>"form-control input-medium select2","empty"=>"División");
                             $Divisionotro=array("class"=>"form-control input-medium select2","empty"=>"División");
                             $Position=array("class"=>"form-control input-medium select2","empty"=>"Cargo",);
                             $Employee=array("class"=>"form-control input-medium select2","empty"=>"Empleado",);
                    ?>
                        <div class="form-wizard form-horizontal">
                           <div class="form-body">
                              <ul class="nav nav-pills nav-justified steps">
                                 <li>
                                    <a href="#tab1" data-toggle="tab" class="step">
                                    <span class="number">1</span>
                                    <span class="desc"><i class="icon-ok"></i>Código de Posición</span>   
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#tab2" data-toggle="tab" class="step">
                                    <span class="number">2</span>
                                    <span class="desc"><i class="icon-ok"></i> Verificar Código de Posición</span>   
                                    </a>
                                 </li>
                                
                              </ul>
                              <div id="bar" class="progress progress-striped" role="progressbar">
                                 <div class="progress-bar progress-bar-success"></div>
                              </div>
                              <div class="tab-content">
                                 <div class="alert alert-danger display-none">
                                    <button class="close" data-dismiss="alert"></button>
                                 </div>

                                 <div class="alert alert-success display-none">
                                    <button class="close" data-dismiss="alert"></button>
                                   
                                 </div>
                                 <div class="tab-pane active" id="tab1">

                                                        <div id="contenedor">
                                                            <div id="contenidos">
                                                                <div id="columna1">
                                                                     <label class="control-label col-md-2">División<span class="required">*</span></label>
                                                                </div>
                                                                <div id="columna1">
                                                                    <div id="selectDivision" class="form-group">
                                                                        <?php echo $form->dropDownList($model,'id_division',Division::getDivision(),$Division);?>
                                                                    </div>
                                                                    <div id="mensaje"></div>
                                                                    <?php echo $form->textField($model,'new_division', array('class'=>'form-control input-medium dependencia')); ?>
                                                                </div>

                                                                <div id="columna2">
                                                                     <div id="seleDepen" style="margin-left:10px" >
                                                                         <div id="mensajedependencia" style="margin-left:10px"></div>
                                                                          <?php echo $form->dropDownList($model,'id_dependencia',Division::getDivision(),$Divisionotro);?>
                                                                     </div>
                                                                </div>
                                                                <div id="columna2">
                                                                    <p id="test" class="newGroup icon-plus-sign"></p>   
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="contenedor">
                                                            <div id="contenidos">
                                                                <div id="columna1">
                                                                     <label class="control-label col-md-2 labelcargo">Cargo<span class="required">*</span></label>
                                                                </div>
                                                                <div id="columna1">
                                                                    <div id="selectCargo" class="form-group" style="margin-left:-1px;">
                                                                        <?php echo $form->dropDownList($model,'id_position',Position::getPosition(),$Position);?>
                                                                   </div>
                                                                    <div id="mensajeCargo"></div>
                                                                    <input type="text" id="new_position" class="cargo form-control input-medium " style="margin-left:0px;" value="" name="new_position"/>
                                                                </div>
                                                                <div id="columna1">
                                                                    <div id="checkbox">
                                                                        <div id="mensajeLider" ></div>
                                                                          <input type="checkbox" id="leader" name="leader" value="1"   />
                                                                        </div>
                                                                </div>
                                                                <div id="columna2">
                                                                     <p id="cargo" class="newGroup  icon-plus-sign"></p>
                                                                </div>
                                                            </div>

                                                        </div>


                                                        <div id="contenedor" style="margin-left:-18px;">
                                                            <div id="contenidos" >
                                                                <div id="columna1">
                                                                    <label class="control-label col-md-3 etiquetaemployee">Empleado<span class="required">*</span></label>
                                                                </div>
                                                                <div id="columna1" class="form-group campoemployee" >
                                                                    <?php echo $form->dropDownList($model,'id_employee',Employee::getEmployeeAll(),$Employee);?>
                                                                </div>
                                                                <div id="columna1" class="campofecha">
                                                                    <div id="columna1" class="etiquetafechapc">
                                                                     <label class="control-label col-md-3">Fecha<span class="required">*</span></label>
                                                                    </div>
                                                                    <div id="columna1" class="form-group">
                                                                     <?php echo $form->textField($model,'start_date', array('class'=>'form-control input-medium date-picker')); ?>                   
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                     
                                 </div>
                                 <div class="tab-pane" id="tab2">
                                    <h3 class="block">Confirmar Código de Posición</h3>

                                    <div class="form-group">
                                        <div class="col-md-4" style="clear: both; width: 100%"> <div id="error"></div></div>
                                       <label class="control-label col-md-3">División:</label>
                                       <div class="col-md-4">
                                           <p class="form-control-static" id="idDivision" data-display="PositionCode[id_division]"></p>
                                           <p class="form-control-static" id="newDivision" data-display="PositionCode[new_division]"></p>
                                        
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label col-md-3">Cargo:</label>
                                       <div class="col-md-4">
                                           <p class="form-control-static" id="idPosition" data-display="PositionCode[id_position]"></p>
                                          <p class="form-control-static"  id="newPosition"data-display="new_position"></p>
                                       </div>
                                    </div>
                                   <div class="form-group">
                                       <label class="control-label col-md-3">Empleado:</label>
                                       <div class="col-md-4">
                                          <p class="form-control-static" data-display="PositionCode[id_employee]"></p>
                                       </div>
                                    </div>
                                   <div class="form-group">
                                       <label class="control-label col-md-3" >Fecha:</label>
                                       <div class="col-md-4">
                                           
                                          <p class="form-control-static" data-display="PositionCode[start_date]"></p>
                                       </div>
                                    </div>
                                   <div class="form-group">
                                       <label class="control-label col-md-3">Código de Posición:</label>
                                       <div class="col-md-4">
                                          <!--<p class="form-control-static" data-display="email"></p>-->
                                           <div id="posicion"></div>
                                       </div>
                                    </div>
                                  
                                 </div>
                              </div>
                           </div>
                           <div class="form-actions fluid">
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="col-md-offset-3 col-md-9">
                                       <a href="javascript:;" class="btn default button-previous btnCpCentrar">
                                       <i class="m-icon-swapleft"></i> Atras 
                                       </a>
                                       <a href="javascript:;" class="btn blue button-next btnCpCentrar" id="siguiente">
                                       Siguiente <i class="m-icon-swapright m-icon-white"></i>
                                       </a>
                                        <a href="javascript:;" id="positioncode" class="btn green button-submitcp" style="display: none">
                                       Enviar <i class="m-icon-swapright m-icon-white"></i>
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



<div id="codigo_posicion" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                 <h4 class="modal-title">Código de Posición</h4>
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
                                                            <div id="mensaje" class="verde"></div>
                                                        </div>
                                                    </div>
                                                 <div class="modal-footer">
                                                     <a href="/positionCode/index"/><button type="button" class="btn green">Agregar</button></a>
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


  