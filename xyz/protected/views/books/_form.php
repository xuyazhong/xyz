<?php
/* @var $this BooksController */
/* @var $model Books */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'books-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'author_or_editor'); ?>
		<?php echo $form->textField($model,'author_or_editor',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'author_or_editor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'isbn'); ?>
		<?php echo $form->textField($model,'isbn',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'isbn'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'publisher'); ?>
		<?php echo $form->textField($model,'publisher',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'publisher'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'copyright_year'); ?>
		<?php echo $form->textField($model,'copyright_year',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'copyright_year'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'categories'); ?>
		<?php echo $form->textField($model,'categories',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'categories'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'audience'); ?>
		<?php echo $form->textField($model,'audience',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'audience'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'media'); ?>
		<?php echo $form->textField($model,'media',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'media'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'thumbnail_url'); ?>
		<?php echo $form->textField($model,'thumbnail_url',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'thumbnail_url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'info_url'); ?>
		<?php echo $form->textField($model,'info_url',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'info_url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reference_url'); ?>
		<?php echo $form->textField($model,'reference_url',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'reference_url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reference_no'); ?>
		<?php echo $form->textField($model,'reference_no',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'reference_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'notes'); ?>
		<?php echo $form->textField($model,'notes',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'notes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'borrower_id'); ?>
		<?php echo $form->textField($model,'borrower_id'); ?>
		<?php echo $form->error($model,'borrower_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'due_date'); ?>
		<?php echo $form->textField($model,'due_date'); ?>
		<?php echo $form->error($model,'due_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_created'); ?>
		<?php echo $form->textField($model,'date_created'); ?>
		<?php echo $form->error($model,'date_created'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_modified'); ?>
		<?php echo $form->textField($model,'date_modified'); ?>
		<?php echo $form->error($model,'date_modified'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_by'); ?>
		<?php echo $form->textField($model,'created_by',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'created_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modified_by'); ?>
		<?php echo $form->textField($model,'modified_by',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'modified_by'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->