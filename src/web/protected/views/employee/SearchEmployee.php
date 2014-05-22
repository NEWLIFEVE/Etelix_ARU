<div class="row">
            <div class="col-md-12">
               <!-- BEGIN PAGE TITLE & BREADCRUMB-->
               <h3 class="page-title">
                  Empleados Activos
               </h3>
               <ul class="page-breadcrumb breadcrumb">
                  <li>
                     <i class="icon-home"></i>
                     <a href="#">Inicio</a> 
                     <i class="icon-angle-right"></i>
                  </li>
                  <li>
                     <a href="#">Empleado Activos</a>
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
                                  <td><a href="#cambio_photo" id="detalle" class="btn default btn-xs green-stripe"><div id="id_employ" style="display:none;"><?php echo $value->id; ?></div>Detalle</a></td>
                              </tr>
                                  <?php } ?>
                              </tbody>
                           </table>
                        </div>
                     </div>
                     <!--end tab-pane-->
                  </div>
               </div>
            </div>
            <!--end tabbable-->           
         </div>
      <div id="detalle_empleado" class="modal fade" tabindex="-1" aria-hidden="true">
        <div class="modal-detallemployee">
           <div class="modal-content">
              <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                 <h4 class="modal-title">Datos del Empleado</h4>
              </div>
              <div class="modal-body" align="center">
                  <div class="modalemployee" data-always-visible="1" data-rail-visible1="1">
                   <div class="row">
                       <div class="col-md-12"> 
                           <div class="form-group">
                               <div class="thumbnail"> 
                                   <div class="tab-content">
                                       <div class="row">
                                           <div class="col-md-12">
                                               <div class="row" >
                                                   <div  class="margen_detalle_empleado">
                                                    <h1><div id="title"></div></h1>
                                                </div>
                                                   <div  class="margen_detalle_empleado">
                                                    <h1><div id="last_name"></div></h1>
                                                 </div>
                                              </div>
                                               <div class="row" >
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="tab_1_11">
                                                               <div class="portlet-body">
                                                                   <div class="table-responsive">
                                                                  <table class="table table-striped table-bordered table-advance table-hover">
                                                                     <tbody>
                                                                            <tr>
                                                                                <td rowspan="6"><div id="imagen_rute"><img id="photo" src="" width="178px" height="178px" /></div></td>
                                                                                <td class="letra_empleado">Nombres</td>
                                                                                <td><div id="name" style="display:inline"></div> <div id="second_name" style="display:inline"></div></td>
                                                                                <td class="letra_empleado">Apellidos</td>
                                                                                 <td><div id="titlelast" style="display:inline"></div> <div id="second_last_name" style="display:inline"></div></td>  
                                                                            </tr>
                                                                            <tr>
                                                                                
                                                                            </tr>
                                                                            <tr>
                                                                               <td class="letra_empleado">Fecha de Nacimiento</td>
                                                                               <td><div id="date_birth"></div></td>
                                                                               <td class="letra_empleado">Documento de Identidad</td>
                                                                               <td><div id="identity_card"></div></td>
                                                                            </tr>

                                                                             <tr>
                                                                               <td class="letra_empleado">Nacionalidad</td>
                                                                               <td><div id="nationality"></div></td>
                                                                               <td class="letra_empleado">Estado Civil</td>
                                                                               <td><div id="maritalstatus"></div></td>

                                                                            </tr>
                                                                            <tr>
                                                                               <td class="letra_empleado">Correo Personal</td>
                                                                               <td><div id="email_personal"></div></td>
                                                                               <td class="letra_empleado">Correo Corporativo</td>
                                                                               <td><div id="email_company"></div></td>
                                                                            </tr>
                                                                            <tr>
                                                                               <td class="letra_empleado">Teléfono De Habitación</td>
                                                                               <td><div id="homephone"></div></td>
                                                                               <td class="letra_empleado">Extensión de Oficina</td>
                                                                               <td><div id="extension_numeric"></div></td>  
                                                                            </tr>

                                                                            <tr>
                                                                                <td class="letra_empleado" colspan="3">Apartamento, Suite, Unidad, Edificio, Piso, Etc</td>
                                                                                <td colspan="2"><div id="address_line_1"></div></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="letra_empleado" colspan="3">Dirección de Calle, P.O Box, Nombre de la Compañía, C/O</td>
                                                                                <td colspan="2"><div id="address_line_2"></div></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="letra_empleado" colspan="3">Códigos Postal</td>
                                                                                <td colspan="2"><div id="zip"></div></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="letra_empleado" colspan="3">País</td>
                                                                                <td colspan="2"><div id="country"></div></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="letra_empleado" colspan="3">Estado/Provincia/Región</td>
                                                                                <td colspan="2"><div id="state"></div></td>
                                                                            </tr>

                                                                            <tr>
                                                                                <td class="letra_empleado" colspan="3">Ciudad</td>
                                                                                <td colspan="2"><div id="city"></div></td>
                                                                            </tr>
                                                               </tbody>
                                                           </table>
                                                                   </div>
                                                       </div>
                                                    </div>
                                                 </div>  
                                               </div>
                                            </div>
                                         </div>
                                     </div> 
                                  </div>
                               </div>
                            </div>
                         </div> 
                      </div>
                   </div>
                </div>
            </div>
        </div>   
    