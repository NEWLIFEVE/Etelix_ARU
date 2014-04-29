<?php
/* @var $this EventEmployeeController */
/* @var $model EventEmployee */

$this->breadcrumbs=array(
	'Event Employees'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List EventEmployee', 'url'=>array('index')),
	array('label'=>'Create EventEmployee', 'url'=>array('create')),
	array('label'=>'Update EventEmployee', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete EventEmployee', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EventEmployee', 'url'=>array('admin')),
);
?>

<h1>View EventEmployee #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_employee',
		'date',
		'time_event',
		'id_type_event',
	),
)); ?>
