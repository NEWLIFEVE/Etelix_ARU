<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
      <div class="row">
            <div class="col-md-12">
               <!-- BEGIN PAGE TITLE & BREADCRUMB-->
               <h3 class="page-title">
                  Información Personal <!--<small>statistics and more</small>-->
               </h3>
               <ul class="page-breadcrumb breadcrumb">
                  <li>
                     <i class="icon-home"></i>
                     <a href="index.html">Inicio</a> 
                     <i class="icon-angle-right"></i>
                  </li>
                  <li><a href="/employee/">Datos Empleado</a></li>
                  <li class="pull-right">
                     <div id="dashboard-report-range" class="dashboard-date-range tooltips" data-placement="top" data-original-title="Change dashboard date range">
                        <i class="icon-calendar"></i>
                        <span></span>
                        <i class="icon-angle-down"></i>
                     </div>
                  </li>
               </ul>
               <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
         </div>

      
      <div class="tab-pane" id="tab_1_3">
                        <div class="row profile-account">
                           <div class="col-md-3">
                              <ul class="ver-inline-menu tabbable margin-bottom-10">
                                 <li class="active">
                                    <a data-toggle="tab" href="#tab_1-1">
                                    <i class="icon-cog"></i> 
                                    Datos Básico
                                    </a> 
                                    <span class="after"></span>                                    
                                 </li>
                                 <li ><a data-toggle="tab" href="#tab_5-6"><i class="icon-picture"></i>Dirección de Habitación</a></li>
                                 <li ><a data-toggle="tab" href="#tab_6-7"><i class="icon-picture"></i>Contactos</a></li>
                                 <li ><a data-toggle="tab" href="#tab_7-8"><i class="icon-picture"></i>Sucursal</a></li>
<!--                             <li ><a data-toggle="tab" href="#tab_2-2"><i class="icon-picture"></i> Change Avatar</a></li>
                                 <li ><a data-toggle="tab" href="#tab_3-3"><i class="icon-lock"></i> Change Password</a></li>
                                 <li ><a data-toggle="tab" href="#tab_4-4"><i class="icon-eye-open"></i> Privacity Settings</a></li>-->
                              </ul>
                           </div>
                           <div class="col-md-9">
                              <div class="tab-content">
                                 <div id="tab_1-1" class="tab-pane active">
                                    <form role="form" action="#">
                                       <div class="form-group">
                                          <label class="control-label">Nombre</label>
                                          <input type="text" class="form-control" disabled="true" value="<?php echo $model->first_name;?>" />
                                           
                                       </div>
                                       <div class="form-group">
                                          <label class="control-label">Apellido</label>
                                          <input type="text" value="<?php echo $model->last_name;?>" disabled="true" class="form-control" />
                                       </div>
                                       <div class="form-group">
                                          <label class="control-label">Cedula de Identidad</label>
                                          <input type="text" value="<?php echo $model->identity_card;?>" disabled="true" class="form-control" />
                                       </div>
                                       <div class="form-group">
                                          <label class="control-label">Fecha de Nacimiento</label>
                                          <input type="text" value="<?php echo $model->date_birth;?>" disabled="true" class="form-control" />
                                       </div>
                                       <div class="form-group">
                                          <label class="control-label">Nacionalidad</label>
                                          <input type="text" value="<?php echo $model->nationality;?>" class="form-control" />
                                       </div>
<!--                                       <div class="form-group">
                                          <label class="control-label">About</label>
                                          <textarea class="form-control" rows="3" placeholder="We are KeenThemes!!!"></textarea>
                                       </div>-->
<!--                                       <div class="form-group">
                                          <label class="control-label">Website Url</label>
                                          <input type="text" placeholder="http://www.mywebsite.com" class="form-control" />
                                       </div>-->
<!--                                       <div class="margiv-top-10">
                                          <a href="#" class="btn green">Save Changes</a>
                                          <a href="#" class="btn default">Cancel</a>
                                       </div>-->
                                    </form>
                                 </div>
                                  
                                  <div id="tab_5-6" class="tab-pane">
                                    <form role="form" action="#">
                                       <div class="form-group">
                                          <label class="control-label">País</label>
                                          <input type="text" class="form-control" disabled="true" value="<?php echo $model->country;?>" />
                                           
                                       </div>
                                       <div class="form-group">
                                          <label class="control-label">Estado</label>
                                          <input type="text" value="<?php echo $model->state;?>" disabled="true" class="form-control" />
                                       </div>
                                       <div class="form-group">
                                          <label class="control-label">Cuidad</label>
                                          <input type="text" value="<?php echo $model->town;?>" disabled="true" class="form-control" />
                                       </div>
                                       <div class="form-group">
                                          <label class="control-label">Calle/Avenida/</label>
                                          <input type="text" value="<?php echo $model->address_room;?>" disabled="true" class="form-control" />
                                       </div>

                                    </form>
                                 </div>
                                  
                                  
                                  
                                    <div id="tab_6-7" class="tab-pane">
                                    <form role="form" action="#">
                                       <div class="form-group">
                                          <label class="control-label">Teléfono</label>
                                          <input type="text" class="form-control" disabled="true" value="<?php echo $model->cellphone;?>" />
                                           
                                       </div>
                                       <div class="form-group">
                                          <label class="control-label">Teléfono de Habitación</label>
                                          <input type="text" value="<?php echo $model->home_phone;?>" disabled="true" class="form-control" />
                                       </div>
                                        <div class="form-group">
                                          <label class="control-label">Extension de Oficina</label>
                                          <input type="text" value="<?php echo $model->extension_numeric;?>" disabled="true" class="form-control" />
                                       </div>
                                       <div class="form-group">
                                          <label class="control-label">Correo Personal</label>
                                          <input type="text" value="<?php echo $model->email_personal;?>" disabled="true" class="form-control" />
                                       </div>
                                       <div class="form-group">
                                          <label class="control-label">Correo Corporativo</label>
                                          <input type="text" value="<?php echo $model->email_company;?>" disabled="true" class="form-control" />
                                       </div>
                                        
                                         <div class="form-group">
                                          <label class="control-label">Skype</label>
                                          <input type="text" value="<?php echo $model->skype;?>" disabled="true" class="form-control" />
                                       </div>

                                    </form>
                                 </div>
                                  
                                  
                                    <div id="tab_7-8" class="tab-pane">
                                    <form role="form" action="#">
                                       <div class="form-group">
                                          <label class="control-label">Sucursal</label>
                                          <input type="text" class="form-control" disabled="true" value="" />
                                           
                                       </div>
                                       <div class="form-group">
                                          <label class="control-label">Gerencia</label>
                                          <input type="text" value="" disabled="true" class="form-control" />
                                       </div>
                                        <div class="form-group">
                                          <label class="control-label">Departamento</label>
                                          <input type="text" value="" disabled="true" class="form-control" />
                                       </div>
                                       <div class="form-group">
                                          <label class="control-label">Oficina</label>
                                          <input type="text" value="" disabled="true" class="form-control" />
                                       </div>
                                     

                                    </form>
                                 </div>
                                  
                                  
                                 <div id="tab_2-2" class="tab-pane">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
                                    <form action="#" role="form">
                                       <div class="form-group">
                                          <div class="thumbnail" style="width: 310px;">
                                             <img src="http://www.placehold.it/310x170/EFEFEF/AAAAAA&amp;text=no+image" alt="">
                                          </div>
                                          <div class="margin-top-10 fileupload fileupload-new" data-provides="fileupload">
                                             <div class="input-group input-group-fixed">
                                                <span class="input-group-btn">
                                                <span class="uneditable-input">
                                                <i class="icon-file fileupload-exists"></i> 
                                                <span class="fileupload-preview"></span>
                                                </span>
                                                </span>
                                                <span class="btn default btn-file">
                                                <span class="fileupload-new"><i class="icon-paper-clip"></i> Select file</span>
                                                <span class="fileupload-exists"><i class="icon-undo"></i> Change</span>
                                                <input type="file" class="default" />
                                                </span>
                                                <a href="#" class="btn red fileupload-exists" data-dismiss="fileupload"><i class="icon-trash"></i> Remove</a>
                                             </div>
                                          </div>
                                          <span class="label label-danger">NOTE!</span>
                                          <span>
                                          Attached image thumbnail is
                                          supported in Latest Firefox, Chrome, Opera, 
                                          Safari and Internet Explorer 10 only
                                          </span>
                                       </div>
                                       <div class="margin-top-10">
                                          <a href="#" class="btn green">Submit</a>
                                          <a href="#" class="btn default">Cancel</a>
                                       </div>
                                    </form>
                                 </div>
                                 <div id="tab_3-3" class="tab-pane">
                                    <form action="#">
                                       <div class="form-group">
                                          <label class="control-label">Current Password</label>
                                          <input type="password" class="form-control" />
                                       </div>
                                       <div class="form-group">
                                          <label class="control-label">New Password</label>
                                          <input type="password" class="form-control" />
                                       </div>
                                       <div class="form-group">
                                          <label class="control-label">Re-type New Password</label>
                                          <input type="password" class="form-control" />
                                       </div>
                                       <div class="margin-top-10">
                                          <a href="#" class="btn green">Change Password</a>
                                          <a href="#" class="btn default">Cancel</a>
                                       </div>
                                    </form>
                                 </div>
                                 <div id="tab_4-4" class="tab-pane">
                                    <form action="#" class="">
                                       <table class="table table-bordered table-striped">
                                          <tr>
                                             <td>
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus..
                                             </td>
                                             <td>
                                                <label class="uniform-inline">
                                                <input type="radio" name="optionsRadios1" value="option1" />
                                                Yes
                                                </label>
                                                <label class="uniform-inline">
                                                <input type="radio" name="optionsRadios1" value="option2" checked />
                                                No
                                                </label>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>
                                                Enim eiusmod high life accusamus terry richardson ad squid wolf moon
                                             </td>
                                             <td>
                                                <label class="uniform-inline">
                                                <input type="checkbox" value="" /> Yes
                                                </label>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>
                                                Enim eiusmod high life accusamus terry richardson ad squid wolf moon
                                             </td>
                                             <td>
                                                <label class="uniform-inline">
                                                <input type="checkbox" value="" /> Yes
                                                </label>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>
                                                Enim eiusmod high life accusamus terry richardson ad squid wolf moon
                                             </td>
                                             <td>
                                                <label class="uniform-inline">
                                                <input type="checkbox" value="" /> Yes
                                                </label>
                                             </td>
                                          </tr>
                                       </table>
                                       <!--end profile-settings-->
                                       <div class="margin-top-10">
                                          <a href="#" class="btn green">Save Changes</a>
                                          <a href="#" class="btn default">Cancel</a>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                           </div>
                           <!--end col-md-9-->                                   
                        </div>
                     </div>

