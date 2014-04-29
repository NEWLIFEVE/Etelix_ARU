<?php
/* @var $this EventEmployeeController */
/* @var $model EventEmployee */

$this->breadcrumbs=array(
	'Event Employees'=>array('index'),
	'Create',
);

$this->menu=array(
//	array('label'=>'List EventEmployee', 'url'=>array('index')),
//	array('label'=>'Manage EventEmployee', 'url'=>array('admin')),
);
?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>