<?php
$this->breadcrumbs=array(
	'In Out Datas'=>array('index'),
	$model->id_data=>array('view','id'=>$model->id_data),
	'Update',
);

	$this->menu=array(
	array('label'=>'List InOutData','url'=>array('index')),
	array('label'=>'Create InOutData','url'=>array('create')),
	array('label'=>'View InOutData','url'=>array('view','id'=>$model->id_data)),
	array('label'=>'Manage InOutData','url'=>array('admin')),
	);
	?>

	<h1>Update InOutData <?php echo $model->id_data; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>