<div class="row">
            <div class="col-md-12">
               <!-- BEGIN PAGE TITLE & BREADCRUMB-->
               <h3 class="page-title">
                  Empleados Logueados (nombre Opcional)
               </h3>
               <ul class="page-breadcrumb breadcrumb">
                  <li>
                     <i class="icon-home"></i>
                     <a href="#">Inicio</a> 
                     <i class="icon-angle-right"></i>
                  </li>
                  <li>
                     <a href="#">Empleado Logueados</a>
                     <i class="icon-angle-down"></i>
                  </li>
                 
               </ul>
               <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
         </div>
         <!-- END PAGE HEADER-->
<div class="row">
            <div class="col-md-12">
               <div class="tabbable tabbable-custom tabbable-full-width">
                  <ul class="nav nav-tabs">
                   
                      <li class="active"><a data-toggle="tab" href="#tab_1_5">Empleados </a></li>
                  </ul>
                  <div class="tab-content">
                    
                     <!--end tab-pane-->
                     <div id="tab_1_5" class="tab-pane active">
                        
                        <div class="table-responsive">
                           <table class="table table-striped table-bordered table-advance table-hover">
                              <thead>
                                 <tr>
                                    <th>Foto</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Skype</th>
                                    <th>Teléfono</th>
                                    <th colspan="2">Status</th>
                                   
                                 </tr>
                              </thead>
                              <tbody>
                                  
                                   <?php foreach ($search as $value) {?>
                                  <?php if (is_null($value->image_rute)){$photoemployee="themes/metronic/img/profile/profile.jpg";} else {$photoemployee=$value->image_rute;} ?>
                              <tr>
                                  <td><img class="sizephotoemployee" src="/<?php echo $photoemployee; ?>"></td>
                                  <td><?php echo $value->first_name;?></td>
                                  <td><?php echo $value->last_name;?></td>
                                  <td><?php echo $value->skype;?></td>
                                  <td><?php echo $value->cellphone;?></td>
                                  <?php $status=EventEmployee::getSearchStatus($value->id); ?> 
                                  <?php $estilo=EventEmployee::getStilo($status['id_type_event']); ?>
                                  <td><span class="label label-sm <?php echo $estilo; ?>"><?php echo $status['name']; ?></span></td>
                                  <td><a href="#cambio_photo" id="detalle"><div id="emm" style="display:none;"><?php echo $value->id; ?></div>Detalle</a></td>
                              </tr>
                                  <?php } ?>
                               
                               
                              </tbody>
                           </table>
                        </div>
<!--                        <div class="margin-top-20">
                           <ul class="pagination">
                              <li><a href="#">Anterior</a></li>
                              <li><a href="#">1</a></li>
                              <li><a href="#">2</a></li>
                              <li><a href="#">3</a></li>
                              <li><a href="#">4</a></li>
                              <li><a href="#">5</a></li>
                              <li><a href="#">Siguiente</a></li>
                           </ul>
                        </div>-->
                     </div>
                     <!--end tab-pane-->
                  </div>
               </div>
            </div>
            <!--end tabbable-->           
         </div>
         
         <div id="cambio_photo" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                 <h4 class="modal-title">Datos del Empleado</h4>
                              </div>
                              <div class="modal-body" align="center">
                                  <div class="modalemployee" data-always-visible="1" data-rail-visible1="1">
                                    <div class="row">
                                       <div class="col-md-6" style="width:100%;"> 
                                      <form action="#" role="form">
                                            <div class="form-group">
                                               <div class="thumbnail" style="width: 310%;">   
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
    