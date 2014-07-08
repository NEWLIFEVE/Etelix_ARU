<div class="row">
            <div class="col-md-12">
               <!-- BEGIN PAGE TITLE & BREADCRUMB-->
               <h3 class="page-title">
                  Administrar Código de Posición
               </h3>
               <ul class="page-breadcrumb breadcrumb">
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
<!--                           <a href="#portlet-config" data-toggle="modal" class="config"></a>-->
                           <a href="javascript:;" class="reload"></a>
                           <a href="javascript:;" class="remove"></a>
                        </div>
                     </div>
                     <div class="portlet-body flip-scroll">
                        <table class="table table-bordered table-striped table-condensed flip-content">
                           <thead class="flip-content">
                              <tr>
                                  <th class="fondotablesgris">Nombre</th>
                                 <th class="fondotablesgris">Apellido</th>
                                 <th class="fondotablesgris">División</th>
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
                                               <td>".$value->idEmployee->first_name."</td>
                                               <td>".$value->idEmployee->last_name."</td>
                                               <td>".$value->idDivision->name."</td>
                                               <td>".$value->idPosition->name."</td>
                                               <td>".$value->position_code."</td>
                                               <td>".$value->start_date."</td>
                                               <td>".$value->end_date."</td>
                                            </tr>
                                           ";                               
                                   echo $positionEmployee ;
                               } ?>
                              
                           </tbody>
                        </table>
                     </div>
               </div>

<div class="modal-footer">
                                                     <a href="/positionCode/index"/><button type="button" class="btn green">Aceptar</button></a>
 </div>

