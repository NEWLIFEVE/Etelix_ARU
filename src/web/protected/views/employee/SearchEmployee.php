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
                                    <th>Status</th>
                                   
                                 </tr>
                              </thead>
                              <tbody>
                                  
                                   <?php foreach ($search as $value) {?>
                                  <?php if (is_null($value->image_rute)){$photoemployee="themes/metronic/img/profile/profile.jpg";} else {$photoemployee=$value->image_rute;} ?>
                              <tr>
                                  <td><img class="sizephotoemployee" src="/<?php echo $photoemployee; ?>"></td>
                                  <td><?php echo $value->first_name;?></td>
                                  <td><?php echo $value->last_name;?></td>
                                  <?php $status=EventEmployee::getSearchStatus($value->id); ?> 
                                  <?php $estilo=EventEmployee::getStilo($status['id_type_event']); ?>
                                  <td><span class="label label-sm <?php echo $estilo; ?>"><?php echo $status['name']; ?></span></td>
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
         
         
         
      <?php //  foreach ($searchemployee as $value) {
//             echo $value->date;
//             echo $value->id_type_event;
//         } ?>

         
    