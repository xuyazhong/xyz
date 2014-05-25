<?php
/* @var $this BooksController */
/* @var $data Books */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('book_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->book_id), array('view', 'id'=>$data->book_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('author_or_editor')); ?>:</b>
	<?php echo CHtml::encode($data->author_or_editor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isbn')); ?>:</b>
	<?php echo CHtml::encode($data->isbn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('publisher')); ?>:</b>
	<?php echo CHtml::encode($data->publisher); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('copyright_year')); ?>:</b>
	<?php echo CHtml::encode($data->copyright_year); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('categories')); ?>:</b>
	<?php echo CHtml::encode($data->categories); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('audience')); ?>:</b>
	<?php echo CHtml::encode($data->audience); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('media')); ?>:</b>
	<?php echo CHtml::encode($data->media); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('thumbnail_url')); ?>:</b>
	<?php echo CHtml::encode($data->thumbnail_url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('info_url')); ?>:</b>
	<?php echo CHtml::encode($data->info_url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reference_url')); ?>:</b>
	<?php echo CHtml::encode($data->reference_url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reference_no')); ?>:</b>
	<?php echo CHtml::encode($data->reference_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('notes')); ?>:</b>
	<?php echo CHtml::encode($data->notes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('borrower_id')); ?>:</b>
	<?php echo CHtml::encode($data->borrower_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('due_date')); ?>:</b>
	<?php echo CHtml::encode($data->due_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_created')); ?>:</b>
	<?php echo CHtml::encode($data->date_created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_modified')); ?>:</b>
	<?php echo CHtml::encode($data->date_modified); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modified_by')); ?>:</b>
	<?php echo CHtml::encode($data->modified_by); ?>
	<br />

	*/ ?>

</div>