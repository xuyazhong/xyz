<?php
/* @var $this BooksMediaController */
/* @var $model BooksMedia */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'medium_id'); ?>
		<?php echo $form->textField($model,'medium_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'medium_name'); ?>
		<?php echo $form->textField($model,'medium_name',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->