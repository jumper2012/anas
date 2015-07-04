<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_data')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_data),array('view','id'=>$data->id_data)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('department')); ?>:</b>
	<?php echo CHtml::encode($data->department); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no')); ?>:</b>
	<?php echo CHtml::encode($data->no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_time')); ?>:</b>
	<?php echo CHtml::encode($data->date_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('location_id')); ?>:</b>
	<?php echo CHtml::encode($data->location_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_number')); ?>:</b>
	<?php echo CHtml::encode($data->id_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('verify_code')); ?>:</b>
	<?php echo CHtml::encode($data->verify_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_kartu')); ?>:</b>
	<?php echo CHtml::encode($data->no_kartu); ?>
	<br />

	*/ ?>

</div>