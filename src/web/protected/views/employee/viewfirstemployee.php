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
                  Agregar Nuevo Empleado <!--<small>statistics and more</small>-->
               </h3>
               <ul class="page-breadcrumb breadcrumb">
                  <li>
                     <i class="icon-home"></i>
                     <a href="/">Inicio</a> 
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

             
 <!-- BEGIN PAGE HEADER-->   
       
         <!-- END PAGE HEADER-->
         <!-- BEGIN PAGE CONTENT-->
         <div class="row">
            <div class="col-md-12">
               <div class="portlet box blue" id="firstview1">
                  <div class="portlet-title">
                     <div class="caption">
                        <i class="icon-reorder"></i> Asistente para formularios - <span class="step-title">Paso 1 de 4</span>
                     </div>
                     <div class="tools hidden-xs">
                        <a href="javascript:;" class="collapse"></a>
                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                        <a href="javascript:;" class="reload"></a>
                        <a href="javascript:;" class="remove"></a>
                     </div>
                  </div>
                  <div class="portlet-body form">
                      
                      <form action="#" class="form-horizontal" id="firstview" name="firstview" method="POST" >
                        <div class="form-wizard">
                           <div class="form-body">
                              <ul class="nav nav-pills nav-justified steps">
                                 <li>
                                    <a href="#tab1" data-toggle="tab" class="step">
                                    <span class="number">1</span>
                                    <span class="desc"><i class="icon-ok"></i> Datos Basicos</span>   
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#tab2" data-toggle="tab" class="step">
                                    <span class="number">2</span>
                                    <span class="desc"><i class="icon-ok"></i> Dirección</span>   
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#tab3" data-toggle="tab" class="step active">
                                    <span class="number">3</span>
                                    <span class="desc"><i class="icon-ok"></i> Datos Bancarios</span>   
                                    </a>
                                 </li>
                                 
<!--                                  <li>
                                    <a href="#tab3" data-toggle="tab" class="step active">
                                    <span class="number">3</span>
                                    <span class="desc"><i class="icon-ok"></i>familia</span>   
                                    </a>
                                 </li>-->
                                 <li>
                                    <a href="#tab4" data-toggle="tab" class="step">
                                    <span class="number">4</span>
                                    <span class="desc"><i class="icon-ok"></i> Confirmar</span>   
                                    </a> 
                                 </li>
                              </ul>
                              <div id="bar" class="progress progress-striped" role="progressbar">
                                 <div class="progress-bar progress-bar-success"></div>
                              </div>
                              <div class="tab-content">
                                 <div class="alert alert-danger display-none">
                                    <button class="close" data-dismiss="alert"></button>
                                    You have some form errors. Please check below.
                                 </div>

                                 <div class="tab-pane active" id="tab1">
                                    <h3 class="block">Proporcione detalles del Empleado</h3>
                                    <div class="form-group">
                                       <label class="control-label col-md-3">Nombre<span class="required">*</span></label>
                                       <div class="col-md-4">
                                          <input type="text" class="form-control" name="first_name"/>
                                          <span class="help-block">Proporcione el Nombre del Empleado</span>
                                       </div>
                                    </div>
            

                                 </div>
                                 
                                       
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
       
  
   <!-- END PAGE LEVEL SCRIPTS -->
