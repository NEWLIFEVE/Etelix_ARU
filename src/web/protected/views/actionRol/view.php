<?php
/* @var $this ActionRolController */
/* @var $model ActionRol */

$this->breadcrumbs=array(
	'Action Rols'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ActionRol', 'url'=>array('index')),
	array('label'=>'Create ActionRol', 'url'=>array('create')),
	array('label'=>'Update ActionRol', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ActionRol', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ActionRol', 'url'=>array('admin')),
);
?>

<h1>View ActionRol #<?php echo $model->id; ?></h1>

<?php 



$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_rol',
		'id_action_controller',
	),
)); ?>
