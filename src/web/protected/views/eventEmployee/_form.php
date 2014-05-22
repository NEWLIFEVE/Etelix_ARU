<?php //
/* @var $this EventEmployeeController */
/* @var $model EventEmployee */
/* @var $form CActiveForm */
?>

<?php $form=$this->beginWidget('CActiveForm', array('id'=>'event-employee-form','enableAjaxValidation'=>true)); ?>

<?php
$div="";
for($i=1;$i<5;$i++)
{
    $div.="<div class='form-group' id='tab".$i."'>
            <label class='control-label col-md-3 letra_empleado'>";
    if(isset($eventos[$i-1]['hour'])) $div.=$eventos[$i-1]['hour'];
    $div.="</label>
          </div>";
}
?>
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">Jornada Laboral</h3>
        <ul class="page-breadcrumb breadcrumb">
             <li>
                     <i class="icon-home"></i>
                     <a href="#">Inicio</a> 
                     <i class="icon-angle-right"></i>
                  </li>
                  <li>
                     <a href="#">Declarar</a>
                     <i class="icon-angle-down"></i>
                  </li>
<!--            <li>
                <i class="icon-home"></i>
                <a href="/">Inicio</a>
            </li>
            <li class="pull-right">
                <div id="dashboard-report-range" class="dashboard-date-range tooltips" data-placement="top" data-original-title="Change dashboard date range">
                    <i class="icon-calendar"></i>
                    <span></span>
                    <i class="icon-angle-down"></i>
                </div>
            </li>-->
        </ul>
        <!-- END PAGE TITLE & BREADCRUMB-->
    </div>
</div>
<!-- BEGIN PAGE HEADER--> 
<!-- END PAGE HEADER-->
<!-- BEGIN PAGE CONTENT-->
<div class="row">
    <div class="col-md-12">
        <div class="portlet box blue" id="declare_day">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-reorder"></i>Jornada Laboral - <span class="step-title">Paso 1 de 4</span>
                </div>
                <div class="tools hidden-xs">
                    <a href="javascript:;" class="collapse"></a>
                    <!--<a href="#portlet-config" data-toggle="modal" class="config"></a>-->
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                </div>
            </div>
            <div class="portlet-body form">
                <div class="form-wizard">
                    <div class="form-body">
                        <ul class="nav nav-pills nav-justified steps" id="naivig">
                            <li class="<?php if(isset($eventos[0]['hour'])) echo 'done';if(!isset($eventos[0]['hour'])) echo 'active';?>">
                                <a href="#tab1" data-toggle="tab" class="step">
                                    <span class="number">1</span>
                                    <span class="desc">
                                        <i class="icon-ok"></i>Inicio de Jornada Laboral
                                    </span>
                                </a>
                            </li>
                            <li class="<?php if(isset($eventos[1]['hour'])) echo 'done';if(!isset($eventos[1]['hour']) && isset($eventos[0]['hour'])) echo 'active';?>">
                                <a href="#tab2" data-toggle="tab" class="step">
                                    <span class="number">2</span>
                                    <span class="desc">
                                        <i class="icon-ok"></i>Inicio Descanso/Almuerzo
                                    </span>
                                </a>
                            </li>
                            <li class="<?php if(isset($eventos[2]['hour'])) echo 'done';if(!isset($eventos[2]['hour']) && isset($eventos[1]['hour'])) echo 'active';?>">
                                <a href="#tab3" data-toggle="tab" class="step">
                                    <span class="number">3</span>
                                    <span class="desc">
                                        <i class="icon-ok"></i>Fin Descanso/Almuerzo
                                    </span>
                                </a>
                            </li>
                            <li class="<?php if(isset($eventos[3]['hour'])) echo 'done';if(!isset($eventos[3]['hour']) && isset($eventos[2]['hour'])) echo 'active';?>">
                                <a href="#tab4" data-toggle="tab" class="step">
                                    <span class="number">4</span>
                                    <span class="desc">
                                        <i class="icon-ok"></i>Fin de Jornada Laboral
                                    </span>
                                </a> 
                            </li>
                        </ul>
                        <div id="bar" class="progress progress-striped" role="progressbar">
                            <div class="progress-bar progress-bar-success" ></div>
                        </div>
                        <div class="tab-content">
                            <?php echo $div;?>
                            <input type="hidden" value="<?php  echo $contador=count($eventos); ?>" id="contador"/>
                        </div>
                    </div>
                    <div class="form-actions fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-offset-3 col-md-9">
                                    <a id="declare" class="btn blue btdeclare centrar_botones" data-toggle="modal" href="#responsive">
                                        Declarar
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="responsive" class="modal fade" tabindex="0" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                    <h3 class="modal-title">Verificar Declaraciòn</h3>
                                </div>
                                <div class="modal-body">
                                    <div class="scroller" style="height:100px" data-always-visible="1" data-rail-visible1="1" tabindex="0">
                                        <div class="row">
                                            <div class="col-md-6 message-declare" id="start_time"><h4>Indique donde esta inciando su jornada laboral</h4></div>
                                            <div class="col-md-6 message-declare" id="start_break"><h4>¿Esta seguro que desea declarar el inicio del Descanso/Almuerzo?</h4></div>
                                            <div class="col-md-6 message-declare" id="end_break"><h4>¿Esta seguro que desea declarar el fin del Descanso/Almuerzo?</h4></div>
                                            <div class="col-md-6 message-declare" id="end_time"><h4>¿Esta seguro que desea declarar el fin de jornada?</h4></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer" id="modale">
                                    <a href="javascript:;">
                                        <i class=""></i>
                                        <input type="button" value="Aceptar" id="aceptar" class="btn blue button-next"  data-dismiss="modal"/>
                                    </a>
                                    <a href="javascript:;">
                                        <i class=""></i>
                                        <input type="button" value="Puesto de Trabajo" id="puesto_trabajo" class="btn blue button-next"  data-dismiss="modal"/>
                                    </a>
                                    <a href="javascript:;">
                                        <i class=""></i>
                                        <input type="button" value="Remoto" id="remoto" class="btn blue button-next"  data-dismiss="modal"/>
                                    </a>
                                    <a href="javascript:;">
                                        <i class=""></i>
                                        <input type="button" value="Aceptar" id="fin" class="btn blue button-submit"  data-dismiss="modal"/>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->endWidget(); ?>
</div>