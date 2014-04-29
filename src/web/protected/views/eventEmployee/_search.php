<?php
/* @var $this EventEmployeeController */
/* @var $model EventEmployee */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_employee'); ?>
		<?php echo $form->textField($model,'id_employee'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date'); ?>
		<?php echo $form->textField($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'time_event'); ?>
		<?php echo $form->textField($model,'time_event'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_type_event'); ?>
		<?php echo $form->textField($model,'id_type_event'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->