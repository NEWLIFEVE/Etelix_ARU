<?php
/* @var $this EventEmployeeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Event Employees',
);

$this->menu=array(
	array('label'=>'Create EventEmployee', 'url'=>array('create')),
	array('label'=>'Manage EventEmployee', 'url'=>array('admin')),
);
?>

<h1>Event Employees</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
