<?php
$this->breadcrumbs=array(
	'In Out Datas'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List InOutData','url'=>array('index')),
array('label'=>'Manage InOutData','url'=>array('admin')),
);
?>

<h1>Create InOutData</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>