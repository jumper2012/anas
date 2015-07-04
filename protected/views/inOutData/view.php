<?php
$this->breadcrumbs=array(
	'In Out Datas'=>array('index'),
	$model->id_data,
);

$this->menu=array(
array('label'=>'List InOutData','url'=>array('index')),
array('label'=>'Create InOutData','url'=>array('create')),
array('label'=>'Update InOutData','url'=>array('update','id'=>$model->id_data)),
array('label'=>'Delete InOutData','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_data),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage InOutData','url'=>array('admin')),
);
?>

<h1>View InOutData #<?php echo $model->id_data; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id_data',
		'department',
		'nama',
		'no',
		'date_time',
		'status',
		'location_id',
		'id_number',
		'verify_code',
		'no_kartu',
),
)); ?>
