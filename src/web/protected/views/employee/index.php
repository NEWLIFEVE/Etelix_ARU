<?php
/* @var $this EmployeeController */

$this->breadcrumbs=array(
	'Employee',
);
?>
<!--<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>-->

<div class="row">
            <div class="col-md-12">
               <!-- BEGIN PAGE TITLE & BREADCRUMB-->
               <h3 class="page-title">
                  Datos Empleado <!--<small>statistics and more</small>-->
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



<div class="row">
    
    
    
    
    
    
    
   
<div class="portlet box blue">
                     <div class="portlet-title">
                        <div class="caption"><i class="icon-user"></i>Empleados</div>
                        <div class="tools">
                           <a href="javascript:;" class="collapse"></a>
                           <a href="#portlet-config" data-toggle="modal" class="config"></a>
                           <a href="javascript:;" class="reload"></a>
                           <a href="javascript:;" class="remove"></a>
                        </div>
                     </div>
  
                    
                
                     <div class="portlet-body flip-scroll">
                         
                         <div class="table-toolbar">
                        <div class="btn-group">
                            
                           <?php echo CHtml::link('Agregar', array('create'),$htmlOptions=array('class'=>'btn green'));?>
<!--                            <a href="#"><button id="sample_editable_1_new" class="btn green" >
                           Agregar <i class="icon-plus"></i>-->
                           </button></a> 
                        </div>
<!--                        <div class="btn-group pull-right">
                           <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="icon-angle-down"></i>
                           </button>
                           <ul class="dropdown-menu pull-right">
                              <li><a href="#">Print</a></li>
                              <li><a href="#">Save as PDF</a></li>
                              <li><a href="#">Export to Excel</a></li>
                           </ul>
                        </div>-->
                     </div>
                        <table class="table table-bordered table-striped table-condensed flip-content">
                           <thead class="flip-content">
                              <tr>
                                 <th class="numeric">Nombre</th>
                                 <th class="numeric">Apellido</th>
                                 <th class="numeric">Cédula</th>
                                 <th class="numeric">Correo Corporativo</th>
                                 <th class="numeric">Skype</th>
                                 <th class="numeric">Extensión de Oficina</th>
                                 <th class="numeric"></th>

                              </tr>
                           </thead>
                           <tbody>
                              <?php foreach ($employee as $t){ ?>
    
                                <tr>
                            <!--    <td><?php echo $t->id; ?></td>
                                    <td><?php echo $t->id_position; ?></td>
                                    <td><?php echo $t->id_supervisor;?></td>
                                    <td><?php echo $t->id_education;?></td>
                                    <td><?php echo $t->id_marital_status;?></td>-->
                                    <td><?php echo $t->first_name;?></td>
                                    <td><?php echo $t->last_name;?></td>
                                    <td><?php echo $t->identity_card;?></td>
                            <!--    <td><?php echo $t->sex;?></td>-->
<!--                                <td><?php echo $t->date_birth;?></td>
                                    <td><?php echo $t->nationality;?></td>     
                                    <td><?php echo $t->address_room;?></td>
                                    <td><?php echo $t->email_personal;?></td>-->
                                    <td><?php echo $t->email_company;?></td>
                                    <td><?php echo $t->skype;?></td>
<!--                                    <td><?php echo $t->cellphone;?></td>
                                    <td><?php echo $t->home_phone;?></td>-->
                                    <td><?php echo $t->extension_numeric;?></td>
                                    <td><?php echo CHtml::link('Ver', array('view','id'=>$t->id));?></td>
 
                                </tr>
                                <?php } ?>
                              
                           </tbody>
                        </table>
                     </div>
               </div>

</div>


                 
