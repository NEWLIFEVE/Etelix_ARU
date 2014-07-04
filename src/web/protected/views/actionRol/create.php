<?php
/* @var $this ActionRolController */
/* @var $model ActionRol */

$this->breadcrumbs=array(
	'Action Rols'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ActionRol', 'url'=>array('index')),
	array('label'=>'Manage ActionRol', 'url'=>array('admin')),
);
?>

<h1>Create ActionRol</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>