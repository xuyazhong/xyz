<?php
/* @var $this BooksMediaController */
/* @var $data BooksMedia */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('medium_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->medium_id), array('view', 'id'=>$data->medium_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('medium_name')); ?>:</b>
	<?php echo CHtml::encode($data->medium_name); ?>
	<br />


</div>