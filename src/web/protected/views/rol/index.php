       <div class="row">
            <div class="col-md-12">
               <!-- BEGIN PAGE TITLE & BREADCRUMB-->
               <h3 class="page-title">
                  Creación de Rol
               </h3>
               <ul class="page-breadcrumb breadcrumb">
                  <li>
                     <i class="icon-home"></i>
                     <a href="#">Inicio</a> 
                     <i class="icon-angle-right"></i>
                  </li>
                  <li>
                     <a href="#">Rol</a>
                     <i class="icon-angle-right"></i>
                  </li>
                  <li>
                     <a href="#">Creación de Rol</a>
                     <i class="icon-angle-down"></i>
                  </li>
               </ul>
               <!-- END PAGE TITLE & BREADCRUMB-->
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

                                                <div class="div_tabla_editar_empleados">
                                                                    <div class="principal">

                                                                    </div>
                                                                    <div class="contenidos_columnas">
                                                                      <div class="secundario form-group">
                                                                        <label class="control-label letra_empleado">Nombre del Rol</label>
                                                                        <?php echo $form->textField($model,'name_rol', array('class'=>'form-control input-medium','value'=>'')); ?>
                                                                      </div>
                                                                    </div>
                                                                     <div id="error_rol"></div>
                                                                <div class="form-actions fluid">
                                                                     <div>
                                                                         <input type="button" value="Enviar" class="btn blue" id="crearRol" />
                                                                     </div>
                                                                </div>
                                                                 
                                                </div>
                                     <?php $this->endWidget(); ?>
                                        <div id="rol" class="modal fade" tabindex="-1" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                   <div class="modal-content">
                                                                      <div class="modal-header">
                                                                         <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                                         <h4 class="modal-title">Rol Creado Exitosamente</h4>
                                                                      </div>
                                                                      <div class="modal-body" align="center">
                                                                          <div class="modalemployee" data-always-visible="1" data-rail-visible1="1">
                                                                            <div class="row">
                                                                               <div class="col-md-6" style="width:100%;"> 
                                                                              <form action="#" role="form">
                                                                                    <div class="form-group">
                                                                                       <div class="thumbnail" style="width: 310%;">
                                                                                         <div id="mensaje"></div>
                                                                                         <div class="modal-footer">
                                                                                              <a href="/Employee/AdmiControllers"/><button type="button" class="btn green">Aceptar</button></a>
                                                                                         </div>
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