<?php
$this->breadcrumbs=array(
	'In Out Datas',
);

$this->menu=array(
array('label'=>'Create InOutData','url'=>array('create')),
array('label'=>'Manage InOutData','url'=>array('admin')),
);
?>

<h1>In Out Datas</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
