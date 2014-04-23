

<!-- END BEGIN STYLE CUSTOMIZER -->            
         <!-- BEGIN PAGE HEADER-->
         <div class="row">
            <div class="col-md-12">
               <!-- BEGIN PAGE TITLE & BREADCRUMB-->
               <h3 class="page-title">
                  Perfil
               </h3>
               <ul class="page-breadcrumb breadcrumb">
<!--                  <li class="btn-group">
                     <button type="button" class="btn blue dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
                     <span>Actions</span> <i class="icon-angle-down"></i>
                     </button>
                     <ul class="dropdown-menu pull-right" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                     </ul>
                  </li>-->
                  <li>
                     <i class="icon-home"></i>
                     <a href="index.html">Inicio</a> 
                     <i class="icon-angle-right"></i>
                  </li>
                  <li>
                     <a href="#">Empleado</a>
                     <i class="icon-angle-right"></i>
                  </li>
                  
               </ul>
               <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
         </div>
         <!-- END PAGE HEADER-->
         <!-- BEGIN PAGE CONTENT-->
         <div class="row profile">
            <div class="col-md-12">
               <!--BEGIN TABS-->
               <div class="tabbable tabbable-custom tabbable-full-width">
                  <ul class="nav nav-tabs">
                     <li class="active"><a href="#tab_1_1" data-toggle="tab">Datos del Perfil</a></li>
                     <li><a href="#tab_1_3" data-toggle="tab">Modificar Perfil</a></li>
<!--                     <li><a href="#tab_1_4" data-toggle="tab">Dirección de Habitación</a></li>-->
                     
                  </ul>
                  <div class="tab-content">
                     <div class="tab-pane active" id="tab_1_1">
                        <div class="row">
                           <div class="col-md-3">
                              <ul class="list-unstyled profile-nav">
                                 <li><img src="/themes/metronic/img/profile/profile-img.png" class="img-responsive" alt="" /> 
                                      <a data-toggle="modal" href="#responsive">Cambiar Imagen</a>
                                    
                                 </li>
<!--                                 <li><a href="#">Projects</a></li>
                                 <li><a href="#">Messages <span>3</span></a></li>
                                 <li><a href="#">Friends</a></li>
                                 <li><a href="#">Settings</a></li>-->
                              </ul>
                           </div>
                           <div class="col-md-9">
                              <div class="row">
                                 <div class="col-md-8 profile-info">
                                    <h1><?php echo $model->first_name;?> <?php echo $model->last_name;?></h1>
                              
                                 
                                    <ul class="list-inline">
                                       <li><i class="icon-map-marker"></i><?php echo $model->idCountry->name;?></li>
                                       <li><i class="icon-calendar"></i><?php echo $model->date_birth;?></li>
                                       <li><i class="icon-briefcase"></i> Design</li>
                                       <li><i class="icon-envelope"></i><?php echo $model->email_personal;?></li>
                                        <li><i class="icon-skype"></i><?php echo $model->skype;?></li>
                                       <!--<li><i class="icon-heart"></i> BASE Jumping</li>-->
                                    </ul>
                                 </div>
                                 <!--end col-md-8-->
<!--                                 <div class="col-md-4">
                                    <div class="portlet sale-summary">
                                       <div class="portlet-title">
                                          <div class="caption">Sales Summary</div>
                                          <div class="tools">
                                             <a class="reload" href="javascript:;"></a>
                                          </div>
                                       </div>
                                       <div class="portlet-body">
                                          <ul class="list-unstyled">
                                             <li>
                                                <span class="sale-info">TODAY SOLD <i class="icon-img-up"></i></span> 
                                                <span class="sale-num">23</span>
                                             </li>
                                             <li>
                                                <span class="sale-info">WEEKLY SALES <i class="icon-img-down"></i></span> 
                                                <span class="sale-num">87</span>
                                             </li>
                                             <li>
                                                <span class="sale-info">TOTAL SOLD</span> 
                                                <span class="sale-num">2377</span>
                                             </li>
                                             <li>
                                                <span class="sale-info">EARNS</span> 
                                                <span class="sale-num">$37.990</span>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>-->
                                 <!--end col-md-4-->
                              </div>
                              <!--end row-->
                              <div class="tabbable tabbable-custom tabbable-custom-profile">
                                 <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tab_1_11" data-toggle="tab">Datos Básicos</a></li>
                                    <li ><a href="#tab_1_22" data-toggle="tab">Dirección de Habitación</a></li>
                                 </ul>
                                 <div class="tab-content">
                                    <div class="tab-pane active" id="tab_1_11">
                                       <div class="portlet-body">
                                          <table class="table table-striped table-bordered table-advance table-hover">
<!--                                             <thead>
                                                <tr>
                                                   <th><i class="icon-briefcase"></i> Company</th>
                                                   <th class="hidden-xs"><i class="icon-question-sign"></i> Descrition</th>
                                                   <th><i class="icon-bookmark"></i> Amount</th>
                                                   <th></th>
                                                </tr>
                                             </thead>-->
                                             <tbody>
                                                <tr>
                                                    <td class="letra_empleado">Primer Nombre</td>
                                                   <td><?php echo $model->first_name;?></td>
                                                   <td class="letra_empleado">Segundo Nombre</td>
                                                   <td></td>
                                                </tr>
                                                <tr>
                                                   <td class="letra_empleado">Primer Apellido</td>
                                                   <td><?php echo $model->last_name;?></td>
                                                   <td class="letra_empleado">Segundo Apellido</td>
                                                   <td></td>
                                                  
                                                </tr>
                                                <tr>
                                                   <td class="letra_empleado">Fecha de Nacimiento</td>
                                                   <td><?php echo $model->date_birth;?></td>
                                                   <td class="letra_empleado">Documento de Identidad</td>
                                                   <td><?php echo $model->identity_card;?></td>
                                                </tr>
                                                
                                                 <tr>
                                                   <td class="letra_empleado">Nacionalidad</td>
                                                   <td><?php echo $model->nationality;?></td>
                                                   <td class="letra_empleado">Estado Civil</td>
                                                   <td><?php echo $model->idMaritalStatus->name;?></td>
                                                </tr>
                                                <tr>
                                                   <td class="letra_empleado">Correo Personal</td>
                                                   <td><?php echo $model->email_personal;?></td>
                                                   <td class="letra_empleado">Correo Corporativo</td>
                                                   <td><?php echo $model->email_company;?></td>
                                                </tr>
                                                
                                                 <tr>
                                                   <td class="letra_empleado">Skype</td>
                                                   <td><?php echo $model->skype;?></td>
                                                   <td></td>
                                                   <td></td>
                                                </tr>
                                                
                                                <tr>
                                                   <td class="letra_empleado">Teléfono Celular</td>
                                                   <td><?php echo $model->cellphone;?></td>
                                                   <td class="letra_empleado">Teléfono De Habitación</td>
                                                   <td><?php echo $model->home_phone;?></td>
                                                </tr>
                                                <tr>
                                                   <td class="letra_empleado">Extensión de Oficina</td>
                                                   <td><?php echo $model->extension_numeric;?></td>
                                                   <td></td>
                                                   <td></td>
                                                </tr>
                                               
                                             </tbody>
                                          </table>
                                       </div>
                                    </div>
                                    <!--tab-pane-->
                                    <div class="tab-pane" id="tab_1_22">
                                       <div class="tab-pane active" id="tab_1_1_1">
                                          <div class="scroller" data-height="290px" data-always-visible="1" data-rail-visible1="1">
                                             <table class="table table-striped table-bordered table-advance table-hover">
<!--                                             <thead>
                                                <tr>
                                                   <th><i class="icon-briefcase"></i> Company</th>
                                                   <th class="hidden-xs"><i class="icon-question-sign"></i> Descrition</th>
                                                   <th><i class="icon-bookmark"></i> Amount</th>
                                                   <th></th>
                                                </tr>
                                             </thead>-->
                                             <tbody>
                                                <tr>
                                                    <td class="letra_empleado">Pais</td>
                                                   <td><?php echo $model->idCountry->name;?></td>
                                                   <td class="letra_empleado">Estado</td>
                                                   <td><?php echo $model->idStates->name;?></td>
                                                </tr>
                                                <tr>
                                                   <td class="letra_empleado">Cuidad</td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                  
                                                </tr>
                                                <tr>
                                                   <td class="letra_empleado">Calle/Avenida</td>
                                                   <td><?php echo $model->address_room;?></td>
                                                   <td></td>
                                                   <td></td>
                                                </tr>
                                                
                                                 
                                               
                                             </tbody>
                                          </table>
                                          </div>
                                       </div>
                                    </div>
                                    <!--tab-pane-->
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--tab_1_2-->
                     <div class="tab-pane" id="tab_1_3">
                        <div class="row profile-account">
                           <div class="col-md-3">
                              <ul class="ver-inline-menu tabbable margin-bottom-10">
                                 <li class="active">
                                    <a data-toggle="tab" href="#tab_1-1">
                                    <i class="icon-cog"></i> 
                                    Datos Básicos
                                    </a> 
                                    <span class="after"></span>                                    
                                 </li>
                                 <li ><a data-toggle="tab" href="#tab_2-2"><i class="icon-picture"></i>Dirección de Habitación</a></li>
<!--                                 <li ><a data-toggle="tab" href="#tab_2-2"><i class="icon-picture"></i>Cambiar Imagen de Perfil</a></li>-->
                                
                               
                              </ul>
                           </div>
                           <div class="col-md-9">
                              <div class="tab-content">
                                 <div id="tab_1-1" class="tab-pane active">
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
                                       <div class="form-group">
                                          <label class="control-label">Primer Nombre</label>
                                           <?php echo $form->textField($model,'first_name', array('class'=>'form-control', 'value'=>$model->first_name)); ?>
                                       </div>
                                       <div class="form-group">
                                          <label class="control-label">Segundo Nombre</label>
                                         <?php //echo $form->textField($model,'last_name', array('class'=>'form-control', 'value'=>$model->last_name)); ?>
                                       </div>
                                     
                                     <div class="form-group">
                                          <label class="control-label">Primer Apellido</label>
                                         <?php echo $form->textField($model,'last_name', array('class'=>'form-control', 'value'=>$model->last_name)); ?>
                                       </div>
                                      <div class="form-group">
                                          <label class="control-label">Segundo Apellido</label>
                                         <?php //echo $form->textField($model,'last_name', array('class'=>'form-control', 'value'=>$model->last_name)); ?>
                                       </div>
                                       <div class="form-group">
                                          <label class="control-label">Fecha de Nacimiento</label>
                                          <?php echo $form->textField($model,'date_birth', array('class'=>'form-control', 'value'=>$model->date_birth)); ?>
                                       </div>
                                       <div class="form-group">
                                          <label class="control-label">Documento de Identidad</label>
                                          <?php echo $form->textField($model,'identity_card', array('class'=>'form-control', 'value'=>$model->identity_card)); ?>
                                       </div>
                                     <div class="form-group">
                                          <label class="control-label">Nacionalidad</label>
                                          <?php echo $form->textField($model,'nationality', array('class'=>'form-control', 'value'=>$model->nationality)); ?>
                                       </div>
                                     <div class="form-group">
                                          <label class="control-label">Estado Civil</label>
                                          <?php echo $form->textField($model,'id_marital_status', array('class'=>'form-control', 'value'=>$model->idMaritalStatus->name)); ?>
                                       </div>
                                     <div class="form-group">
                                          <label class="control-label">Correo Personal</label>
                                          <?php echo $form->textField($model,'email_personal', array('class'=>'form-control', 'value'=>$model->email_personal)); ?>
                                       </div>
                                     <div class="form-group">
                                          <label class="control-label">Correo Corporativo</label>
                                          <?php echo $form->textField($model,'email_company', array('class'=>'form-control', 'value'=>$model->email_company)); ?>
                                       </div>
                                     <div class="form-group">
                                          <label class="control-label">Skype</label>
                                          <?php echo $form->textField($model,'skype', array('class'=>'form-control', 'value'=>$model->skype)); ?>
                                       </div>
                                     <div class="form-group">
                                          <label class="control-label">Teléfono Celular</label>
                                          <?php echo $form->textField($model,'cellphone', array('class'=>'form-control', 'value'=>$model->cellphone)); ?>
                                       </div>
                                     <div class="form-group">
                                          <label class="control-label">Teléfono de Habitación</label>
                                          <?php echo $form->textField($model,'home_phone', array('class'=>'form-control', 'value'=>$model->home_phone)); ?>
                                       </div>
                                     <div class="form-group">
                                          <label class="control-label">Extensión de Oficina</label>
                                          <?php echo $form->textField($model,'extension_numeric', array('class'=>'form-control', 'value'=>$model->extension_numeric)); ?>
                                       </div>
                                      
                                       <div class="margiv-top-10">
                                          <a href="#" class="btn green">Guardar</a>
<!--                                          <a href="#" class="btn default">Cancelar</a>-->
                                       </div>
                                      <?php $this->endWidget(); ?>
                                 </div>
                                 <div id="tab_2-2" class="tab-pane">
                                       <div class="form-group">
                                          <label class="control-label">País</label>
                                          <?php echo $form->textField($model,'id_country', array('class'=>'form-control', 'value'=> $model->idCountry->name)); ?>
                                       </div>
                                     <div class="form-group">
                                          <label class="control-label">Estado</label>
                                          <?php echo $form->textField($model,'id_states', array('class'=>'form-control', 'value'=> $model->idStates->name)); ?>
                                       </div>
                                     <div class="form-group">
                                          <label class="control-label">Cuidad</label>
                                          <?php //echo $form->textField($model,'extension_numeric', array('class'=>'form-control', 'value'=>$model->extension_numeric)); ?>
                                       </div>
                                     <div class="form-group">
                                          <label class="control-label">Calle/Avenida</label>
                                          <?php echo $form->textField($model,'address_room', array('class'=>'form-control', 'value'=>$model->address_room)); ?>
                                       </div>
                                   
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
                     <!--end tab-pane-->
                     <div class="tab-pane" id="tab_1_4">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="add-portfolio">
                                 <span>502 Items sold this week</span>
                                 <a href="#" class="btn icn-only green">Add a new Project <i class="m-icon-swapright m-icon-white"></i></a>                          
                              </div>
                           </div>
                        </div>
                        <!--end add-portfolio-->
                        <div class="row portfolio-block">
                           <div class="col-md-5">
                              <div class="portfolio-text">
                                 <img src="assets/img/profile/portfolio/logo_metronic.jpg" alt="" />
                                 <div class="portfolio-text-info">
                                    <h4>Metronic - Responsive Template</h4>
                                    <p>Lorem ipsum dolor sit consectetuer adipiscing elit.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-5">
                              <div class="portfolio-info">
                                 Today Sold
                                 <span>187</span>
                              </div>
                              <div class="portfolio-info">
                                 Total Sold
                                 <span>1789</span>
                              </div>
                              <div class="portfolio-info">
                                 Earns
                                 <span>$37.240</span>
                              </div>
                           </div>
                           <div class="col-md-2">
                              <div class="portfolio-btn">
                                 <a href="#" class="btn bigicn-only"><span>Manage</span></a>                      
                              </div>
                           </div>
                        </div>
                        <!--end row-->
                        <div class="row portfolio-block">
                           <div class="col-md-5 portfolio-text">
                              <img src="assets/img/profile/portfolio/logo_azteca.jpg" alt="" />
                              <div class="portfolio-text-info">
                                 <h4>Metronic - Responsive Template</h4>
                                 <p>Lorem ipsum dolor sit consectetuer adipiscing elit.</p>
                              </div>
                           </div>
                           <div class="col-md-5">
                              <div class="portfolio-info">
                                 Today Sold
                                 <span>24</span>
                              </div>
                              <div class="portfolio-info">
                                 Total Sold
                                 <span>660</span>
                              </div>
                              <div class="portfolio-info">
                                 Earns
                                 <span>$7.060</span>
                              </div>
                           </div>
                           <div class="col-md-2 portfolio-btn">
                              <a href="#" class="btn bigicn-only"><span>Manage</span></a>                      
                           </div>
                        </div>
                        <!--end row-->
                        <div class="row portfolio-block">
                           <div class="col-md-5 portfolio-text">
                              <img src="assets/img/profile/portfolio/logo_conquer.jpg" alt="" />
                              <div class="portfolio-text-info">
                                 <h4>Metronic - Responsive Template</h4>
                                 <p>Lorem ipsum dolor sit consectetuer adipiscing elit.</p>
                              </div>
                           </div>
                           <div class="col-md-5" style="overflow:hidden;">
                              <div class="portfolio-info">
                                 Today Sold
                                 <span>24</span>
                              </div>
                              <div class="portfolio-info">
                                 Total Sold
                                 <span>975</span>
                              </div>
                              <div class="portfolio-info">
                                 Earns
                                 <span>$21.700</span>
                              </div>
                           </div>
                           <div class="col-md-2 portfolio-btn">
                              <a href="#" class="btn bigicn-only"><span>Manage</span></a>                      
                           </div>
                        </div>
                        <!--end row-->
                     </div>
                     <!--end tab-pane-->
                     <div class="tab-pane" id="tab_1_6">
                        <div class="row">
                           <div class="col-md-3">
                              <ul class="ver-inline-menu tabbable margin-bottom-10">
                                 <li class="active">
                                    <a data-toggle="tab" href="#tab_1">
                                    <i class="icon-briefcase"></i> 
                                    General Questions
                                    </a> 
                                    <span class="after"></span>                                    
                                 </li>
                                 <li><a data-toggle="tab" href="#tab_2"><i class="icon-group"></i> Membership</a></li>
                                 <li><a data-toggle="tab" href="#tab_3"><i class="icon-leaf"></i> Terms Of Service</a></li>
                                 <li><a data-toggle="tab" href="#tab_1"><i class="icon-info-sign"></i> License Terms</a></li>
                                 <li><a data-toggle="tab" href="#tab_2"><i class="icon-tint"></i> Payment Rules</a></li>
                                 <li><a data-toggle="tab" href="#tab_3"><i class="icon-plus"></i> Other Questions</a></li>
                              </ul>
                           </div>
                           <div class="col-md-9">
                              <div class="tab-content">
                                 <div id="tab_1" class="tab-pane active">
                                    <div id="accordion1" class="panel-group">
                                       <div class="panel panel-default">
                                          <div class="panel-heading">
                                             <h4 class="panel-title">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_1">
                                                1. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ?
                                                </a>
                                             </h4>
                                          </div>
                                          <div id="accordion1_1" class="panel-collapse collapse  in">
                                             <div class="panel-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                             </div>
                                          </div>
                                       </div>
                                       <div class="panel panel-default">
                                          <div class="panel-heading">
                                             <h4 class="panel-title">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_2">
                                                2. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ?
                                                </a>
                                             </h4>
                                          </div>
                                          <div id="accordion1_2" class="panel-collapse collapse">
                                             <div class="panel-body">
                                                Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch   et.
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                             </div>
                                          </div>
                                       </div>
                                       <div class="panel panel-success">
                                          <div class="panel-heading">
                                             <h4 class="panel-title">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_3">
                                                3. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor ?
                                                </a>
                                             </h4>
                                          </div>
                                          <div id="accordion1_3" class="panel-collapse collapse">
                                             <div class="panel-body">
                                                Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch   et.
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                             </div>
                                          </div>
                                       </div>
                                       <div class="panel panel-warning">
                                          <div class="panel-heading">
                                             <h4 class="panel-title">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_4">
                                                4. Wolf moon officia aute, non cupidatat skateboard dolor brunch ?
                                                </a>
                                             </h4>
                                          </div>
                                          <div id="accordion1_4" class="panel-collapse collapse">
                                             <div class="panel-body">
                                                3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                             </div>
                                          </div>
                                       </div>
                                       <div class="panel panel-danger">
                                          <div class="panel-heading">
                                             <h4 class="panel-title">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_5">
                                                5. Leggings occaecat craft beer farm-to-table, raw denim aesthetic ?
                                                </a>
                                             </h4>
                                          </div>
                                          <div id="accordion1_5" class="panel-collapse collapse">
                                             <div class="panel-body">
                                                3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
                                             </div>
                                          </div>
                                       </div>
                                       <div class="panel panel-default">
                                          <div class="panel-heading">
                                             <h4 class="panel-title">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_6">
                                                6. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth ?
                                                </a>
                                             </h4>
                                          </div>
                                          <div id="accordion1_6" class="panel-collapse collapse">
                                             <div class="panel-body">
                                                3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
                                             </div>
                                          </div>
                                       </div>
                                       <div class="panel panel-default">
                                          <div class="panel-heading">
                                             <h4 class="panel-title">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_7">
                                                7. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft ?
                                                </a>
                                             </h4>
                                          </div>
                                          <div id="accordion1_7" class="panel-collapse collapse">
                                             <div class="panel-body">
                                                3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div id="tab_2" class="tab-pane">
                                    <div id="accordion2" class="panel-group">
                                       <div class="panel panel-warning">
                                          <div class="panel-heading">
                                             <h4 class="panel-title">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_1">
                                                1. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ?
                                                </a>
                                             </h4>
                                          </div>
                                          <div id="accordion2_1" class="panel-collapse collapse  in">
                                             <div class="panel-body">
                                                <p>
                                                   Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                </p>
                                                <p>
                                                   Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                </p>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="panel panel-danger">
                                          <div class="panel-heading">
                                             <h4 class="panel-title">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_2">
                                                2. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ?
                                                </a>
                                             </h4>
                                          </div>
                                          <div id="accordion2_2" class="panel-collapse collapse">
                                             <div class="panel-body">
                                                Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch   et.
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                             </div>
                                          </div>
                                       </div>
                                       <div class="panel panel-success">
                                          <div class="panel-heading">
                                             <h4 class="panel-title">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_3">
                                                3. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor ?
                                                </a>
                                             </h4>
                                          </div>
                                          <div id="accordion2_3" class="panel-collapse collapse">
                                             <div class="panel-body">
                                                Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch   et.
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                             </div>
                                          </div>
                                       </div>
                                       <div class="panel panel-default">
                                          <div class="panel-heading">
                                             <h4 class="panel-title">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_4">
                                                4. Wolf moon officia aute, non cupidatat skateboard dolor brunch ?
                                                </a>
                                             </h4>
                                          </div>
                                          <div id="accordion2_4" class="panel-collapse collapse">
                                             <div class="panel-body">
                                                3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                             </div>
                                          </div>
                                       </div>
                                       <div class="panel panel-default">
                                          <div class="panel-heading">
                                             <h4 class="panel-title">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_5">
                                                5. Leggings occaecat craft beer farm-to-table, raw denim aesthetic ?
                                                </a>
                                             </h4>
                                          </div>
                                          <div id="accordion2_5" class="panel-collapse collapse">
                                             <div class="panel-body">
                                                3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
                                             </div>
                                          </div>
                                       </div>
                                       <div class="panel panel-default">
                                          <div class="panel-heading">
                                             <h4 class="panel-title">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_6">
                                                6. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth ?
                                                </a>
                                             </h4>
                                          </div>
                                          <div id="accordion2_6" class="panel-collapse collapse">
                                             <div class="panel-body">
                                                3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
                                             </div>
                                          </div>
                                       </div>
                                       <div class="panel panel-default">
                                          <div class="panel-heading">
                                             <h4 class="panel-title">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_7">
                                                7. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft ?
                                                </a>
                                             </h4>
                                          </div>
                                          <div id="accordion2_7" class="panel-collapse collapse">
                                             <div class="panel-body">
                                                3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div id="tab_3" class="tab-pane">
                                    <div id="accordion3" class="panel-group">
                                       <div class="panel panel-danger">
                                          <div class="panel-heading">
                                             <h4 class="panel-title">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_1">
                                                1. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ?
                                                </a>
                                             </h4>
                                          </div>
                                          <div id="accordion3_1" class="panel-collapse collapse  in">
                                             <div class="panel-body">
                                                <p>
                                                   Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. 
                                                </p>
                                                <p>
                                                   Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. 
                                                </p>
                                                <p>
                                                   Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                </p>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="panel panel-success">
                                          <div class="panel-heading">
                                             <h4 class="panel-title">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_2">
                                                2. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ?
                                                </a>
                                             </h4>
                                          </div>
                                          <div id="accordion3_2" class="panel-collapse collapse">
                                             <div class="panel-body">
                                                Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch   et.
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                             </div>
                                          </div>
                                       </div>
                                       <div class="panel panel-default">
                                          <div class="panel-heading">
                                             <h4 class="panel-title">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_3">
                                                3. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor ?
                                                </a>
                                             </h4>
                                          </div>
                                          <div id="accordion3_3" class="panel-collapse collapse">
                                             <div class="panel-body">
                                                Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch   et.
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                             </div>
                                          </div>
                                       </div>
                                       <div class="panel panel-default">
                                          <div class="panel-heading">
                                             <h4 class="panel-title">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_4">
                                                4. Wolf moon officia aute, non cupidatat skateboard dolor brunch ?
                                                </a>
                                             </h4>
                                          </div>
                                          <div id="accordion3_4" class="panel-collapse collapse">
                                             <div class="panel-body">
                                                3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                             </div>
                                          </div>
                                       </div>
                                       <div class="panel panel-default">
                                          <div class="panel-heading">
                                             <h4 class="panel-title">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_5">
                                                5. Leggings occaecat craft beer farm-to-table, raw denim aesthetic ?
                                                </a>
                                             </h4>
                                          </div>
                                          <div id="accordion3_5" class="panel-collapse collapse">
                                             <div class="panel-body">
                                                3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
                                             </div>
                                          </div>
                                       </div>
                                       <div class="panel panel-default">
                                          <div class="panel-heading">
                                             <h4 class="panel-title">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_6">
                                                6. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth ?
                                                </a>
                                             </h4>
                                          </div>
                                          <div id="accordion3_6" class="panel-collapse collapse">
                                             <div class="panel-body">
                                                3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
                                             </div>
                                          </div>
                                       </div>
                                       <div class="panel panel-default">
                                          <div class="panel-heading">
                                             <h4 class="panel-title">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_7">
                                                7. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft ?
                                                </a>
                                             </h4>
                                          </div>
                                          <div id="accordion3_7" class="panel-collapse collapse">
                                             <div class="panel-body">
                                                3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--end tab-pane-->
                  </div>
               </div>
               <!--END TABS-->
            </div>
         </div>
         
          <div id="responsive" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                 <h4 class="modal-title">Cambiar Imagen de Perfil</h4>
                              </div>
                              <div class="modal-body">
                                 <div class="scroller" style="height:300px" data-always-visible="1" data-rail-visible1="1">
                                    <div class="row">
                                       <div class="col-md-6">
                                           
                                           
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
                                      
                                    
                                       </div>
                                       <div class="margin-top-10">
                                          <a href="#" class="btn green">Submit</a>
                                          <a href="#" class="btn default">Cancel</a>
                                       </div>
                                    </form>
                                         
                                        
                                       </div>
                                       
                                 </div>
                              </div>
                              <div class="modal-footer">
                                 <button type="button" data-dismiss="modal" class="btn default">Cerrar</button>
                                 <button type="button" class="btn green">Guardar</button>
                              </div>
                           </div>
                        </div>
                     </div>
          </div>
                 
