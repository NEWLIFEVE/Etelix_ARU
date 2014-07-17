<?php
/* @var $this ActionRolController */
/* @var $model ActionRol */

$this->breadcrumbs=array(
	'Action Rols'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ActionRol', 'url'=>array('index')),
	array('label'=>'Create ActionRol', 'url'=>array('create')),
	array('label'=>'View ActionRol', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ActionRol', 'url'=>array('admin')),
);
?>

<h1>Update ActionRol <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>