<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombres')); ?>:</b>
	<?php echo CHtml::encode($data->nombres); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('identificacion')); ?>:</b>
	<?php echo CHtml::encode($data->identificacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('genero')); ?>:</b>
	<?php echo CHtml::encode($data->genero); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ciudad_id')); ?>:</b>
	<?php echo CHtml::encode($data->ciudad->nombre); ?>
	<br />


</div>