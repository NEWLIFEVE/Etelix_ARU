<?php
/* @var $this EventEmployeeController */
/* @var $model EventEmployee */

$this->breadcrumbs=array(
	'Event Employees'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List EventEmployee', 'url'=>array('index')),
	array('label'=>'Create EventEmployee', 'url'=>array('create')),
	array('label'=>'View EventEmployee', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage EventEmployee', 'url'=>array('admin')),
);
?>

<h1>Update EventEmployee <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>