<div class="row">
            <div class="col-md-12">
               <!-- BEGIN PAGE TITLE & BREADCRUMB-->
               <h3 class="page-title">
                  Administrar Código de Posición
               </h3>
               <ul class="page-breadcrumb breadcrumb">
                    <li class="btn-group">
                            <button type="button" class="btn green dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
                            <span>Generar</span> <i class="icon-angle-down"></i>
                            </button>
                            <ul class="dropdown-menu pull-right" role="menu">
                                <li><a href="#" class="botonExcel"><i class=" verde icon-file-text"></i> Excel</a></li>
                                 <li class="divider"></li>
                                 <li><a href="#" class="botonCorreo"><i class="icon-envelope"></i> Enviar Por Correo</a></li>
                                 <li class="divider"></li>
                                 <li><a href="#" class="printButton"><i class="icon-print"></i> Imprimir</a></li>
                               
                                
                            </ul>
                        </li>
                  <li>
                     <i class="icon-home"></i>
                     <a href="#">Inicio</a> 
                     <i class="icon-angle-right"></i>
                  </li>
                  <li>
                     <a href="#">Administrar Código de Posición</a>
                     <i class="icon-angle-down"></i>
                  </li>
               </ul>
            </div>
         </div>

  <div class="portlet box blue">
                     <div class="portlet-title">
                        <div class="caption"><i class="icon-cogs"></i>Código de Posiciones </div>
                        <div class="tools">
                           <a href="javascript:;" class="collapse"></a>
                           <!--<a href="#portlet-config" data-toggle="modal" class="config"></a>-->
                           <a href="javascript:;" class="reload"></a>
                           <a href="javascript:;" class="remove"></a>
                        </div>
                     </div>
                     <div class="portlet-body flip-scroll">
                        <table class="table table-bordered table-striped table-condensed flip-content" id="adminPositionCode" name="adminPositionCode">
                           <thead class="flip-content">
                              <tr>
                                 <th class="fondotablesgris">Nombre</th>
                                 <th class="fondotablesgris">Apellido</th>
                                 <th class="fondotablesgris">División</th>
                                 <th class="fondotablesgris">Dependencia</th>
                                 <th class="fondotablesgris">Posición</th>
                                 <th class="fondotablesgris">Código de Posición</th>
                                 <th class="fondotablesgris">Fecha de Inicio</th>
                                 <th class="fondotablesgris">Fecha Fin</th>
                              </tr>
                           </thead>
                           <tbody>
                               <?php foreach($model as $value){
                                   $positionEmployee="
                                           <tr>
                                               <td class='ocultar' id='ids'>".$value->id."</td>
                                               <td>".$value->idEmployee->first_name."</td>
                                               <td>".$value->idEmployee->last_name."</td>
                                               <td>".$value->idDivision->name."</td>
                                               <td>".Division::getNameDivision($value->id_dependency)."&nbsp</td>    
                                               <td>".$value->idPosition->name."</td>
                                               <td>".$value->position_code."</td>
                                               <td>".$value->start_date."</td>
                                               <td>".$value->end_date."&nbsp</td>
                                            </tr>
                                           ";                               
                                   echo $positionEmployee ;
                               } ?>
                              
                           </tbody>
                        </table>
                     </div>
               </div>



<div class="modal-footer">
     <a href="/positionCode/index"/><button type="button" class="btn green">Agregar</button></a>
 </div>




<div id="administrarPosicion" style="margin-top: 130px;" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                 <h4 class="modal-title"> Generando Excel para Código de Posición</h4>
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
                                                            <div id="complete" class="verde"></div>
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
          </div>