  <div class="row">
            <div class="col-md-12">
               <!-- BEGIN PAGE TITLE & BREADCRUMB-->
               <h3 class="page-title">
                  Administración de Roles
               </h3>
               <ul class="page-breadcrumb breadcrumb">
                  <li>
                     <i class="icon-home"></i>
                     <a href="#">Inicio</a> 
                     <i class="icon-angle-right"></i>
                  </li>
                  <li>
                     <a href="#">Administrar Roles</a>
                     <i class="icon-angle-down"></i>
                  </li>
                 
               </ul>
               <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
         </div>

<a href="/rol/">Crear Nuevo Rol</a>

  <div class="portlet box blue ">
                  <div class="portlet-title">
                     <div class="caption">
                        <i class="icon-reorder"></i> Roles
                     </div>
                     <div class="tools">
                        <a href="" class="collapse"></a>
                        <a href="" class="reload"></a>
                        <a href="" class="remove"></a>
                     </div>
                  </div>
                  <div class="portlet-body form">
                      <?php foreach ($rol as $value){?>
                           <?php //echo $value->id;?>
                      <div><i class="icon-user"></i>  <?php echo $value->name_rol;?><br></div>
                      <div><a href="/Employee/AdminPermit?idRol=<?php echo $value->id; ?>">Editar Permisos</a></div>

                        <?php } ?>
                     
                  </div>
               </div>


