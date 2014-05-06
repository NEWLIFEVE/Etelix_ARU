<?php
/* @var $this EventEmployeeController */
/* @var $data EventEmployee */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_employee')); ?>:</b>
	<?php echo CHtml::encode($data->id_employee); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hour_event')); ?>:</b>
	<?php echo CHtml::encode($data->hour_event); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_type_event')); ?>:</b>
	<?php echo CHtml::encode($data->id_type_event); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_location')); ?>:</b>
	<?php echo CHtml::encode($data->id_location); ?>
	<br />


</div>