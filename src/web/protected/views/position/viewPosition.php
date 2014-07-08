<div class="row">
            <div class="col-md-12">
               <!-- BEGIN PAGE TITLE & BREADCRUMB-->
               <h3 class="page-title">
                  Cargos
               </h3>
               <ul class="page-breadcrumb breadcrumb">
                  <li>
                     <i class="icon-home"></i>
                     <a href="#">Inicio</a> 
                     <i class="icon-angle-right"></i>
                  </li>
                  <li>
                     <a href="#">Cargos Creados</a>
                     <i class="icon-angle-down"></i>
                  </li>
               </ul>
            </div>
         </div>

 <div class="portlet box blue">
                     <div class="portlet-title">
                        <div class="caption"><i class="icon-briefcase"></i>Cargos</div>
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
                                 <th class="fondotablesgris">Lider</th>
                                
                              </tr>
                           </thead>
                           <tbody>
                               <?php foreach($model as $value){
                                   if ($value->leader==1){ $leader="Si";} else {$leader="No";}
    
                                   $positionEmployee="
                                          <tr>
                                              <td>".$value->name."</td>
                                              <td>".$leader."</td>
                                              
                                            </tr>
                                           ";                               
                                   echo $positionEmployee ;
                               } ?>
                              
                           </tbody>
                        </table>
                     </div>
               </div>