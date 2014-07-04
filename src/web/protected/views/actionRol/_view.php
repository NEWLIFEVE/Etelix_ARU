<?php
/* @var $this ActionRolController */
/* @var $data ActionRol */
//echo Yii::app()->controller->action->id;





?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_rol')); ?>:</b>
	<?php echo CHtml::encode($data->id_rol); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_action_controller')); ?>:</b>
	<?php echo CHtml::encode($data->id_action_controller); ?>
	<br />


</div>