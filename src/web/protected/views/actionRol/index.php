<?php
/* @var $this ActionRolController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Action Rols',
);

$this->menu=array(
	array('label'=>'Create ActionRol', 'url'=>array('create')),
	array('label'=>'Manage ActionRol', 'url'=>array('admin')),
);
?>

<h1>Action Rols</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
