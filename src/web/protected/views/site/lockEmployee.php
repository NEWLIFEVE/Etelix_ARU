 
 <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/metronic/css/pages/lock.css" />



<body>
    
     
     
<div class="page-lock">
    <div class="page-logo">
      <p class="titulo"><font class="A">A</font><font class="RU">RU</font></p>
    </div>
    
       
    <div class="page-body">
        
      <img class="page-lock-img" src="/<?php echo $model->image_rute; ?>">
      <div class="page-lock-info">
        <h1><?php echo $model->first_name; ?> <?php echo $model->last_name; ?> </h1>
        <span class="email"><?php echo $model->email_company; ?></span>
        <span class="locked">Bloqueado</span>
        <div class="form">
        <?php $form=$this->beginWidget('CActiveForm', array('id'=>'submit_form','enableAjaxValidation'=>true)); ?>
            <div class="tab-content">
                <table  class="input-group form-group">
                    <tr>
                        <td rowspan="2">
                             <?php  echo $form->passwordField($user,'password', array('placeholder' => 'Contraseña','class'=>'form-control','value'=>''));?>
                             <?php echo $form->error($user,'password'); ?>
                             <?php  echo $form->hiddenField($user,'username', array());?>
                        </td>
                        <td>
                             <span class="input-group-btn"> 
                            <button type="submit" class="btn blue icn-only"  id="lockEmployee">Login<i class="m-icon-swapright m-icon-white"></i></button>
                      </span>
                        </td>
                    </tr>
                  
                </table>

            </div>
          <div class="relogin">
              <?php //echo $user->username; ?>
            <a href="/site/Logout">No eres <?php echo $model->first_name; ?> <?php echo $model->last_name; ?> ?</a>
          </div>
        <?php $this->endWidget(); ?>
        </div>
      </div>
    </div>
    <div class="page-footer">

      Copyright &copy; <?php echo date('Y'); ?> ETELIX Group All Rights Reserved Version 1.1.1.1

    </div>
  </div>
</body>    
  <script>
    jQuery(document).ready(function() {    
       Lock.init();
    });
  </script>